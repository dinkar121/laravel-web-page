<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RjitController extends Controller
{
    public function a()
    {
    	//echo "Dinkar";
    	$data=['Dinkar','rohit'];
    	$g=['deepika'];
    	return view('a',compact('g'));
    }
     public function rjit()
    {
    	echo "rjit";
    }
    
    

}
