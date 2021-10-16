<?php

namespace App\Http\Controllers;
use App\Models\Map;
use App\Models\Geometry;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function apimaps(){
        
   

        $query=Map::all();  

        $data['mapsdata']=$query;  

       // dd($query);
        return['result' => $query];
    
    }


    public function polygon2(){

        $query=Map::all();  

        $dataMap  = Array();
        $dataMap['type']='FeatureCollection';
        $dataMap['features']=array();
        foreach($query as $value){
            $feaures = array();
            $feaures['type']='Feature';
            //$geometry = array("type"=>"Point","coordinates"=>[$value->lat, $value->lng]);
            $geometry = array("type"=>"Polygon","coordinates"=>[$value->polygons]);

            $feaures['geometry']=$geometry;
            array_push($dataMap['features'],$feaures);
        }

        // $data['mapsdata']=$dataMap;  

        return $dataMap;

        

    
     }

 


public function polygon4(){
        
   
    $qp = Map::join('geometries','maps.id','=','geometries.brgyId')
            ->get(['maps.brgyname','geometries.lat','geometries.long']);

            $m=Map::all();
            $g=Geometry::all();    


  $ff = array();

  
  foreach($qp as $div){


    $ff[] = ($div);
    
  }


   $json = array('map'=>$qp,'poly'=>$ff);


    return['results' => $json];

}





}
