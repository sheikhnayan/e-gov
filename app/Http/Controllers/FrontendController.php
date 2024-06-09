<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
    return view('frontend.home.index-ru');
   }
   public function index_en(){
    return view('frontend.home.index-en');
   }
   public function form1_ru(){
    return view('frontend.form.form1-ru');
   }
   public function form1_en(){
    return view('frontend.form.form1-en');
   }
   public function form2_ru(){
    return view('frontend.form.form2-ru');
   }
   public function form2_en(){
    return view('frontend.form.form2-en');
   }
}
