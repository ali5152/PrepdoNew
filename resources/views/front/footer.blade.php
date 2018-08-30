
<hr style="display: block;
     width: 100%;
      margin-bottom: 0.5em;
 
    border-style: inset;
    border-width: 1px;">
<div class="container">
    <div class="row">


    <div class="col-sm-4 col-xs-6" style="text-align:center;">
      <div class="footer_widgets">

        <img src="{{asset('images/logo.png')}}" style="height:80px;" style="margin-top:-80px;" alt="">
  <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a laoreet sapien.

      </div>
    </div>
		<div class="col-sm-4 col-xs-6" style="text-align:center;">
			<div class="footer_widgets">
				<h5>Online Test </h5>
				<ul>
					<li><a href="#">SSC CGL</a>
					</li>
					<li><a href="#">CPO SI</a>
					</li>
					<li><a href="#">SBI PO</a>
					</li>
					<li><a href="#">SBI Clerk</a>
					</li>

				</ul>
			</div>
		</div>

		<div class="col-sm-4 col-xs-6" style="text-align:center;">
			<div class="footer_widgets">
				<h5>Company</h5>
				<ul>
					<li><a href="#">About Us</a>
					</li>
					<li><a href="#">Privacy Policy</a>
					</li>
					<li><a href="#">Terms &amp; Conditions</a>
					</li>
					<li><a href="#">Careers</a>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<div class="row" style=" text-align: center;margin: 0;bottom: 0; background-color:#665DD0;width: 100%">

	<div class="col-md-5">
		<img src="{{asset('images/logo.png')}}" alt="" style="height:60px; margin-top:10px;"> <span style="color:white; font-size:15px; margin-top:100px;">&copy; Copywrite Reserved By</span>
	</div>

	<div class="col-md-7" style="color:white;"><br>
	<!-- 	<p>Developed By <a href="#" style="color:white;"> Queper Technologies </a></p> -->
	</div>
</div>



<script>
    $(function(){
    $('#intro_slider').bxSlider({
        mode: 'vertical',
        captions: true,
        slideWidth: 600,
	auto: true,
	pause:10000
      });

    $('.testimonials_slider').bxSlider({
        slideWidth: 1024,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 32,
        auto: true,
        controls: false,
        pause:10000,
        autoHover:true
 });
    });
    </script>
<script>
    var end = new Date('07/01/2018 11:59 PM');
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            $(".countset").html('Exam Time Offer');
            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        $(".countset").html(days + 'D '+hours + 'H '+minutes + 'M '+seconds + 'S');
    }
    timer = setInterval(showRemaining, 1000);
</script>
<script>
$(document).on('change','.checkPendrive',function(){
    $('input.checkPendrive').not(this).prop('checked', false);
    if(this.checked) {
        var pid = $("#"+this.id).attr("data-value");
        var totPrice = parseInt($("#price-"+pid).text()) + parseInt($("#"+this.id).attr("data-price"));
        $("#price-"+pid).text(totPrice);
    }else{
        var pid = $("#"+this.id).attr("data-value");
        var totPrice = parseInt($("#price-"+pid).text()) - parseInt($("#"+this.id).attr("data-price"));
        $("#price-"+pid).text(totPrice);
    }
});
</script>
<style>
.waitpay {position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); z-index: 9999999; text-align: center;}
.inwait p { color: #fff; font-size: 23px; text-align: center;}
.inwait { position: absolute; top: 50%; left: 0; right: 0; margin-top: -20px;}

.download_app_wp {
  background: rgba(0, 0, 0, 0) linear-gradient(160deg, #02ccba, #aa7ecd) repeat scroll 0 0;z-index: 2147483647;
  bottom: 0; left: 0; padding: 10px; position: fixed; right: 0; display:none;}
@media (max-width:767px) { .download_app_wp { display:block; } }
.download_app_wp .app_logo_wp {
  left: 0; width: 50px; position: absolute; top: 50%;
  transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); -webkit-transform: translateY(-50%);
}
.download_app_wp .app_inner_wp a {display:block;}
.download_app_wp .app_info_wp { position: relative; text-align:center;}
.download_app_wp .app_info_wp h6 { color: #fff; font-size: 13px; font-weight: 600; letter-spacing: 0.3px; line-height: 20px; margin: 0 auto 4px;}
.download_app_wp .app_info_wp p { color: #fff; font-size: 13px; letter-spacing: 0.5px; margin: 0 auto;}
.download_app_wp .app_info_wp .btn { background: #fff none repeat scroll 0 0; border-radius: 0; color: #111; font-size: 13px; font-weight: 600; margin-left: 8px; padding: 0 6px;}
.download_app_wp .app_inner_wp #close_app_wp { background: #000 none repeat scroll 0 0; border-radius: 50%; color: #fff; cursor: pointer; font-size: 17px; height: 28px; line-height: 26px; position: absolute; right: 0px; text-align: center; top: -24px; width: 28px;}
.download_app_wp.affix {bottom:0;}
.download_app_wp {bottom:-400px; transition-duration: 0.3s; -o-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -webkit-transition-duration: 0.3s;}
</style>
<div id="waitpay" style="display:none;">
<div class="waitpay">
<div class="inwait">
<p>Wait....</p>
<p>Please do not refresh</p>
</div>
</div>
</div>
<div id="beforepay" style="display:none;">
<div class="waitpay">
<div class="inwait">
<img src="{{asset('assets/frontend/images/loading_pay.gif')}}" />
</div>
</div>
</div>
</div>
<style>
.live_class_you {
    background: #ffffff none repeat scroll 0 0;
    bottom: 0;
    height: 292px;
    left: 0;
    max-width: 360px;
    position: fixed;
    z-index: 2147483647;
	padding:15px;
	-webkit-box-shadow: 4px 4px 8px 0px rgba(0,0,0,0.62);
box-shadow: 4px 4px 8px 0px rgba(0,0,0,0.62);
}
#liveclass > h6 a {
    color: #555555;
	cursor:pointer;
}
#liveclass > h6 a:hover { color:#000; }
#liveclass > h6 {
    color: #555555;
    font-size: 14px;
    line-height: 20px;
    margin: 0 0 15px;
    max-height: 61px;
	min-height: 61px;
    overflow: hidden;
}
#closeid { opacity:0.75;}
</style>
<div class="live_class_you" style="display:none;"><div class="live_class_you_in">
<button aria-label="Close" data-dismiss="modal" id="closeid" class="close" type="button">
<span aria-hidden="true">×</span>
</button>
<div id="liveclass"></div>
</div>
</div>
<script>
 $( "#closeid" ).click(function() {
    $( ".live_class_you" ).remove();
});
/*var myVar = window.setInterval(function(){
  //get_live_class();
}, 60 * 1000);*/
function get_live_class(){

        var dt = new Date();
        var time = dt.getHours();

        var time0 = 0.6;
        var time_0 = 0.7;

        var time1 = 0.8;
        var time_1 = 0.9;

        var time2 = 10;
        var time_2 = 11;

        var time3 = 12;
        var time_3 = 13;

        var time4 = 14;
        var time_4 = 15;

        var time5 = 16;
        var time_5 = 17;

        var time6 = 18;
        var time_6 = 19;

       if((time >= time0 && time < time_0) || (time >= time1 && time < time_1) || (time >= time2 && time < time_2) || (time >= time3 && time < time_3) || (time >= time4 && time < time_4) || (time >= time5 && time < time_5) || (time >= time6 && time < time_6)){
        $.ajax({
               url: "https://www.wifistudy.com/wifistudy-live",
               data: {liveclass:'1'},
               type: 'POST',
               success: function(data) {
                if(data!=1){
                 clearInterval(myVar);
                 $("#liveclass").html(data);
                 $(".live_class_you").show();
             }
            }
        });
    }

 }
</script>
<div role="dialog" id="my_login_signup_modal" class="modal fade in" aria-hidden="false">
<div class="modal-dialog modal-sm">
<div class="modal-content" style="z-index: 999999;"><button class="close_login" type="button" data-dismiss="modal" aria-label="Close">&times;</button>

<div id="tab-login" class="tab_content_login_box tab-login">
<div class="outer_link_tab_login tab_change">
</div>
<div class="modal-body">
<h4>Login/SignUp on WiFiStudy</h4>
<p class="subHead marB20">Please provide your Mobile No. or Email to Login/SignUp on WiFiStudy</p>
<div id="snipper"></div>
<form action="#" id="loginform" method="post" name="loginform" class="login_all_forms">
<div class="ls">
<div class="form-group"><input type="text" name="username" data-validation="required" data-validation-error-msg="The email or phone field is required." class="form-control" id="lsd" placeholder="Email or Mobile *"></div>
<div class="continew_sub_btn"><button class="signUp_btn login_all_submit" type="submit" id="continue">Continue</button></div>
</div>
</form>
<div class="clear" style="margin-bottom: 20px"></div>
<div class="clearfix">
<div class="or_login_with">or Login Using</div>
<div class="col-md-1"></div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gplusuniqueclass"> </div>
</div>
<div class="clear"></div>
</div>
</div>

</div>
</div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/rpay.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/cart.js')}}"></script>
<script src="../checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/globle_custom.js')}}" async></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.form-validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/developer-dilip.js')}}"></script>
<script>
    $.validate();
    $("div.tab-content").scrollTop(300);
    </script>
<script src="{{asset('assets/frontend/js/developer.js')}}"></script>
<div id="back-to-top"><a href="#top"><span></span></a></div>

</footer>



<script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/810089199/?guid=ON&amp;script=0"/>
</div>
</noscript>
<script src="{{asset('assets/frontend/js/comment.js')}}"></script>
<script type="text/javascript" async src="../cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJaxb198.js?config=TeX-MML-AM_CHTML">
</script>

</body>

<!-- Mirrored from www.wifistudy.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 06:10:29 GMT -->
</html>
