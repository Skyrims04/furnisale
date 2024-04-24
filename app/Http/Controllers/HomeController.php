<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
     $data = [
          'nama' => 'Valerian',
          'pekerjaan' => 'BodyGuard',
     ];
        return view('home')->with($data);
   }

   public function contact()
   {
        return view('contact');
   }
}
