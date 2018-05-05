<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $second = 'This is a second header file';
      return view('pages.index')->with('second',$second);
    }

    public function about(){
      return view('pages.about');
    }

    public function services(){
      $data = array(
        'title' =>'Services',
        'service' => ['service1','service2','service3','service4']
      );
      return view('pages.services')->with($data);
    }

}
