$(function(){$('.trusted_students_slide').bxSlider({slideWidth:165,minSlides:1,maxSlides:6,moveSlides:1,pager:false,auto:true,autoDelay:1,controls:false,slideMargin:10});$('.testimonials_slider').bxSlider({slideWidth:1024,minSlides:1,maxSlides:1,slideMargin:32,auto:true,controls:false,pause:10000,autoHover:true});});$(function(){$('#videos').on('click',function(){var page=segment2;$.ajax({url:frontend_url+"load-demo-videos",type:'POST',data:{url:page},beforeSend:function(){$("#Demo-Videos").html("Please wait...loading demo videos");},success:function(data){$("#Demo-Videos").html(data);}});});$('#work').on('click',function(){var page=segment2;$.ajax({url:frontend_url+"load-work-video",type:'POST',data:{url:page},beforeSend:function(){$("#How-it-Works").html("Please wait...loading demo video");},success:function(data){$("#How-it-Works").html(data);}});});$(document).on('change','.checkPendrive',function(){if(this.checked){if(this.id==='pendrive_segment-f22dbbfd63515362'){$('.'+this.id).html('<span>₹ 8000</span>₹ 5,998');}else{$('.'+this.id).html('<span>₹ 7000</span>₹ 5,498');}}else{if(this.id==='pendrive_segment-f22dbbfd63515362'){$('.'+this.id).html('<span>₹ 8000</span>₹ 4,999');}else{$('.'+this.id).html('<span>₹ 7000</span>₹ 4,499');}}});$(document).on('change','.checkPendriveBank',function(){if(this.checked){if(this.id==='pendrive_segment-0c232f072433f148'){$('.'+this.id).html('<span>₹ 8000</span>₹ 5,998');}else{$('.'+this.id).html('<span>₹ 7000</span>₹ 5,498');}}else{if(this.id==='pendrive_segment-0c232f072433f148'){$('.'+this.id).html('<span>₹ 8000</span>₹ 4,999');}else{$('.'+this.id).html('<span>₹ 7000</span>₹ 4,499');}}});$(document).on('change','.checkPendriveSub',function(){if(this.checked){$('.'+this.id).html($('#'+this.id+'_subpen').html());}
else{$('.'+this.id).html($('#'+this.id+'_sub').html());}});$(document).on('click','.sendotp',function(){var mobile=$(".usermobile").val();var exam=$("#examname").val();send_otp(mobile,exam);});$(document).on('click','.checkotp',function(){var otp=$(".userotp").val();check_otp(otp);});});function send_otp(mobile,exam){var number=mobile;var examname=exam;$.ajax({url:frontend_url+"send-user-otp",type:'POST',dataType:'json',data:{phone:number,exam:examname},beforeSend:function(){$("#send").html('Wait... <i class="fa fa-refresh fa-spin"></i>');},success:function(data){if(data.status==1){$("#mobilearea").hide();$("#otparea").show();$("#send").html('Send OTP');}else{$("#send").html('Send OTP');}
alert(data.msg);}});}
function check_otp(otp){var otpval=otp;$.ajax({url:frontend_url+"check-user-otp",type:'POST',data:{otp:otpval},beforeSend:function(){$("#optcheck").html('Wait <i class="fa fa-refresh fa-spin">');},success:function(data){if(data==='true'){$("#otpcheck").html('Verify');window.location=$("#free_pack").val();}else{$("#optcheck").html('Verify');alert(data);}}});}
function coachingEnrolledStudents(){$.ajax({url:frontend_url+"enrolled-students",type:'POST',data:{type:1},success:function(data){document.getElementById("enrolledstu").textContent=data;}});}