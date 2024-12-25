<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Category;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // include the posts to show recent posts;
        $posts = Post::query()
            ->where('active','=',1)
            ->whereDate('published_at','<',Carbon::now())
            ->orderBy('published_at','desc')
            ->limit(2)
            ->paginate(10);

        $categories = Category::all();

        return view('home',compact('posts','categories'));
    }
}
