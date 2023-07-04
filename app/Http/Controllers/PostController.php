<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;


class PostController extends Controller
{


    public function index()
    {

        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        $profile =  Auth::user()->first();
        return view('Front.Socialmedia.addPost', compact('profile'));
    }


    public function CreatePost(Request $request )
    {

        $request->validate([
            'body'=>'required|string',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png',
            'user_id'=> 'nullable',
       ]);
        $fileName = null;
        if ($image = $request->file('photo')) {
            $destinationPath = 'posts/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['photo'] = $fileName;
        }
        $user_id = Auth::id();
        $post = new Post;
        $post->user_id = $user_id;
        $post->body = $request->body;
        $post->photo = $fileName;
        $post->save();
        return redirect()->route('social.home');

    }

    public function edit($id)
    {
        $profile =  Auth::user()->first();
        $post = Post::findOrFail($id);
        return view('Front.Socialmedia.editPost', compact('profile' , 'post'));
    }

    public function editPost(Request $request  , $id)
    {

        $request->validate([
            'body'=>'required|string',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png',
            'user_id'=> 'nullable',
       ]);

       $post = Post::findOrFail($id);

//        //image
//        $image = $request->photo;
//        if($image){
//            $image_path = public_path().'/storage/photo/'.$post->photo;
//            if(file_exists($image_path)){
//                unlink($image_path);
//            }
//            $image_name = time().'.'.$image->getClientoriginalExtension();
//            $request->photo->move('storage/photo',$image_name);
//            $post->photo = $image_name;
//        }


        if ($image = $request->file('photo')) {

            $destinationPath = 'posts/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['photo'] = "$fileName";
            if(file_exists(public_path('posts/' .  $post->photo))){
                unlink(public_path('posts/') . $post->photo);
            }
        }
        $user_id = Auth::id();
        $post->photo = $fileName;
        $post->user_id = $user_id;
        $post->body = $request->body;
        $post->save();
        return back();

    }


    public function likePost(Request $request)
    {

        $post = Post::find($request->post_id);
        $post->like();
        $post->save();

        return response()->json(['status' => 200,'message' => 'User Like Post Successfully']);

//        return back()->with('message','Post Like successfully!');
    }

    public function unlikePost(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->unlike();
        $post->save();

        return response()->json(['status' => 200,'message' => 'User UnLike Post Successfully']);

//        return back()->with('message','Post Like undo successfully!');
    }


    public function comment(Request $request)

    {
        $request->validate([
            'body'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();

    }
    public function  delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return back();
    }

    public function deleteCommentWithUser(Request $request): JsonResponse{

        $comment = Comment::findOrFail($request->id);
        $comment->delete();
        return response()->json(['status' => 200,'message' => 'Comment deleted successfully']);

    }
}
