<?php

namespace App\Http\Controllers;

use App\TopicModel;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //

    public function index(){

        $videoCoursesDetails=TopicModel::all();
        return view('front.topic',compact('videoCoursesDetails'));
    }


}
