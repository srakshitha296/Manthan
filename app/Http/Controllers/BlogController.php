<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::orderBy("created_at","desc")->paginate(1);
        $categories = Category::all();
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($id){
        $blog = Post::find($id);

        if(!$blog){
            return redirect()->back()->with('error','Blog not found');
        }
        
        return view('blog.show',compact('blog'));
    }
}
