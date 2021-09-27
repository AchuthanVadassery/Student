<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Statedistrictcontroller extends Controller
{
    

public function getStates()
    {
        $states = DB::table('states')->pluck("name","id");
        return view('dropdown',compact('states'));
    }
    public function getDistricts($id) 
{        
        $districts = DB::table("districts")->where("states_id",$id)->pluck("name","id");
        return json_encode($districts);
}   
    // public function test(){
    //     $sts=State::with('dis')->get();
    //     return $sts;
    // }
    
}
