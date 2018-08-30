@extends('layouts.app')

@section('content')

<br>
<br>
<center><h1>Your Exam Attempts</h1></center>
<br>
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                

                <div class="panel-body">
                   <table class="table">
    <thead>
      <tr>
        <th>Attempt ID</th>
        <th>Exam Name</th>
        <th>Total Questions</th>
        <th>Correct Answer</th>
        <th>Precentage</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
     @foreach($data as $value)
      <?php
         $exam = DB::table('chapters')->where('id',$value->quiz_id)->first();
         $percentage = $value->correct_answers/$value->total_questions * 100;
       ?>
      <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $exam->chapter_name }}</td>
        <td>{{ $value->total_questions }}</td>
        <td>{{ $value->correct_answers }}</td>
        <td>{{ $percentage }}%</td>
        <td>{{ $value->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
