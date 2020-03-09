<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blogs;
use Illuminate\Routing\Route;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::all();
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

            'title' => 'required',
            'short' => 'required',
            'content' => 'required',
        ]);

        Blogs::create($request->all());
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
            'content' => 'required|min:100',
         ]);

         $blog->update([
            'title' => $request->post('title'),
            'short' => $request->post('short'),
            'content' => $request->post('content'),
         ]);
            return redirect()->route('admin.posts.index')->with('danger', 'Malumotlar qoshildi');

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

        $model->delete();
        return redirect()->route('admin.posts.index')->with('delete', 'Item deleted!');
    }
}
