<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Municipality;
use App\Models\Barangaymap;
use App\Models\Candidatedata;
use App\Models\Candidates;
use Auth;

class MapController extends Controller
{
    public function perbarmap($perbarmap){
        // $query=Barangaymap::all();  

   
        // $data['mapsdata']=$query;  

        // return view('maps',$data);

        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }
        
        $query=Barangaymap::join('candidates', 'candidates.mapCode', '=', 'barangaymaps.id')
                        ->where('candidates.mapCode','=',$perbarmap)->get();
                      
         $data['mapsdata']=$query;  

         //dd($query);
         return view('maps',$data);             



    }

    public function viewposition(){
      
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }
   
        $query=Candidatedata::all();
                      
         $data['candatas']=$query;  

   
         return view('admin.positionmap',$data);             



    }


    public function position($position){
      
        $userId = auth()->check() ? auth()->id() : null;

        if($userId == null){
            return redirect()->route('login');
        }
   
        $query=Barangaymap::join('candidates', 'candidates.mapCode', '=', 'barangaymaps.id')
                        ->where('candidates.canPosition','=',$position)->get();
                      
         $data['mapsdata']=$query;  

         //dd($query);
         return view('maps',$data);             



    }

    public function welcomepage(){
      

       

        $query=Barangaymap::join('candidates', 'candidates.mapCode', '=', 'barangaymaps.id')
                        ->where('candidates.canPosition','=','Governor')->get();
                      
         $data['mapsdata']=$query;  

         //dd($query);
         return view('maps',$data);             



    }


    public function google2(){

        $query=Map::all();  

        $dataMap  = Array();
        $dataMap['type']='FeatureCollection';
        $dataMap['features']=array();
        foreach($query as $value){
            $feaures = array();
            $feaures['type']='Feature';
            $geometry = array("type"=>"Point","coordinates"=>[$value->lat, $value->lng]);
            $feaures['geometry']=$geometry;
            array_push($dataMap['features'],$feaures);
        }

        $data['mapsdata']=$dataMap;  

        return $dataMap;
        //return view('polygon',$data);
        
    }

  

    
    public function polygon(){
        
        $query=Municipality::all('id','polygon'); 
        
       
         $data['mapsdata']=$query;  

        //return $query;
        return view('polygon',$data);

}

public function index()
    {
        $boxmap = Boxmap::all();
        $dataMap  = Array();
        $dataMap['type']='FeatureCollection';
        $dataMap['features']=array();
       foreach($boxmap as $value){
                $feaures = array();
                $feaures['type']='Feature';
                $geometry = array("type"=>"Point","coordinates"=>[$value->lng, $value->lat]);
                $feaures['geometry']=$geometry;
                $properties=array('title'=>$value->title,"description"=>$value->description);
                $feaures['properties']= $properties;
                array_push($dataMap['features'],$feaures);
       }
        return View('pages.google-map')->with('dataArray',json_encode($dataMap));
    }


}
