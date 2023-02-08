<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class GenericController extends Controller
{
   public function landig (Request $request)
   {
    return view('landing');
   }
}
