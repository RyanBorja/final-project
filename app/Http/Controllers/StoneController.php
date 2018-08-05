<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stones = \App\Stone::orderBy('name')->get();
        return view('admin/manage', compact('stones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $destinationPath = '/public/pictures/materials';
        $image->storeAs($destinationPath,$imageName);

        $input = $request->input();
        $stone = new \App\Stone;
        $stone->name = $input['stoneName'];
        $stone->description = $input['stoneDescription'];
        $stone->path = 'storage/pictures/materials/'.$imageName;
        $stone->deletePath = $destinationPath.'/'.$imageName;
        $stone->in_stock = (array_key_exists('isStock', $input)) ? '1' : '0';

        $stone->save();
        $request->session()->flash('status', 'stone created!');
        return redirect()->route('home');
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
        $stone = \App\Stone::find($id);

        if ( old('_token') ) {
            $stone->name = old('stoneName');
            $stone->description = old('stoneDescription');
            $stone->in_stock = old('isStock') ? '1' : '0';
        }

        return view('admin.edit', compact('stone'));
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
        $input = $request->input();
        $stone = \App\Stone::find($id);
        $stone->name = $input['stoneName'];
        $stone->description = $input['stoneDescription'];
        $stone->in_stock = (array_key_exists('isStock', $input)) ? '1' : '0';
        
        $imageDelete= $stone->deletePath;
        if($request->file('newImage')){ 
            Storage::delete($imageDelete);
            $image = $request->file('newImage');
            $imageName = $image->getClientOriginalName();
            $destinationPath = '/public/pictures/materials';
            $image->storeAs($destinationPath,$imageName);
            $stone->path = 'storage/pictures/materials/'.$imageName;
            $stone->deletePath= '/public/pictures/materials/'.$imageName;
        }
        
        $stone->save();
        $request->session()->flash('status', 'stone updated!');
        return redirect()->route('stones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $stone = \App\Stone::find($id);
        
        // Delete the image in storage tied to the stone card
        $imageDelete= $stone->deletePath;
        Storage::delete($imageDelete);

        // Delete the stone card
        $stone->delete();

        // Let the user know the stone card was deleted
        $request->session()->flash('status', 'Stone card deleted!');
        return redirect()->route('stones.index');
    }
}
