<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    public function index()
    {
//        return view('frontend.index',compact('categories'));
        $posts=Post::leftJoin('categories', 'posts.category_id', 'categories.id')
            ->get();
//        dd($posts);
        return view('frontend.index',compact('posts'));
    }
}
