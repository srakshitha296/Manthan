<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        $categories = Category::all();
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($id){
        $blog = Post::find($id);
        $posts = Post::orderBy('created_at','desc')->limit(3)->get();
        $categories = Category::all();

        if(!$blog){
            return redirect()->back()->with('error','Blog not found');
        }

        // dd($blog->tags);
        
        return view('blog.show',compact('blog', 'posts', 'categories'));
    }
}
