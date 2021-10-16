<?php

namespace App\Http\Controllers;

use App\Models\munbar;
use Illuminate\Http\Request;
use DB;

class MunbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addmunbar()
    {
        
     return view('admin.addmunbar');
    }


    public function savemunbar(Request $request)
    {
        $data = new munbar();
        $data->munName = $request->munName;
        $data->barName = $request->barName;
      
        $data->save();

        return redirect()->route('admin.addmunbar');
        
    }



    public function index()
    {
        $munbarlist= DB::table('munbars')
         ->groupBy('munName')
         ->get();

           //dd($munbarlist);
         $data['munbarlists'] = $munbarlist;

     return view('admin.addmunbar',$data);
    }

    public function fetch(Request $request)
    {
            $select = $request->select;
            $value = $request->value;
            $dependent = $request->dependent;

            $data = DB::table('munbars')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();

            $output = '<option value="">Select '.$dependent.'</option>';

            foreach($data as $row)
                {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
            }

            echo $output;


    }














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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\munbar  $munbar
     * @return \Illuminate\Http\Response
     */
    public function show(munbar $munbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\munbar  $munbar
     * @return \Illuminate\Http\Response
     */
    public function edit(munbar $munbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\munbar  $munbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, munbar $munbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\munbar  $munbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(munbar $munbar)
    {
        //
    }
}
