<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        // return view('home');
        $categoryCount = Category::count();
        $postCount = Post::where('status',true)->count();
        $pendingpostCount = Post::where('status',false)->count();
        return view('backend.dashboard',compact('categoryCount','postCount','pendingpostCount'));
    }
}
