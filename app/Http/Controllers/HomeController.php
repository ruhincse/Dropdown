<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Thana;

class HomeController extends Controller
{
   public function index(){
   	$data=District::all();
   	return view('welcome',compact('data'));
   }

   public function showdist($id){

   			 $datas=District::find($id)->thanas()->get();
   			  return json_decode($datas);
   			 
   			
   			
   		  }



}
