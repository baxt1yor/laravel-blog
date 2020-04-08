<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Blogs;
use App\Serveces\ImageResize;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = env('PAGINATE_SIZE', 15);
        $blogs = Blogs::latest()->paginate($page);
        
        return view('admin.posts.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([

            'title'   => 'required',
            'short'   => 'required',
            'content' => 'required',
            'img'     => 'required|mimes:jpeg,bmp,jpg,png',

        ]);
        
        $img_name = $request->file('img')->store('pic', ['disk' => 'public']);
        ImageResize::crop($img_name, 350, 350, 'resize');
        
        // dd($thumb);
        $data = [
            'title' => $request->title,
            'short' =>$request->short,
            'content' => $request->content,
            'img'  => $img_name,
            'thumb' => 'thumbs/'.$img_name
            
        ];
        Blogs::create($data);
        return redirect()->route('admin.posts.index')
                         ->with('success','Product created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blogs::findOrFail($id);

        return view('admin.posts.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $blog = Blogs::findOrFail($id);
        return view('admin.posts.edit', compact('blog')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $blog = Blogs::findOrFail($id);

         $request->validate([
            'title' => 'required',
            'short' => 'required',
            'content' => 'required|min:100'
         ]);
         if($request->file('img'))
         {
            //Delet old file
            Storage::disk('public')->delete([
                $blog->img,
                $blog->thumb
                ]);
            $img_name = $request->file('img')->store('pic', ['disk' => 'public']);
            $thumb_name = 'thumbs/'.$img_name;
            ImageResize::crop($img_name, 350, 350);

        }
        else{
            $img_name = $blog->img;
            $thumb_name = $blog->thumb;
        }
            $blog->update([
                'title' => $request->post('title'),
                'short' => $request->post('short'),
                'content' => $request->post('content'),
                'img' => $img_name,
                'thumb' => $thumb_name 
            ]);
       return redirect()->route('admin.posts.index')->with('success', 'Malumotlar qoshildi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Blogs::findOrFail($id);
        Storage::disk('public')->delete([
            $model->img,
            $model->thumb
            ]);
        $model->delete();

        return redirect()->route('admin.posts.index')->with('delete', 'Item deleted!');
    }
}
