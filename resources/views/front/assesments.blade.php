@extends('layouts.app')

@section('content')


    <div class="container" style="padding-top: 50px">
        <div class="row">

            @foreach($videoCoursesDetails as $chapters)

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
                                    <h4> <br>Assignments Summary</h4>
                                </div>
                            </div>

                        </div>
                        <div class="packages_info_wp_m">
                            <ul>
                                <li> Assignment Name : {{$chapters->name}}</li>
                                <li>Assignment Code :{{$chapters->code}}</li>
                                <li>Assignment Detail :{{$chapters->detail}}</li>
                                <li>Status : Active</li>
                                <li>Creation Time :{{$chapters->created_at}}</li>
                            </ul>

                            <!-- <a class="btn btn-block purchasepkg_class_pay" data-id="e71fb1b6bb19f27d" href="javascript:void(0)">Buy Now</a> -->
                            <div class="row">
                                <div class="col-xs-6">
                                    <a class="btn btn-block btn-primary" style=" background:transparent; color:#2473CD;" data-id="f1ef658b45d590eb" href="{{url('/')}}">
                                        Go back
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach


        </div>





    </div>



@endsection
