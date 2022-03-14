<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog1(){
       
        $blog = Blog::all();
        
        return view('blog')
                ->with('title','Blog Kami')
                ->with('blog',$blog);
}
        }
