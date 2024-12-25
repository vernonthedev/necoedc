<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class CourseController extends Controller
{
    // Search function to handle searching through all courses.
  public function search(Request $request)
  {
    $query = $request->input('query');

    // Search courses based on title or description
    $courses = Course::query()
        ->where('title', 'like', "%{$query}%")
        ->orWhere('description', 'like', "%{$query}%")
        ->with('category')
        ->paginate(10);

    $posts = Post::query()
        ->where('active', '=', 1)
        ->whereDate('published_at', '<', Carbon::now())
        ->orderBy('published_at', 'desc')
        ->limit(2)
        ->paginate(10);


    return view('search', compact('courses', 'posts', 'query'));
  }



  public function show(Course $course)
  {
    return view('courseDetails', compact(''));
  }

  public function index(Request $request)
  {
    $courses = Course::paginate(10);
    return view('courses', compact('courses'));
  }
}
