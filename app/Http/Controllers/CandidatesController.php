<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use App\Models\Candidatedata;
use App\Models\munbar;
use Illuminate\Http\Request;
use Auth;
use DB;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcanmap()
    {
        Auth::user()->id;
        
        $query = candidatedata::all();
        $data['positions'] = $query;

        $query2= DB::table('munbars')
            ->groupBy('munName')
            ->get();

        $data2['municipality']=$query2;


        return view('admin.addcanmap',$data,$data2);
    }

    public function fetchcanmap(Request $request)
    {
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
    public function viewCandidateMap()
    {
        Auth::user()->id;
        $query=Candidates::all(); 

        $data['candidatemap']=$query;

        return view('admin.viewCandidateMap',$data); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function savecan(Request $request)
    {
        $data = new Candidates();

        $data->canPosition = $request->canPosition;
        $data->mapCode = $request->mapCode;
        $data->opponent = $request->opponent;
        $data->mine = $request->mine;
        $data->hold = $request->hold;
        $data->total = $request->total;
        $data->munName = $request->munName;
        $data->barName = $request->barName;
        
        $data->userId = auth()->id();
        $data->save();

        return redirect()->route('admin.addcanmap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidates  $candidates
     * @return \Illuminate\Http\Response
     */
    public function show(Candidates $candidates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidates  $candidates
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidates $candidates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidates  $candidates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidates $candidates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidates  $candidates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidates $candidates)
    {
        //
    }
}
