@include('front/header')
<div class="header">
  <div class="main">
    <br><br>
    <br><br>
       <div class="text">
         <center>
@php
                    $totalTest=\App\examModel::all()->count('id');
                    $totalQuestion=\App\quizezAttemptsModel::all()->count('total_questions');
                    $testTaken=\App\quizezAttemptsModel::all()->count('id');
@endphp


            <h2>{{$c_name}} Exams</h2>
         <p>{{$courseName->course_des}}</p>
         <div class="myaccount_holder">
       <!--   <a  href="#" class="login_btn btn btn1">get start Now</a> -->
         </div>
        </center>
       </div>
       <br><br><br><br>
       <div class="row">
         <div class="col-md-4" style="text-align:center; border-right:1px solid #464B51;">
           <span>
             <h2>
            {{$totalTest}}
             </h2>
             TOTAL TESTS

           </span>
         </div>

         <div class="col-md-4" style="text-align:center; border-right:1px solid #464B51;">
           <span>
             <h2>
               {{$totalQuestion}}
             </h2>
             TOTAL QUESTIONS

           </span>
         </div>

         <div class="col-md-4" style="text-align:center; border-right:1px solid #464B51;">
           <span>
             <h2>
              {{$testTaken}}
             </h2>
            TESTS TAKEN

           </span>
         </div>

       </div>
  </div>

</div>

</div>

<div id="" class="">
  <!-- <h3>Group</h3> -->
    <div class="container" style="padding-top: 50px">

        <div class="row">
            @foreach($sections as $sub)
                <div class="col-md-4">
                    <div class="packages_box_wrap_m banking_test_series_pckg">
                        <div class="packpackages_box_head">
                            <div class="row" style="margin-top: -15px;">
    
                                  <center>  <h4> <br>{{$sub->chapter_name}} Summary</h4> </center>
                                
                            </div>

                        </div>
                        <div class="packages_info_wp_m ">
                            <ul>
                                <li class="text-capitalize">Excercise Name : {{$sub->chapter_name}}</li>
                                <li>Excercise Code :{{$sub->chapter_code}}</li>
                                <li>Excercise Detail: {{$sub->chapter_detail}}</li>
                                <li>Creation Time :{{$sub->created_at}}</li>
                            </ul>
                            <div class="row">




                            <div class="col-md-12">
                                @if(\Illuminate\Support\Facades\Auth::check())


                                <a class="btn btn-block purchasepkg_class_pay" id="startExam" name="startExam" href="{{url('Instructions',$sub->id)}}" >Start Exam</a>

                                      <!--   <a class="btn btn-block purchasepkg_class_pay" id="buyButton" href="{{url('make-payment')}}">Pay to Start Exam</a> -->



                                    @else

                                    <a class="btn btn-block purchasepkg_class_pay" data-id="f1ef658b45d590eb" href="{{url('login')}}">Start Exam</a>

                                @endif
                            </div>

                            </div>

                            {{--<div class="packages_price_wp">--}}
                                {{--<div class="price_offer_m">--}}
                                    {{--<p class="old_price"><i class="fa fa-rupee"></i>598/-</p><span>50% Off</span>--}}
                                {{--</div>--}}
                                {{--<p class="offer_price"><i class="fa fa-rupee"></i> {{$section->price}} <span class="valid_wp">for 9 months</span>--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<a class="btn btn-block purchasepkg_class_pay" data-id="e71fb1b6bb19f27d" href="javascript:void(0)">Buy Now</a>--}}

                            <div class="row">
                                {{--<div class="col-xs-6">--}}
                                {{--<a class="btn btn-block btn-primary" style=" background:transparent; color:#2473CD;" data-id="f1ef658b45d590eb" href="{{url('/assignments',$section->id)}}">--}}
                                {{----}}
                                {{--</a>--}}
                                {{--</div>--}}

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach


        </div>





    </div>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



@include('front/footer')
