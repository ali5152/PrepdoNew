$(window).scroll(function(){var ScrollTop=$(window).scrollTop();if(ScrollTop>=180){$('#fix_relative').addClass('fix_sidebar');}else{$('#fix_relative').removeClass('fix_sidebar');}});$(window).scroll(function(){var ScrollTop=$(window).scrollTop();if(ScrollTop>=75){$('#fix_relative_my_packs').addClass('fix_sidebar');}else{$('#fix_relative_my_packs').removeClass('fix_sidebar');}});$(document).on('click','#continue',function(event){loginsignup(event);});$(document).on('click','#regbutt',function(event){submitregistration(event,'loginform');});$(document).on('click','#signupbyfb',function(event){submitregistration(event,'registrationformfb');});$(document).on('click','#logintopanel',function(event){logintopanel(event);});$(document).on('click','#forgotpassword',function(event){forgotpassword(event);});$(document).on('click','#signin',function(event){read('email');});$(document).on('click','#forgotsubmit',function(event){fpaction(event)});function read(type){var valoft=$('#'+type).val();$('.ls').html('<div class="form-group"><input type="text" placeholder="Email or Mobile *" id="lsd" class="form-control" data-validation-error-msg="The email or phone field is required." data-validation="required" name="username" value="'+valoft+'"></div><div class="form-group margin-bottom-0"><button id="continue" type="submit" class="login_all_submit">Continue</button></div>');$('.modal-body h4').html('Login/sign up on wifistudy');$('.modal-body p').html('Please provide your Mobile Number or Email to Login/ Sign Up on wifistudy');}
function closeeye(typeas){var classeys=$('.fa-eye').length;var classeysn=$('.fa-eye-slash').length;if(classeys>0){$('#'+typeas).attr('type','text');$('.fa-eye').addClass('fa-eye-slash');$('.fa-eye').removeClass('fa-eye');}
if(classeysn>0){$('#'+typeas).attr('type','password');$('.fa-eye-slash').addClass('fa-eye');$('.fa-eye-slash').removeClass('fa-eye-slash');}}
if(issessionset!=''&&issessionset!=null||parseInt(issessionset)>0){$(function(event){});function logincheck(){$.ajax({url:frontend_url+'checklogin',type:'POST',data:'',success:function(data){if(data!=''&&data!=null){try{var response=jQuery.parseJSON(data);}
catch(err){var response='string';}
if(typeof response=='object'){alert('Someone tried to login into your account from different system, for security reason we are logging you out.');window.location.href=response.url;}}}});}
function loginwioutaction(a){$.ajax({url:frontend_url+'logintemp',type:'POST',data:{'e':a},beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();return false;}});}}
if(issessionset==''||issessionset==null||parseInt(issessionset)<=0){$(function(event){fbsocial(event);gmailsocial(event);});function forgotpassword(event){var current_email=$('#email').val();if(typeof current_email=='undefined'){var current_email='';}
var htmlofls='<div style="position:relative" class="form-group"><input type="text" value="'+current_email+'" data-validation-error-msg="Please enter valid email adress" placeholder="Email Address*"  maxlength="100" data-validation="required email" id="email" class="form-control" name="email" ></div><div class="form-group margin-bottom-0"><span class="left"><a class="signinc" id="signin" href="javascript:void(0)">Sign In</a></span><input type="submit" id="forgotsubmit" value="Submit" class="login_all_submit" name="submit"></div>';$('.ls').html(htmlofls);$('#loginform').attr('action',frontend_url+'forgot-password-action');$('.modal-body h4').html('Forgot Password?');$('.modal-body p').html('Please provide your email address to get reset password link');}
function fpaction(event){event.preventDefault();var email=$('#email').val();$.ajax({url:frontend_url+'forgot-password-action',type:'POST',data:{'email':email},beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('#snipper').html('');$('#email').val('');try{var response=jQuery.parseJSON(data);}
catch(err){var response='string';}
if(typeof response=='object'){$('.form-error').remove();if(response.st=='1'){$('#snipper').css('clear','both');$('#email').val();$('#snipper').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+response.msg+'</div>');return false;}else{$('#snipper').css('clear','both');$('#snipper').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> '+response.msg+'</div>');return false;}}else{$('.ls').html(data);}}});}
function fbsocial(){$.ajax({url:frontend_url+'auth-facebook',type:'POST',data:{'only':1},beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('.fbuniqueclass').html(data);}});}
function gmailsocial(){$.ajax({url:frontend_url+'auth-google',type:'POST',data:{'only':1},beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('.gplusuniqueclass').html(data);}});}
function submitregistration(event,formid){event.preventDefault();var xform=document.getElementById(formid);var formID=new FormData(xform);$.ajax({url:frontend_url+'registration',processData:false,contentType:false,type:'POST',data:formID,beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('#snipper').html('');try{var response=jQuery.parseJSON(data);}
catch(err){var response='string';}
if(typeof response=='object'){$('.form-error').remove();if(response.error!=''&&typeof response.error!='undefined'){$('#snipper').css('clear','both');$('#snipper').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> '+response.error+'</div>');return false;}else{$('#phone').css('border-color','green');$('#phone > .form-error').remove();}
if(response.phoneerror!=''){$('#phone').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.phoneerror+'</span>').insertAfter('#phone');}else{$('#phone').css('border-color','green');}
if(response.passworderror!=''){$('#password').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.passworderror+'</span>').insertAfter('#password');}else{$('#password').css('border-color','green');$('#password > .form-error').remove();}
if(response.nameerror!=''){$('#name').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.nameerror+'</span>').insertAfter('#name');}else{$('#name').css('border-color','green');$('#name > .form-error').remove();}
if(response.emailerror!=''){$('#email').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.emailerror+'</span>').insertAfter('#email');}else{$('#email').css('border-color','green');$('#email > .form-error').remove();}}else{$('.ls').html(data);}}});}
function logintopanel(event){event.preventDefault();var xform=document.getElementById('loginform');var formID=new FormData(xform);$.ajax({url:frontend_url+'loginaction',processData:false,contentType:false,type:'POST',data:formID,beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('#snipper').html('');try{var response=jQuery.parseJSON(data);}
catch(err){var response='string';}
if(typeof response=='object'){if(response.error==0){window.location.href=response.url;return false;}
$('.form-error').remove();if(response.error!=''&&typeof response.error!='undefined'){$('#snipper').css('clear','both');$('#snipper').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> '+response.error+'</div>');return false;}else{$('#snipper').attr('clear','');$('#snipper').html('');}
if(response.phoneerror!=''){$('#phone').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.phoneerror+'</span>').insertAfter('#phone');}else{$('#phone').css('border-color','green');}
if(response.passworderror!=''){$('#password').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.passworderror+'</span>').insertAfter('#password');}else{$('#password').css('border-color','green');$('#password > .form-error').remove();}
if(response.nameerror!=''){$('#name').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.nameerror+'</span>').insertAfter('#name');}
if(response.emailerror!=''){$('#email').css('border-color','#b94a48');$('<span class="help-block form-error" style="color:#b94a48">'+response.emailerror+'</span>').insertAfter('#email');}else{$('#email').css('border-color','green');$('#email > .form-error').remove();}}else{$('.ls').html(data);}}});}
function loginsignup(event){event.preventDefault();var xform=document.getElementById('loginform');var formID=new FormData(xform);$.ajax({url:frontend_url+'login',processData:false,contentType:false,type:'POST',data:formID,beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('#snipper').html('');try{var response=jQuery.parseJSON(data);}
catch(err){var response='string';}
if(typeof response=='object'){if(response.error!=''){$('#lsd').css('border-color','#b94a48');$('.form-error').remove();$('<span class="help-block form-error" style="color:#b94a48">'+response.error+'</span>').insertAfter('#lsd');return false;}
if(response.type!=''){if(response.type=='login'){$('#loginform').attr('action',frontend_url+'loginaction');setTimeout(function(){$('#password').focus()},20);}
if(response.type=='reg'){$('#loginform').attr('action',frontend_url+'registration');}
$('.ls').html(response.datan);}}else{}}});}}
$(document).on('keyup','#name',function(){var str=$(this).val();if(/^[a-zA-Z0-9- ]*$/.test(str)==false){alert('Please Enter Only Alphanumeric characters. in Name');$(this).val('');}});$(document).on('click','.examcli',function(){var newid=$(this).attr('data-id');$('.myoverdetailsmodel').attr('id','myid-'+newid);$('#myid-'+newid).modal();$.ajax({url:frontend_url+'/Exam/loadstatic',type:'POST',data:{'l':newid},success:function(data){$('.allouter').html(data);}});});