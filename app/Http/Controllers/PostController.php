<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
            ->where('active','=',1)
            ->whereDate('published_at','<',Carbon::now())
            ->orderBy('published_at','desc')
            ->paginate(10);
        $categories = Category::query()->paginate(6);
        return view('blog', compact('posts','categories'));
    }


    public function show(Post $post)
    {
        $categories = Category::paginate(10);
        // incase the posts are not active, or to be published in the future then show that they aren't found
        if(!$post->active || $post->published_at > Carbon::now()){
            throw new NotFoundHttpException();
        }
        // else we return the blogPost details.
        return view('blogDetails', compact('post', 'categories'));
    }

  
}
