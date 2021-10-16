<?php

namespace App\Http\Controllers;

use App\Models\Coordinator;
use App\Models\Municipality;
use App\Models\munbar;
use Illuminate\Http\Request;
use DB;
use Auth;

class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewCoor()
    {
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }

        
        $query=Coordinator::all(); 

        $data['coordinators']=$query;

        return view('admin.coordinator',$data); 
        
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
    public function addCoor()
    {

        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }
       

         //$query=Municipality::all();  
        
         $query= DB::table('munbars')
                    ->groupBy('munName')
                    ->get();

        $data['municipality']=$query;
        return view('admin.addcoor',$data);
    }

    public function fetch(Request $request)
    {
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }


            $select = $request->select;
            $value = $request->value;
            $dependent = $request->dependent;
            $data = DB::table('munbars')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();

            $output = '<option value="">Select '.ucfirst($dependent).'</option>';
            foreach($data as $row)
            {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
            }
            echo $output;

    }


    public function saveCoor(Request $request)
    {
        
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }
        
        $data = new Coordinator();
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->contact_no = $request->contact_no;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->mun = $request->munName;
        $data->brgy = $request->barName;
        $data->userId = auth()->id();
        $data->save();

        return redirect()->route('admin.viewCoor');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinator $coordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinator $coordinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordinator $coordinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinator $coordinator)
    {
        //
    }
}
