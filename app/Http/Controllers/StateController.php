<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;


class StateController extends Controller
{
         public function test(){
        $sts=State::with('dis')->get();
         return $sts;
     }
    

}
