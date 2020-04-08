<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cooks;
use App\Blogs;
use App\Feedback;

class SiteController extends Controller
{
    public function home() 
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'subject' => 'required|min:10',
            'message' => 'required|max:2000',
            
        ]);
        Feedback::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'subject' => $request->post('subject'),
            'message' => $request->post('message')
        ]);
            //  dd($salom);					

        return redirect()
               ->route('contact')
               ->with('success', 'Xabar uchun rahmat ! Tez orada javob beramiz.');
    }
    public function about()
    {  
        $pagi_size = 4;
        $cooks = Cooks::latest()->paginate($pagi_size);
        $links = $cooks->links();
        return view('about', compact('cooks', 'links'));
    }

    public function blog()
    {
        // $blogs = Blogs::orderBy('id', 'DESC')->paginate(4);
        $page = env('PAGINATE_SIZE', 15);
        $blogs = Blogs::latest()->paginate($page);
        $link = $blogs->links();
        return view('blog', compact('blogs', 'link'));
    }

    public function blogmore($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog -> increment('view');
        //dd($blog);
        $mosts_viewed = Blogs::mostViews()->get();
        return view('blog-more', [
            'blog' => $blog,
            'most_posts' => $mosts_viewed
        ]);
    }

    //search begin
    public function search (Request $request)
    {
       $pages = env('PAGINATE_SIZE', 15);
       $key = $request->get('key');
       $key = '%'.trim($key).'%';
       $results = Blogs::where('title', 'LIKE', $key)
                       ->orWhere('short', 'LIKE', $key)
                       ->orWhere('content', 'LIKE', $key)
                       ->paginate($pages);
       $link = $results->links();               
      return view('search', compact('results', 'link')); 
    }
}
