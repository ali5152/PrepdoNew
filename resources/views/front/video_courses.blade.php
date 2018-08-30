@extends('layouts.app')

@section('content')

    <div class="container" style="padding-top: 50px">
        <div class="row">

            @foreach($videoCoursesDetails as $chapters)

                <div class="col-md-4">

                    <div class="packages_box_wrap_m banking_test_series_pckg">
                        <div class="packpackages_box_head">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="packages_logo_box" >
                                        <img src="{{asset('assets/frontend/images/rrb_package_logo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-9" style="padding:5px;">
                                    <h4> <br>Video Courses Summary</h4>
                                </div>
                            </div>

                        </div>
                        <div class="packages_info_wp_m">
                            <ul>
                                <li>Course Name : {{$chapters->course_name}}</li>
                                <li>Course Code :{{$chapters->course_code}}</li>
                                <li>Status : Active</li>
                                <li>Creation Time :{{$chapters->created_at}}</li>
                            </ul>
                            <div class="packages_price_wp">
                                <div class="price_offer_m">
                                    <p class="old_price"><i class="fa fa-rupee"></i>598/-</p><span>50% Off</span>
                                </div>
                                <p class="offer_price"><i class="fa fa-rupee"></i> {{$chapters->price}} <span class="valid_wp">for 9 months</span>
                                </p>
                            </div>
                            <a class="btn btn-block purchasepkg_class_pay" data-id="e71fb1b6bb19f27d" href="javascript:void(0)">Buy Now</a>

                            <div class="row">
                                {{--<div class="col-xs-6">--}}
                                    {{--<a class="btn btn-block btn-primary" style=" background:transparent; color:#2473CD;" data-id="f1ef658b45d590eb" href="{{url('/assignments',$chapters->id)}}">--}}
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



    {{----}}
    {{--<div class="container-fluid" style="margin-left: 15px; margin-right: 15px;">--}}

        {{--<div class="row">--}}
        {{--<div class="col-md-12" style="margin-top: 30px">--}}
            {{--<div class="row">--}}

            {{--@foreach($videoCoursesDetails as $courseDetail)--}}

            {{--<div class="card col-md-3 rounded fa-border" style="padding-left: 2px; padding-right: 2px; ">--}}

                {{--<img class="card-img-top img-responsive" src="/images/c1.jpg" alt="Card image cap"  style=" width:100%;height: 200px;">--}}
                {{--<div class="card-body">--}}
                    {{--<p class="card-text">{{$courseDetail->course_des}}</p>--}}
                {{--</div>--}}

            {{--</div>--}}

                {{--@endforeach--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}

@endsection
