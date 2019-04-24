<?php

namespace App\Http\Controllers\backend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts=Post::leftJoin('categories', 'posts.category_id', 'categories.id')
                    ->select('posts.*')
                     ->get();
//        dd($posts);
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request,[
                'category' => 'required',
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
                'image' => 'required|mimes:jpeg,jpg,bmp,png',
            ]);

            $image = $request->file('image');
            $slug = str_slug($request->title);
            if (isset($image))
            {
                $currentDate = Carbon::now()->toDateString();
                $imagename = $slug.'-'.$currentDate.'.'. $image->getClientOriginalExtension();
                if (!file_exists('backend/img/post'))
                {
                    mkdir('backend/img/post',0777,true);
                }
                $image->move('backend/img/post',$imagename);
            }else{
                $imagename = "default.png";
            }
            $post = new Post();
            $post->category_id = $request->category;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->status = $request->status;
            $post->image = $imagename;
            $post->save();
            Toastr::success('Your Post successfully Added','Success',["positionClass" => "toast-top-right"]);
            return redirect('post-list');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        $categories = Category::all();

        return view('backend.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required',
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $post = Post::find($request->post_id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'.'. $image->getClientOriginalExtension();
            if (!file_exists('backend/img/post/'))
            {
                mkdir('backend/img/post/',0777,true);
            }
            unlink('backend/img/post/'.$post->image);
            $image->move('backend/img/post/',$imagename);
        }else{
            $imagename = $post->image;
        }
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->image = $imagename;
        $post->save();
        Toastr::success('Your Post successfully Update','Success',["positionClass" => "toast-top-right"]);
        return redirect('post-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (file_exists('backend/img/post/'.$post->image))
        {
            unlink('backend/img/post/'.$post->image);
        }
        $post->delete();
        Toastr::success('Post Deleted successfully','Success',["positionClass" => "toast-top-right"]);
        return redirect('post-list');
    }
}
