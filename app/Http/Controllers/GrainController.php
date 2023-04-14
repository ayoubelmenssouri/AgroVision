<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Products;
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

    /*public function get_grain(){
      $grains=products::all();
      $grains->sortBy('id');
      //return view("/grain",['grains'=>$grains]);
      return view(dd($grains));
    }*/
    public function get_grain(){
      $grains=products::all()->Categories;
      return view(dd($grains));
    }
}
