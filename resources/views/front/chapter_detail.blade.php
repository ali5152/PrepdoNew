@extends('layouts.app')

@section('content')



    <div class="container" style="padding-top: 50px">
        <div class="row">

            @foreach($detailsChapter as $chapters)

                <div class="col-md-4">

                    <div class="packages_box_wrap_m rrb_test_series_pckg">
                        <div class="packpackages_box_head">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="packages_logo_box" >
                                        <img src="{{asset('assets/frontend/images/rrb_package_logo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-9" style="padding:5px;">
                                    <h4> <br>Chapter Summary</h4>
                                </div>
                            </div>

                        </div>
                        <div class="packages_info_wp_m">
                            <ul>
                                <li>Chapter Name : {{$chapters->chapter_name}}</li>
                                <li>Chapter Code :{{$chapters->chapter_code}}</li>
                                <li>Status : Active</li>
                                <li>Creation Time :{{$chapters->created_at}}</li>
                                </ul>

                            <!-- <a class="btn btn-block purchasepkg_class_pay" data-id="e71fb1b6bb19f27d" href="javascript:void(0)">Buy Now</a> -->
                            <div class="row">
                                <div class="col-xs-6">
                                    <a class="btn btn-block btn-primary" style=" background:transparent; color:#2473CD;" data-id="f1ef658b45d590eb" href="{{url('topics',$chapters->id)}}">
                                        View Topics

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach


        </div>





    </div>



    {{--<div class="container-fluid" style="margin-left: 15px; margin-right: 15px;">--}}
        {{--<div class="row">--}}

            {{--<div class="col-md-12" style="margin-top: 30px">--}}

                {{--<div class="row">--}}

                    {{--@foreach($detailsChapter as $chapters)--}}
                        {{--<div class="card col-md-3 rounded border_radius_3 fa-border" style="padding-left: 2px; padding-right: 2px; ">--}}
                            {{--<div class="card-header">--}}
                               {{--Chapters--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}
                                {{--<h5 class="card-title">{{$chapters->chapter_name}}</h5>--}}
                                {{--<p class="card-text">{{$chapters->chapter_code}}</p>--}}
                                {{--<p class="card-text">{{$chapters->chapter_detail}}</p>--}}
                                {{--<p class="card-text">{{$chapters->status}}</p>--}}
                                {{--<p class="card-text">{{$chapters->Created_at}}</p>--}}
                                {{--<a href="#" class="btn btn-primary">View Topics</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--@endforeach--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

@endsection
