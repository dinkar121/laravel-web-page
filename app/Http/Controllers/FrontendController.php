<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view("frontend.index");
    }

     public function menu()
    {
    	return view("frontend.menu");
    }
     public function about()
    {
    	return view("frontend.about");
    }
     public function contacts()
    {
    	return view("frontend.contacts");
    }
     public function reservation()
    {
    	return view("frontend.reservation");
    }
    
     public function stuff()
    {
    	return view("frontend.stuff");
    }
     public function gallery()
    {
    	return view("frontend.gallery");
    }
}
