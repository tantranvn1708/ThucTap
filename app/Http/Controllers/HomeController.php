<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  //trang chu
  public function index(){
   	return view('pages.home');

   }
  
}
