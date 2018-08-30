<?php

namespace App\Http\Controllers;

use App\chapterModel;
use App\VideoCoursesModel;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class VideoCoursesController extends Controller
{
    //

    public function index(){

        $videoCoursesDetails=VideoCoursesModel::all();
        return view('front.video_courses',compact('videoCoursesDetails'));
    }




}
