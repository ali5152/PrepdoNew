<?php

namespace App\Http\Controllers;

use App\AssesmentModel;
use Illuminate\Http\Request;

class AssesmentsController extends Controller
{
    //
    public function index(){

        $videoCoursesDetails=AssesmentModel::all();
        return view('front.assesments',compact('videoCoursesDetails'));
    }

}
