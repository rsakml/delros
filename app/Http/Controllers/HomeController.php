<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function home(){

        $home = Home::all();
        
        return view('index')
                ->with('title','Beranda')
                ->with('home',$home);
        }
}
