<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Serveces\ImageResize;
use App\Cooks;
class CooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooks = Cooks::latest()->paginate(env('PAGINATE_SIZE', 15));
        
        return view('admin.cooks.index', compact('cooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view('admin.cooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|min:3|max:100',
            'special' => 'required|min:5|max:100',
            'start_date' => 'required|date',
            'google' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',  
            'picture' => 'required|file|mimes:jpg,jpeg,png'
        ]);
        
        
        $img_name = $request->file('picture')->store('cooks', ['disk' => 'public']);
        ImageResize::crop($img_name, 350, 350);
        $thumb = 'thumbs/'.$img_name;

        Cooks::create([
            'full_name' => $data['full_name'],
            'special' => $data['special'],
            'start_date' => $data['start_date'],
            'google' => $data['google'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'twitter' => $data['twitter'],     
            'picture' => $thumb
        ]);

        //dd($data);
        return redirect()->route('admin.cooks.index')->with('Success', 'Oshpaz yaratildi');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cook = Cooks::findOrFail($id);

        return view('admin.cooks.show',compact('cook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cooks = Cooks::findOrFail($id);
        return view('admin.cooks.edit', compact('cooks'));
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
        $cook = Cooks::findOrFail($id);
        $data = $request->validate([
            'full_name' => 'required|min:3|max:100',
            'special' => 'required|min:3',
            'start_date' => 'required|date',
            'google' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ]);
        
       if ($request->file('picture'))
       {
            Storage::disk('public')->delete([
                $cook->picute
            ]);

            $img_name = $request->file('picture')->store('cooks', ['disk' => 'public']);
            //$thumb_name = 'thumbs/'.$img_name;
            ImageResize::crop($img_name, 350, 350);
       }
       else
       {
           $img_name = $cook->picture;
       }

       $cook->update([
            'full_name' => $data['full_name'],
            'special' => $data['special'],
            'start_date' => $data['start_date'],
            'google' => $data['google'],
            'instagram' => $data['instagram'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'picture' => $img_name,
       ]);

       return redirect()->route('admin.cooks.index')->with('Success', 'Malumotlar almashtirildi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cook = Cooks::findOrFail($id);
        Storage::disk('public')->delete([
            $cook->picture
        ]);
        $cook->delete();
        return redirect()->route('admin.cooks.index')->with('delete', 'Malumot o`chirildi!');
    }
}
