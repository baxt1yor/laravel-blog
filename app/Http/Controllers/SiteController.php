<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Blogs;

class SiteController extends Controller
{
    public function home() 
    {
        // $shops = [
        //     ['name' => 'John Doe', 'type' => 'Stom'],
        //     ['name' => 'Buster Keaton', 'type' => 'Lor'],
        //     ['name' => 'Zafar', 'type' => 'Test'],
        //     ['name' => 'Nodir', 'type' => 'Test 2'],
        // ];
        // return view('home', compact('shops')); //['doctors' => $doctors] <=> compact('doctors') 
            return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(4);
        $links = $posts->links();
        return view('about', compact('posts', 'links'));
    }

    public function blog()
    {
        $blogs = Blogs::orderBy('id', 'DESC')->paginate(4);
        $link = $blogs->links();
        return view('blog', compact('blogs', 'link'));
    }
}
