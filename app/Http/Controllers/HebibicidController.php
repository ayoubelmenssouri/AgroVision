<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Herbecide;
class HebibicidController extends Controller
{
    //public function index (){
      //  return view("/hebibicid") ;
    //}
    public function get_herbecide(){
        $herbecides=Herbecide::all();
        $herbecides->sortBy('id');
        return view("/hebibicid",['herbecides'=>$herbecides]);
      }
}



