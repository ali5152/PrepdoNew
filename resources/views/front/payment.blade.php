@extends('layouts.app')

@section('content')

<br>
<br>
<center><h1>Your Transactions</h1></center>
<br>
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                

                <div class="panel-body">
                   <table class="table">
    <thead>
      <tr>
        <th>Txn ID</th>
        <th>Amount</th>
        <th>Exam Name</th>
        <th>Date</th>
        <th>Method</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
       @foreach($data as $value)
       <?php
         $exam = DB::table('courses')->where('id',$value->course_id)->first();
       ?>
      <tr>
        <td>{{ $value->txnid }}</td>
        <td>{{ $value->amount }}</td>
        <td>{{ $exam->course_name }}</td>
        <td>{{ $value->date }}</td>
        <td>PayuMoney</td>
        <td><font color="green" style="font-weight: bolder;">Confirmed</font></td>
      </tr>
      @endforeach
     <!--  <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr> -->
    </tbody>
  </table>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
