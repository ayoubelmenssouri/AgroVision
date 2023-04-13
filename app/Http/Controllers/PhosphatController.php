<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Phosphates;

class PhosphatController extends Controller
{
    public function get_phosphate(){
        $phosphates=Phosphates::all();
        $phosphates->sortBy('id');
        return view("/phosphat",['phosphates'=>$phosphates]);
      }
      
}

