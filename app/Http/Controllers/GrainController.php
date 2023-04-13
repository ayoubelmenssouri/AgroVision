<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Grains;
class GrainController extends Controller
{
    //public function index (){
      //  return view("/grain") ;
    //}
    public function index(){
         //$grains=Grains::all();
        //$grains=grain::orderBy('id','desc');

       //return view("/grain",['grains'=>$grains]);
    }

    public function get_grain(){
      $grains=Grains::all();
      $grains->sortBy('id');
      return view("/grain",['grains'=>$grains]);
    }
}
