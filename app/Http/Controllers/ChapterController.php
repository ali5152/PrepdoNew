<?php

namespace App\Http\Controllers;

use App\chapterModel;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    //

    public function courseExcercie($id){

        $detailsChapter=chapterModel::all()->where('course_id',$id);

        return view('front.chapter_detail',compact('detailsChapter'));



    }
}
