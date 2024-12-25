<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Category;
use \App\Models\Course;
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
        // pass all the categories to home.
        $categories = Category::all();
        // Get only 4 courses and pass them to the home view
        $courses = Course::limit(4)->get();
        return view('home',compact('posts','categories','courses'));
    }
}
