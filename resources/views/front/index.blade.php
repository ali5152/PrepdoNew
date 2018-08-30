@include('front/header')

<div id="carousel-example" class="carousel slide" data-ride="carousel" style=" ">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="images/pic5.jpg" style="height: 80vh; width: 100%;" /></a>
      <div class="carousel-caption">
     <!--    <span style="margin-top:-200px; position:absolute;"><h3>Check your Results</h3>
        <p>graphically </p></span> -->
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="images/pic2.jpg" style="height: 80vh; width: 100%;" /></a>
      <div class="carousel-caption">
       <!--  <span style="margin-top:-200px; position:absolute;"><h3>Check your Results</h3>
        <p>graphically </p></span> -->
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="images/pic9.jpg"  style="height: 80vh; width: 100%;"/></a>
      <div class="carousel-caption">
      </div>
    </div>
  </div>


  <a class="left carousel-control" href="#carousel-example" data-slide="prev" style="visibility:hidden">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next" style="visibility:hidden">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<style>
.ots_offer_bg {
  background-attachment: scroll;
  background-clip: border-box;
  background-image: url("assets/frontend/images/ots_offer_bg.jpg");
  background-origin: padding-box;
  background-position: 0 0;
  background-repeat: repeat;
  background-size: cover;
}
.ots_offer_bg .slider_text > h2, .ots_offer_bg .slider_text > p {
  color: #000;
}
.ots_offer_bg .pricing_tag {
  bottom: 50px;
}
.ots_offer_bg .btn, .ots_offer_bg .btn:hover {
  background: #7b6ff5 none repeat scroll 0 0;
  text-transform: uppercase;
  color:#fff;
}

.exam_timeoffer {
  background: red none repeat scroll 0 0;
  color: #fff;
  font-size: 14px;
  letter-spacing: 0.2px;
  padding: 2px 15px;
  position: absolute;
  right: 0;
  top: 0;
}


.test_series_dhamaka {
	background-image: {{asset('assets/frontend/images/test_series_dhamaka.jpg')}};
	background-position:center;
	background-repeat:no-repeat;
	background-size-:cover;
}
.test_series_dhamaka .pricing_tag {
  bottom: 40px;
  font-size: 42px;
  font-weight: bold;
  line-height: 26px;
  padding: 50px 15px;
  right: 40px;
  text-align: center;
}
.heading_wrap {
  margin: 0 auto 25px;
  text-align:center;
}
.heading_wrap.text-center img {
  display: block;
  margin: 0 auto;
}
.test_series_dhamaka .pricing_tag > span {
  font-size: 24px;
  font-weight: normal;
  text-align: right;
}
.test_series_dhamaka .btn {
  background: #fff none repeat scroll 0 0;
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 2px;
  box-shadow: 0 5px 12px rgba(0, 0, 0, 0.12);
  color: #222;
  font-size: 14px;
  font-weight: 600;
  height: 44px;
  letter-spacing: 0.5px;
  line-height: 40px;
  margin-top: 18px;
  padding: 0 29px;
  transition-duration: 0.3s;
}
.offer_valid_wrap {
  float: left;
  width: 50%;
}
.offer_valid_wrap > p {
  color: #fff;
  font-size: 22px;
  letter-spacing: 2px;
  margin: 0 auto;
}
.offer_valid_wrap > h5 {
  color: #fff;
  font-size: 30px;
  font-weight: 700;
  margin: 2px auto;}
@media (min-width:991px) and (max-width:1200px) {
.heading_wrap {
  margin: 0 auto 25px;
  max-width: 320px;
  text-align: center;
}
.offer_valid_wrap > h5 {
  font-size: 26px;
}
}
@media (max-width:767px) {
.heading_wrap {
  margin: 0 auto 25px;
  max-width: 280px;
}
.test_series_dhamaka .pricing_tag > span {
  font-size: 14px;
}
.offer_valid_wrap {
  float: none;
  width: 100%;
}
.test_series_dhamaka .pricing_tag {
  bottom: 20px;
  font-size: 27px;
  line-height: 16px;
  padding: 35px 15px;
  right: 10px;
}
.offer_valid_wrap {
	float:none;
	width:100%;
}
.offer_valid_wrap > h5 {
  font-size: 27px;
}


}
.listing_exam_menu li{
  list-style: none;
}
.bb li
{padding:10px;border-bottom:1px solid gray;

}

.bb li:hover{background-color: #665DD0 !important;
  color:white;

}
.bb li:hover a{background-color: #665DD0 !important;
  color:white;

}
.bb li a:hover{color:white !important;

}
.bb li a{
  color: #292626;

}



</style>




<div class="container-fluid" >
<section id="intro"  >
  <div class="row col-md-12">
    <div class="col-md-2">

       <div class="exam_grp_ws" style="border:1px solid rgba(191,191,191,.3); width:100% ; ">

               <h3 style="text-align:center; font-weight:normal;"><span class="university ic_sprit"><img src="{{asset('assets/frontend/images/banking_package_logo.png')}}" alt="" style="width: 25px;" height="25px"></span><a style="color: #292626;">Categories</a><span class="arrow_menu_exam"></span></h3>
         @foreach($courseName as $course)
      <ul class="listing_exam_menu bb" style="padding:0px; text-align: center">
      <li href=""><a href="{{url('chapters',$course->id)}}">{{$course->course_name}}</a></li>
      </ul>
          @endforeach
      </div>
    </div>

      @php

          $videoCoursesDetails=\App\VideoCoursesModel::all()->take(6);

      @endphp




        <div class="col-md-10">

          @foreach($videoCoursesDetails as $courseDetail)
              <div class="col-md-4">
                <div class="packages_box_wrap_m rrb_test_series_pckg">
                  <div class="packpackages_box_head">
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="packages_logo_box" >
                          <img src="{{ url('admin') }}/public/uploads/{{ $courseDetail->course_picture }}" alt="">
                        </div>
                      </div>
                      <div class="col-xs-9" style="padding:5px;">
                        <h4> <br>{{$courseDetail->course_name}} Exam</h4>
                      </div>
                    </div>

                  </div>
                  <div class="packages_info_wp_m">
                    <ul>
                      <li>Course Name : {{$courseDetail->course_name}}</li>
                      <li>Couser Code :{{{$courseDetail->course_code}}}</li>
                      <li>{{$courseDetail->course_des}}</li>
                    </ul>
                    <div class="packages_price_wp">
                      <div class="price_offer_m">
                       <!--  <p class="old_price"><i class="fa fa-rupee"></i>598/-</p><span>50% Off</span> -->
                      </div>
                      <?php 
                         if($courseDetail->price == 0)
                         { ?>
                           
                           <p class="offer_price">Free
                      </p>

                         <?php }
                         else
                         { ?>
                            
                            <p class="offer_price"><i class="fa fa-rupee"></i> {{$courseDetail->price}} <span class="valid_wp">for 12 months</span>
                      </p>

                         <?php }
                      ?>
                      
                    </div>
                    <!-- <a class="btn btn-block purchasepkg_class_pay" data-id="e71fb1b6bb19f27d" href="javascript:void(0)">Buy Now</a> -->
                    <div class="row">
                      {{--<div class="col-xs-7">--}}
                        {{--<a class="btn btn-block btn-primary" style=" background:transparent; color:#2473CD;" data-id="f1ef658b45d590eb" href="{{url('chapters',$courseDetail->id)}}">--}}
                         {{--Prepare Course--}}

                        {{--</a>--}}
                      {{--</div>--}}
                                      <div class="row">
                  <div class="col-xs-6">
                      <a class="btn btn-block btn-primary" style=" background:transparent; color:#2473CD;" data-id="f1ef658b45d590eb" href="{{ url('exam') }}/{{ $courseDetail->id }}">
                        Get Started

                      </a>
                  </div>
                  <?php
                    
                    if (in_array($courseDetail->id, $allowed) || $courseDetail->price == 0)
                        {
                        //echo "Match found";
                        }
                      else
                        { ?>
                         
                         <div class="col-xs-6">
                    <a href="{{ url('exam') }}/{{ $courseDetail->id }}" class="btn btn-block purchasepkg_class_pay" data-id="f1ef658b45d590eb" href="javascript:void(0)">Buy Now</a>

                    </div>

                       <?php }

                  ?>

                  
                </div>
                    </div>
                  </div>
                </div>

              </div>
          @endforeach


            </div>








  </div>





</section>
</div>

@include('front/footer')
