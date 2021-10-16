<?php

namespace App\Http\Controllers;

use App\Models\candidatedata;
use Illuminate\Http\Request;

class CandidatedataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcandidate()
    {
      return view('admin.addcandidate');
    }

   
    public function savecandidate(Request $request)
    {
        $data = new candidatedata();
        $data->candidateName = $request->candidateName;
        $data->position = $request->position;
        $data->address = $request->address;
        $data->contactno = $request->contactno;
  
     
        $data->save();

        return redirect()->route('admin.addcandidate');
    }


    public function viewcandidate(candidatedata $candidatedata)
    {
        $query = candidatedata::all();

        $data['candidatedatas']=$query;

        return view ('admin.viewcandidatedata',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function edit(candidatedata $candidatedata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, candidatedata $candidatedata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function destroy(candidatedata $candidatedata)
    {
        //
    }
}
