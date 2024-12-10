<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\CommonMarkConverter;

class HomeController extends Controller
{
    public function home()
    {
        // $converter = new CommonMarkConverter();
        $eventTypes = ['SDP', 'FDP', 'STTP', 'Workshop', 'Seminar', 'Conference', 'Webinar', 'Hackathon', 'Bootcamp', 'Other'];
        $events = Program::orderBy('created_at','desc')->with('speakers')->limit(4)->get();
        $posts = Post::orderBy('created_at','desc')->with('category')->limit(3)->get();

        // foreach ($posts as $post) {
        //     $post->content = $converter->convertToHtml($post->content);
        // }
        // dd($posts);
        return view('home.index', compact('eventTypes', 'events', 'posts'));
    }

    public function about(){
        return view('about.index');
    }

    public function contact(){
        return view('contact.index');
    }
}
