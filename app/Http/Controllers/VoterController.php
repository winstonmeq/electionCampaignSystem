<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use App\Models\survey;
use Illuminate\Http\Request;
use Auth;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewVoter()
    {
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }

        $query=Voter::all(); 

        $data['voters']=$query;

        return view('admin.voters',$data); 
        
    }

    public function addVoter($coorId)
    {

        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }

        $query=survey::where('coordinatorId','=',$coorId)->get();
        
        $data['surveys']=$query;

        return view('admin.addvoter',$data);
    }

    public function saveVoter(Request $request)
    {
        
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }


        
        $data = new Voter();
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->purok = $request->purok;
        $data->contact_no = $request->contact_no;

        $data->governor = $request->governor;
        $data->viceGovernor = $request->viceGovernor;
        $data->boardMember1 = $request->boardMember1;
        $data->boardMember2 = $request->boardMember2;
        $data->boardMember3 = $request->boardMember3;
        $data->boardMember4 = $request->boardMember4;
        $data->boardMember5 = $request->boardMember5;
        $data->boardMember6 = $request->boardMember6;
        $data->boardMember7 = $request->boardMember7;
        $data->boardMember8 = $request->boardMember8;

        $data->mayor = $request->mayor;
        $data->viceMayor = $request->viceMayor;
        $data->munCouncilor1 = $request->munCouncilor1;
        $data->munCouncilor2 = $request->munCouncilor2;
        $data->munCouncilor3 = $request->munCouncilor3;
        $data->munCouncilor4 = $request->munCouncilor4;
        $data->munCouncilor5 = $request->munCouncilor5;
        $data->munCouncilor6 = $request->munCouncilor6;
        $data->munCouncilor7 = $request->munCouncilor7;
        $data->munCouncilor8 = $request->munCouncilor8;


        $data->userId = auth()->id();
        $data->save();

        return redirect()->route('admin.addVoter');

        
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
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        //
    }
}
