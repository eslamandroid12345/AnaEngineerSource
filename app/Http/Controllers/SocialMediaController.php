<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use App\Models\Follow;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\MatchOldPassword;


class SocialMediaController extends Controller
{


    public function profile($id)
        {
            $profile = User::findOrFail($id);
            $posts = Post::with(['user','comments' => function($comments){
                $comments->latest()->paginate(4);
            }])->where('user_id','=',$id)->get();

//            return $posts;

            $articles = Artical::query()->latest()->paginate(3);
            $users = User::query()->where('id','<>',Auth::id())->latest()->paginate(4);

            $user_following = DB::table('follows')->where('follower_id','=',Auth::id())
                ->where('following_id','=',$id);

            $followers = DB::table('follows')->where('following_id','=',$id)->count();

            return view ('Front.Socialmedia.profile', compact ('profile', 'id' , 'posts','user_following','followers','articles','users'));
        }

    //added by eslam
    public function flowUser(Request $request){

        $flow = new Follow();
        $flow->follower_id =  Auth::id();
        $flow->following_id = $request->following_id;
        $flow->save();

        return response()->json(['status' => 200, 'message' => 'تم المتابعه بنجاح']);
    }

    //added by eslam
    public function unFlowUser(Request $request){

        $user_following = DB::table('follows')->where('follower_id','=',Auth::id())
            ->where('following_id','=',$request->following_id)->delete();

        return response()->json(['status' => 200, 'message' => 'تم الغاء المتابعه بنجاح']);
    }

    // post admin
    public function admin_posts()
        {
            $posts = Post::with('user')->get();
            return view ('Dashbord.social.posts', compact('posts'));
        }

    // post
    public function renderpageposts()
        {
            $profile = User::all();
            return view ('Front.Socialmedia.addPost', compact ('profile'));
        }


    public function CreatePost(Request $request )
        {
           $request->validate([
                'body'=>'required|string',
                'photo'=>'nullable|image|mimes:jpg,jpeg,png',
                'user_id'=> 'nullable',
           ]);
            $user_id = Auth::id();
            $post = new Post;
            $post->user_id = $user_id;
            $post->body = $request->body;
            $photo = $request->file('photo');
            $path = $photo->store('public/storage/post_photo');
            $post->photo = $path;
            $post->save();
            return redirect(route('allposts'));

        }

        public function  delete($id)

        {
            $post = Post::findOrFail($id);
            $post->delete();
            return back();

        }

        public function store(Request $request)
        {
            $request->validate([
                'body' => 'required',
            ],[

               'body.required' => 'من فضلك اكتب تعليق'
            ]);
            $comment = new Comment;
            $comment->body = $request->body;
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $request->post_id;
            $comment->save();

            return response()->json(['status' => 200,'message' => 'تم اضافه التعليق بنجاح']);


//            return back();
        }

        public function likePost(Request $request, $postId)
            {
                $user = User::find(1);
                $post = Post::find($postId);

                $like = $user->likes()->where('post_id', $post->id)->first();

                if (!$like) {
                    // Create a new like
                    $user->likes()->create([
                        'post_id' => $post->id,
                    ]);
                } else {
                    // Delete the like
                    $like->delete();
                }

                return redirect()->back();
            }

        public function homePage()
        {
            $posts = Post::with(['user','comments' => function($comments){
                $comments->latest()->paginate(4);
            }])->orderBy('created_at', 'desc')->get();
            $profile = Auth::user();
            $followers = DB::table('follows')->where('following_id','=',$profile->id)->get();
            $articles = Artical::query()->latest()->paginate(3);
            $users = User::query()->where('id','<>',Auth::id())->latest()->paginate(4);

            return view ('Front.Socialmedia.index', ['posts' => $posts,'profile' => $profile, 'followers' => $followers,'users' => $users,'articles' => $articles]);
        }

        public function editSecurity($id)
        {

            $profile= User::findOrFail($id);
            return view ('Front.Socialmedia.editsecurity', compact('profile'));
        }



        public function changePassword(Request $request)
            {
                // Validate the request data
                $request->validate([
                    'old_password' => ['required', new MatchOldPassword],
                    'new_password' => ['required', 'min:8', 'confirmed'],
                ],
                [
                    'old_password' => 'الباسورد القديم خاطئ',
                    'new_password' => 'حقل الباسورد الجديد مطلوب',
                ]);

                // Get the authenticated user
                $user = Auth::user();

                // Update the user's password
                $user->update([
                    'password' => Hash::make($request->new_password)
                ]);

                // Redirect back with success message
                return back()->with('success', ' تم تغير الباسورد بنجاح');
            }
      }
