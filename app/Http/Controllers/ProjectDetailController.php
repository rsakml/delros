<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDetail;

class ProjectDetailController extends Controller
{
    public function projectDetail1(){

            $projectDetail = ProjectDetail::all();
            
            return view('project-detail')
                    ->with('title','Project Detail')
                    ->with('projectDetail',$projectDetail);
            }
}
