<?php

namespace App\Http\Controllers;

use App\Models\Barangaymap;
use Illuminate\Http\Request;
use Auth;

class BarangaymapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addmap()
    {
        Auth::user()->id;
        return view('admin.addmap');
    }

 
 
    public function savemap(Request $request)
    {
        $data = new Barangaymap();

        $data->mapName = $request->mapName;
        $data->polygons = $request->polygons;
        $data->userId = auth()->id();
        $data->save();

        return redirect()->route('admin.addmap');
    }

  
    public function viewmap()
    {

        Auth::user()->id;
        $query=Barangaymap::all(); 

        $data['barangaymap']=$query;

        return view('admin.viewmap',$data); 
        
    }

  
    public function show(Barangaymap $barangaymap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangaymap  $barangaymap
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangaymap $barangaymap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangaymap  $barangaymap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangaymap $barangaymap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangaymap  $barangaymap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangaymap $barangaymap)
    {
        //
    }
}
