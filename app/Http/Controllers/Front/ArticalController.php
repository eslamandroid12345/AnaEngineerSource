<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function __construct()
    {
        $this->middleware('check.article.limit');
    }
    public function view_all_artical(Request $request)
    {
        if($request->search){

            $search = preg_replace("/^<p.*?>/", "",$request->search);
            $articles = Artical::query()
              ->where('title', 'like', '%'. $search .'%')
                  ->orWhere('min_description','like', '%'. $search .'%')
                  ->orWhere('description','like', '%' . $search .'%')
                ->paginate(8);
        }else
        {
            $articles = Artical::paginate(8);
        }
        $lastArticles = Artical::latest()->take(3)->get();

        $categories = Category::all();

        return view ('Front.artical.blogs', compact('articles','categories','lastArticles'));
    }
    public function getArticalByCategory()
    {
        $categories = Category::withCount('artical')->get();
        return view ('Front.artical.blogs',compact('categories'));
    }

    //this for show artical in Front
    public function show_artical($slug)
    {
        $article = Artical::where('slug', $slug)->firstOrFail();
        $lastArticles = Artical::latest()->paginate(10);
        $lastArticle = Artical::where('id','<',$article->id)->first();
        $nextArticle = Artical::where('id','>',$article->id)->first();
        $categories = Category::all();

        return view ('Front.artical.blog-details', compact('article','lastArticles','nextArticle','lastArticle','categories'));
    }
    public function category_artical(Request $request)
    {
        $categoryId = $request->query('category');
        $category = Category::findOrFail($categoryId);

        // Fetch all articles related to the selected category

        $articles = $category->artical()->paginate(12);

        $categories = Category::get();
        $lastArticles = Artical::latest()->take(3)->get();

        return view('Front.artical.category_artical', compact('articles', 'categories', 'lastArticles'));
    }


    public function category_search(Request $request)
    {
        $searchTerm = $request->query('search');
        $categoryId = $request->query('category');
        $categoryId  = preg_replace("/^<p.*?>/", "",$categoryId);

        // Check if both search term and category ID are provided
        if($request->filled('search') && $request->filled('category')){
            $articles = Artical::where('category_id', $categoryId)
                ->where(function ($query) use ($searchTerm) {

                    $query->where('title', 'like', '%'.$searchTerm.'%')
                        ->orWhere('min_description','like', '%'.$searchTerm.'%')
                        ->orWhere('description','like', '%' .$searchTerm.'%');
                        // ->orWhere('content', 'like', '%'.$searchTerm.'%');
                })
                ->paginate(8);
        } else
        {
            // If search term or category ID are not provided, retrieve all articles
            $articles = Artical::paginate(8);
        }
        $lastArticles = Artical::latest()->take(3)->get();
        $categories = Category::all();

        return view('Front.artical.category.category', compact('articles','categories','lastArticles'));
    }


}
