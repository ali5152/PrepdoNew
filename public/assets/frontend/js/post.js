var frontend_url=frontend_url;if(loadmore)
{if(loadmore==1)
{postLoader();}}
var ajax_stop=0;var heightimg=$('#hid_zoom_image_height').val();$('.PostTab').click(function(){$('.loading_btn').hide();$('.post_top').show();var item_type=$(this).attr("dataitem");$('#PostDoubts').css('display','none');$('#PostMCQ').css('display','none');if(item_type=='PostDoubts')
{$('#hid_post_type').val(1);$('.mcqop').removeAttr('required');$("#PostMCQ1").removeClass("myActiveTab");$("#PostDoubts1").addClass("myActiveTab");$("#mcq_question").css("border","thin solid rgba(204, 201, 201, 0.13)");}
else if(item_type=='PostMCQ')
{$('#hid_post_type').val(2);$("#PostDoubts1").removeClass("myActiveTab");$("#PostMCQ1").addClass("myActiveTab");$("#post_data").css("border","thin solid rgba(204, 201, 201, 0.13);");}
else if(item_type=='PostShare')
{$('#PostDoubts').css('display','block');$('#hid_post_type').val(3);}
$('#'+item_type).css('display','block');});$(document).ready(function(e){$("#uploadimage").on('submit',(function(e){postActive();var grp_id=$('#group_id').val();var pData=$('#post_data').val();var postType=$('#hid_post_type').val().trim();var postData=$('#post_data').val().trim();var group_id=$('#group_id').val().trim();var post_file=$('#post_file').val().trim();$("#post_data").css("border","");$(".mcqop").css("border","");if(postType==1){if((postData=='')&&(post_file=='')){$("#post_data").css("border","red thin solid");$("#post_data").focus();return false;}
if(group_id==''){$("#group_id").addClass("plz_select");return false;}}
if(postType==2){if((postData=='')&&(post_file=='')){$("#post_data").css("border","red thin solid");$("#post_data").focus();return false;}
if($(".mcqop").val()=='')
{$(".mcqop").css("border","red thin solid");$(".mcqop").focus();return false;}
if(group_id==''){$("#group_id").addClass("plz_select");$("#group_id").focus();return false;}
var empty=0;$('.mcqop').each(function(){if(this.value==""){empty++;}})
if(empty!=0){$(".mcqop").css("border","red thin solid");$(".mcqop").focus();return false;}}
$('#TopLoaderDiv').css('display','block');e.preventDefault();$("#message").empty();$('#loading').show();$('.post_top').hide();$('.loading_btn').show();$.ajax({url:frontend_url+"post-upload",type:"POST",data:new FormData(this),contentType:false,cache:false,processData:false,beforeSend:function(){NProgress.start();},success:function(data)
{NProgress.done();$('#TopLoaderDiv').css('display','none');var Darr=data.split('*-');if(Darr[0]==0)
{$('#MyErrorDiv').modal('show');$('#post_file').val();$('#popupError').html(Darr[1]+' , Please try again.');}
if(Darr[0]==1)
{$("#conversation_all_user").prepend(Darr[2]);$('#image_preview').css("display","none");$('#previewing').attr('src','');$("#group_id").val("");$("#post_data").val("");$("#post_file").val("");$("#group_id").removeClass("plz_select");$(".mcqop").val('');$('#PostDoubts1').click();$('#myModalPost').modal('hide');}
$('#loading').hide();$('.post_top').show();$('.loading_btn').hide();$('.postClose').css('display','none');$('#top_ask_doubt_post').css('z-index','0');$('#TopLoaderDiv img').show();$('#hid_post_type').val(1);$('.mcqShow').css('display','none');$('.add_mcq_opt').css('display','block');}});}));$(function(){$(document).on('change','#post_file',function(){$('#image_preview').css('display','none');$("#message").empty();var file=this.files[0];var imagefile=file.type;var match=["image/jpeg","image/png","image/jpg"];if(!((imagefile==match[0])||(imagefile==match[1])||(imagefile==match[2])))
{$('#previewing').attr('src','noimage.png');$('#MyErrorDiv').modal('show');$('#popupError').html('Please Select A valid Image File</p><strong>Note :</strong> <span id="error_message">Only <strong>JPEG</strong>, <strong>JPG</strong> and <strong>PNG</strong> Images type allowed</span>');$('#post_file').val();return false;}
else
{var reader=new FileReader();reader.onload=imageIsLoaded;reader.readAsDataURL(this.files[0]);}});});function imageIsLoaded(e){$("#post_file").css("color","green");$('#image_preview').css("display","block");$('#previewing').attr('src',e.target.result);$('#previewing').attr('height','100px');};});$(document).on('click','.like_cls',function(){var item_type=$(this).attr("dataitem");var item_id=$(this).attr("iditem");var resp=item_id+item_type;$.ajax({url:frontend_url+"post-like",data:{v:item_id,t:item_type},type:'POST',success:function(data){if(data)
{var Darr=data.split('-');if(Darr[0]==0)
{$("#"+resp).removeClass('has_lcs');$("#"+resp+" .likeCount").html(Darr[1]);}
if(Darr[0]==1)
{$("#"+resp).addClass('has_lcs');$("#"+resp+" .likeCount").html(Darr[1]);}}
else
{}}});});$(document).on('click','.c_like_cls',function(){var item_type=$(this).attr("dataitem");var item_id=$(this).attr("iditem");var resp=item_id+item_type;$.ajax({url:frontend_url+"post-like",data:{v:item_id,t:item_type},type:'POST',success:function(data){if(data)
{var Darr=data.split('-');if(Darr[0]==0)
{$("#"+resp+" .c_like").html(Darr[1]+' ');}
if(Darr[0]==1)
{$("#"+resp+" .c_like").html(Darr[1]+' ');}}
else
{}}});});$(document).on('keypress','.CommentBox',function(event){var cVal=$('#CommentngVal').val();var id=this.form.id;var textboxid=this.id;$(".replay_user_tag").click();if(event.keyCode==13&&event.shiftKey){var content=this.value;var caret=getCaret(this);this.value=content.substring(0,caret)+"\n"+content.substring(carent,content.length-1);event.stopPropagation();return false;}
if(event.keyCode==13){event.preventDefault();var mainComID=$(this).closest('div.CommentMainDiv').attr('id');$('#TopLoaderDiv').css('display','block');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0)');$('#TopLoaderDiv img').css('display','none');var xform=document.getElementById(id);var formID=new FormData(xform);if(cVal==0)
{$('#CommentngVal').val(1);$.ajax({url:frontend_url+"post-comment",processData:false,contentType:false,type:'POST',data:formID,beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();if(data!='')
{$('#TopLoaderDiv').css('display','none');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0.6)');var Darr=data.split('*-');if(Darr[0]!='NOT')
{$("#"+mainComID+" .commentCount").html(Darr[0]);$("#"+textboxid).val('');$("#"+id+"show").html('');$("#"+id+"show").append(Darr[1]);$('.CommentImgPre').css('display','none');$('.commentFile').val('');$('.removeuploadimg').hide();$('#CommentngVal').val(0);}
else{$('#MyErrorDiv').modal('show');$('#popupError').html(Darr[1]);}}}});}}});$(document).on('change','.commentFile',function(){var fileid=this.id;var form_id=this.form.id;var textboxID=$('#'+form_id+' .CommentBox').attr('id');var file=this.files[0];var imagefile=file.type;var match=["image/jpeg","image/png","image/jpg"];if(!((imagefile==match[0])||(imagefile==match[1])||(imagefile==match[2])))
{$('#MyErrorDiv').modal('show');$('#popupError').html('Please Select A valid Image File</p><strong>Note :</strong> <span id="error_message">Only <strong>JPEG</strong>, <strong>JPG</strong> and <strong>PNG</strong> Images type allowed</span>');$('.commentFile').val();return false;}
else
{readURL(this,fileid);$('#'+textboxID).focus();}});function readURL(input,fileid){if(input.files&&input.files[0]){var reader=new FileReader();reader.onload=function(e){$('#'+fileid+'prev').css('display','block');$('#'+fileid+'prev img').attr('src',e.target.result);}
reader.readAsDataURL(input.files[0]);}}
$(document).on('click','.replay_cls',function(){var DivId=$(this).attr("dataitem");var mylenth=$('#'+DivId+' .replyCommentBox').length;var userpic=$('.commentUserimg').attr('src');var DivFrom='<div class="im_user_default_bx replyCommentBox position_relative"><form action="" method="post" enctype="multipart/form-data" id="frm'+DivId+'"><div class="pr_lft_im">\n\
<div class="profle_img_im"><a href="#"><img class="img-responsive img-circle" src="'+userpic+'"></a></div></div>\n\
<div class="cmt_bx_out"><textarea placeholder="Reply to this post... " class="im_user reply_text" id="txt'+DivId+'" name="reply_comment" type="text"></textarea><input name="comment_id" type="hidden" value="'+DivId+'">\n\
<div class="im_user_main_cm_bx_outer"><div class="im_usr_file_upload"> \n\
<a class="upload_qustin" href="javascript:;"> <i class="fa fa-camera" aria-hidden="true"></i>\n\
<input class="hiddn_file_upload rep_file adpFile" name="reply_comment_file" size="40"  type="file"></a>&nbsp;<span class="label label-info" id="upload-file-info">\n\
</span> </div></div></div></form></div><div id="com'+DivId+'"  class="RepImgPre" style="display:none;"><img src="" height="100"><i class="fa fa-times-circle removeuploadimg" aria-hidden="true" ></i></div>';if(mylenth==0){$('#F'+DivId).append(DivFrom);}
else
{}});$(document).on('keypress','.reply_text',function(event){var id=this.form.id;var textboxid=this.id;$('#'+textboxid).css('overflow','hidden');var scrotexthight=$('#'+textboxid).prop('scrollHeight');$('#'+textboxid).css('height',(1+scrotexthight)+"px");if(event.keyCode==13&&event.shiftKey){var content=this.value;var caret=getCaret(this);this.value=content.substring(0,caret)+"\n"+content.substring(carent,content.length-1);event.stopPropagation();return false;}
if(event.keyCode==13){event.preventDefault();var MainId=id.substring(3);var hd_com_id=$('#hid_com_id').val();var repData=$('#'+textboxid).val().trim();if(hd_com_id=='')
{var hd_com_id='0';}
$('#TopLoaderDiv').css('display','block');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0)');$('#TopLoaderDiv img').css('display','none');var xform=document.getElementById(id);var formID=new FormData(xform);$.ajax({url:frontend_url+"post-reply-comment/"+hd_com_id,processData:false,contentType:false,type:'POST',data:formID,beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('#TopLoaderDiv').css('display','none');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0.6)');var Darr=data.split('*-');if(Darr[0]!='NOT'){$("#"+textboxid).val('');$("#S"+MainId).html(Darr[1]);$('#com'+MainId).css('display','none');$('.rep_file').val('');$(".replay_user_tag").click();$('.removeuploadimg').hide();}
else{$('#MyErrorDiv').modal('show');$('#popupError').html(Darr[1]);}}});}});$(document).on('change','.rep_file',function(){var id=this.form.id;var form_id=this.form.id;var textboxID=$('#'+form_id+' .reply_text').attr('id');var MainId=id.substring(3);var file=this.files[0];var imagefile=file.type;var match=["image/jpeg","image/png","image/jpg"];if(!((imagefile==match[0])||(imagefile==match[1])||(imagefile==match[2])))
{$('#MyErrorDiv').modal('show');$('#popupError').html('Please Select A valid Image File</p><strong>Note :</strong> <span id="error_message">Only <strong>JPEG</strong>, <strong>JPG</strong> and <strong>PNG</strong> Images type allowed</span>');$('.rep_file').val();return false;}
else
{readURL1(this,'com'+MainId);$('#'+textboxID).focus();}});function readURL1(input,fileid){if(input.files&&input.files[0]){var reader=new FileReader();reader.onload=function(e){$('#'+fileid).css('display','block');$('#'+fileid+' img').attr('src',e.target.result);}
reader.readAsDataURL(input.files[0]);}}
function goToByScroll(id,username,dkey){$('html,body').animate({scrollTop:$("#"+id).offset().top-100},'slow');$('#U'+id).css('background','#1eb0bc');$('#U'+id).css('padding','1px 5px');$('#U'+id).css('color','aliceblue');$('#U'+id).css('margin-left','9%');$('.replay_user_tag_div').css('display','block');$('#U'+id).html('Reply to '+username+' <span class="removeUsertag"> &#10006;</span>');$('#'+id).focus();$('#hid_com_id').val(dkey);}
$(document).on('click','.lastrep',function(e){e.preventDefault();goToByScroll($(this).attr("dataitem"),$(this).attr("dataid"),$(this).attr("datakey"));});$(document).on('click','.replay_user_tag',function(e){$('.replay_user_tag').html('');$('.replay_user_tag_div').css('display','none');$('#hid_com_id').val('');});$(document).ready(function(){var max_fields=4;var wrapper=$(".MytextOption");var add_button=$(".more_optinbtn");var x=1;$(add_button).click(function(e){e.preventDefault();if(x<max_fields){$('.pcq_ques .remove_field').html('');x++;if(x==2)
{var opt="C";}
if(x==3)
{var opt="D";}
if(x==4)
{var opt="E";}
$(wrapper).append('<div class="pcq_ques"><span>('+opt+')</span><input type="text" placeholder="option '+opt+'" name="option'+opt+'" class="mcqop" autocomplete="off"/> <a href="javascript:void(0)" class="remove_field" dataitem="rd'+opt+'" id="RDM'+opt+'"><i class="fa fa-times-circle" aria-hidden="true"></i></a></div>');$('#form_option').append('<div class="pve" id="rd'+opt+'"><input type="radio" name="pcq_crrct_ans" value="'+opt+'"><span>'+opt+'</span></div>');$('[name="option'+opt+'"]').focus();if(x==4)
{$('.more_optinbtn').css('display','none');}
else
{$('.more_optinbtn').css('display','block');}}});$(wrapper).on("click",".remove_field",function(e){e.preventDefault();$(this).parent('div').remove();x--;$('[name="optionB"]').focus();var di=$(this).attr("dataitem");$('#'+di).remove();if(x==2)
{var opt="C";}
if(x==3)
{var opt="D";}
if(x==4)
{var opt="E";}
$('#RDM'+opt).html('<i class="fa fa-times-circle" aria-hidden="true"></i>');$('[name="option'+opt+'"]').focus();if(x==4)
{$('.more_optinbtn').css('display','none');}
else
{$('.more_optinbtn').css('display','block');}});});$(document).on('click','.mcq_ans_opt',function(e){$('#TopLoaderDiv').css('display','block');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0)');$('#TopLoaderDiv img').css('display','none');$('#top_ask_doubt_post').css('z-index','0');var mcq_opt=$(this).attr("dataitem");var mcq_post=$(this).attr("dataid");var mainComID=$(this).closest('div.CommentMainDiv').attr('id');$.ajax({url:frontend_url+"post-mcq-attempt",type:'POST',data:{opt:mcq_opt,pt:mcq_post},beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$('#TopLoaderDiv').css('display','none');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0.6)');$('#'+mainComID).html(data);}});});$(document).on('click','.removeuploadimg',function(e){var mainComID=$(this).closest('div').attr('id');$('#'+mainComID).css('display','none');$('.adpFile').val('');});$(document).on('click','.btnlog',function(e){var id=this.form.id;var xform=document.getElementById(id);var postType=$('#hid_post_type').val();var postData=$('#post_data').val();var group_id=$('#group_id').val();var post_file=$('#post_file').val();var mcq_question=$('#mcq_question').val();$("#post_data").css("border","");$("#mcq_question").css("border","");$(".mcqop").css("border","");if(postType==1){if((postData=='')&&(post_file=='')){$("#post_data").css("border","red thin solid");$("#post_data").focus();return false;}
if(group_id==''){$("#group_id").addClass("plz_select");$("#group_id").focus();return false;}}
if(postType==2){if((mcq_question=='')&&(post_file=='')){$("#mcq_question").css("border","red thin solid");$("#mcq_question").focus();return false;}
if($(".mcqop").val()=='')
{$(".mcqop").css("border","red thin solid");$(".mcqop").focus();return false;}
if(group_id==''){$("#group_id").addClass("plz_select");$("#group_id").focus();return false;}}
$('.post_top').hide();$('.loading_btn').show();$('#TopLoaderDiv').css('display','block');$(this).hide();$.ajax({url:frontend_url+"data-upload-temp",type:"POST",data:new FormData(xform),contentType:false,cache:false,processData:false,success:function(data)
{var da=data.split('*-');if(da[0]==1){$('#TopLoaderDiv').css('display','none');LoginOpen();}
else
{if(da[1]!=''){$('#MyErrorDiv').modal('show');$('#popupError').html(da[1]);$('.loading_btn').hide();$('.post_top').show();}
else
{$('#MyErrorDiv').modal('show');$('#popupError').html('Somthing went wrong, Please try again');$('.loading_btn').hide();$('.post_top').show();}}}});});$(document).on('click','.load_more_link',function(e){$('#TopLoaderDiv').css('display','block');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0)');$('#TopLoaderDiv img').css('display','none');var datalimit=$(this).attr("dataitem");var dataid=$(this).attr("dataid");var datakey=$(this).attr("datakey");var loadViewID=$(this).attr("id");var MoreCom=parseInt(datalimit)+9;var htm1=$(this).attr("datatype");;var total=parseInt(htm1)-parseInt(MoreCom);$('.RepImgPre').hide();if((dataid=='')&&(datalimit=='')&&(datakey==''))
{return false;}
$.ajax({url:frontend_url+"post-comment-pagination",type:'POST',data:{lm:datalimit,id:dataid},beforeSend:function(){NProgress.start();},success:function(data){if(data!='')
{NProgress.done();$('#TopLoaderDiv').css('display','none');$('#TopLoaderDiv').css('background-color','rgba(0, 0, 0, 0.6)');var Darr=data.split('*-');if(datalimit==1){$("#"+datakey+" .outer_min_both").remove('');}
$("#viewmore"+dataid).attr("dataitem",Darr[0]);$("#"+datakey).html(Darr[1]);$('html,body').animate({scrollTop:$("#"+datakey+" .scrollViewMoreDiv").offset().top-350},'slow');if(total>0){$('#'+loadViewID).text('View '+total+' more comments');}
else
{$('#'+loadViewID).hide();}}}});});function postLoader(){$(window).scroll(function(){if($('#post_load_more').length>0){var hT=$('#post_load_more').offset().top-200,hH=$('#post_load_more').outerHeight(),wH=$(window).height(),wS=$(this).scrollTop();console.log((hT-wH),wS);if(wS>(hT+hH-wH)){start_count();}}});}
function start_count(){if(ajax_stop==0)
{var loadval=$('#post_load_more_value').val();var loadval_m=$('#post_load_more_value_m').val();var group_fetch_url=$('#group_fetch_url').val();var hid_filt_type=$('#hid_filt_type').val();if(loadval!=loadval_m)
{$('#post_load_more_value_m').val(loadval);var my_data=0;var my_data1=$('#my_data').val();if(my_data1==2){my_data=2;}
if(my_data1==1){my_data=1;}
if(my_data==2){var uid=$('#uid').val();$.ajax({url:frontend_url+"user-load-post-ajax?group="+group_fetch_url+"&filt_type="+hid_filt_type+"&uid="+uid,type:'POST',data:{lm:loadval},success:function(data){if(data==''){ajax_stop=1;}
$('#conversation_all_user').append(data);var newval=parseInt(loadval)+5;$('#post_load_more_value').val(newval);postLoader();}});}
else if(my_data==1){$.ajax({url:frontend_url+"my-post-load-data?group="+group_fetch_url+"&filt_type="+hid_filt_type,type:'POST',data:{lm:loadval},success:function(data){if(data==''){ajax_stop=1;}
$('#conversation_all_user').append(data);var newval=parseInt(loadval)+5;$('#post_load_more_value').val(newval);postLoader();}});}
else
{$.ajax({url:frontend_url+"post-load-data?group="+group_fetch_url+"&filt_type="+hid_filt_type,type:'POST',data:{lm:loadval},success:function(data){$('#conversation_all_user').append(data);var newval=parseInt(loadval)+5;$('#post_load_more_value').val(newval);postLoader();}});}}}}
function start_count_default(){var loadval=0;var loadval_m=-5;var group_fetch_url=$('#group_fetch_url').val();var hid_filt_type=$('#hid_filt_type').val();if(loadval!=loadval_m)
{$('#post_load_more_value_m').val(loadval);$.ajax({url:frontend_url+"post-load-data?group="+group_fetch_url+"&filt_type="+hid_filt_type,type:'POST',data:{lm:loadval},beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();var sm=data.split('*-');$('#conversation_all_user').html(sm[1]);var newval=parseInt(loadval)+5;$('#post_load_more_value').val(newval);$('#page_open_time').val(sm[0]);postLoader();$('html,body').animate({scrollTop:$("#home_book_out").offset().top-70},'slow');}});}}
$(document).on('click','.read_more_text',function(e){var datalimit=$(this).attr("data-item");$(this).closest('p').html(datalimit);});$(document).on('click','.shareFunCls',function(e){var type=$(this).attr("dataitem");var dataid=$(this).attr("dataid");var datatype=$(this).attr("datatype");$('#share_type').val(type);$('#share_id').val(dataid);$('#google_share_btn').attr('href','https://plus.google.com/share?url='+datatype);$('#facebook_share_btn').attr('href','https://www.facebook.com/sharer/sharer.php?u='+datatype);$('#limkedin_share_btn').attr('href','https://www.linkedin.com/shareArticle?mini=true&url='+datatype+'&title=New%20Test&summary=this%20is%20testing%20summary&source='+datatype);$('#twitter_share_btn').attr('href','https://twitter.com/intent/tweet?text=Wifi-study&url='+datatype);});$(document).on('click','.shareCls',function(e){var share_id=$(this).attr("dataid");var share_link=$(this).attr("href");var share_post_id=$('#share_id').val();var share_post_type=$('#share_type').val();if((share_id!='')&&(share_link!='')&&(share_post_id!='')&&(share_post_type))
{$.ajax({url:frontend_url+"post-share",type:'POST',data:{share_id:share_id,share_link:share_link,share_post_id:share_post_id,share_post_type:share_post_type},success:function(data){$('#myShareModal').modal('hide');return true;}});}
else
{return false;}});$(document).on('click','.scrooltoComment',function(e){var dataitem=$(this).attr("dataitem");$('html,body').animate({scrollTop:$("#"+dataitem).offset().top-300},'slow');$('#'+dataitem).focus();});$(document).on('click','.zoomImg',function(e){var modal=document.getElementById('my_image_zoom');var modalImg=document.getElementById("img01");$(modal).show();modalImg.src=this.src;var img=document.getElementById('img01');var width=img.clientWidth;var height=img.clientHeight;$('#hid_zoom_image_height').val(height);heightimg=height;});$(document).on('click','.close',function(e){var modal=document.getElementById('my_image_zoom');$(modal).hide();});$(document).on('click','.zommerImg',function(e){var modal=document.getElementById('my_image_zoom');$(modal).hide();});$(".postClose").click(function(e){$('#TopLoaderDiv').css('display','none');$('.postClose').css('display','none');$('#top_ask_doubt_post').css('z-index','0');$('#TopLoaderDiv img').show();e.stopPropagation();});$(document).click(function(){$(".reportDropdown").removeClass("show");});$('#TopLoaderDiv').click(function(){$('#top_ask_doubt_post').css('z-index','0');$('#TopLoaderDiv img').show();$('#TopLoaderDiv').css('display','none');$('.postClose').css('display','none');});$(document).on('click','#newPostsCount',function(e){var op_time=$('#page_open_time').val();var group_fetch_url=$('#group_fetch_url').val();$.ajax({url:frontend_url+"refresh-new-posts-data?group="+group_fetch_url,type:'POST',data:{V:op_time},success:function(data){var Darr=data.split('*-');$('#page_open_time').val(Darr[0]);$("#conversation_all_user").prepend(Darr[1]);$('#newPostsCount').hide();$('html,body').animate({scrollTop:$("#home_book_out").offset().top},'slow');}});});$(window).scroll(function(){var scrollTop=$(document).scrollTop();if(scrollTop>190){$('#newPostsCount').css('top','62px');$('#newPostsCount').css('position','fixed');$('#newPostsCount').css('margin-top','0px');$('#newPostsCount').css('margin-bottom','0px');}else
{$('#newPostsCount').css('top','266px');$('#newPostsCount').css('position','static');$('#newPostsCount').css('margin-top','-20px');$('#newPostsCount').css('margin-bottom','5px');}})
var angle=0,img=document.getElementById('img01');document.getElementById('RotatbtnR').onclick=function(){angle1=angle;angle=(angle+90)%360;if(angle>0)
{if(angle>0){$('#img01').removeClass("rotate0");$('#img01').removeClass("rotate90");$('#img01').removeClass("rotate180");$('#img01').removeClass("rotate270");if(angle==270){$('#RotatbtnR').css("opacity","0.5");$('#RotatbtnL').css("opacity","1");$('#img01').addClass("rotate270");}
else{$('#img01').addClass("rotate"+angle);$('#img01').css("max-height","500px");}}}
else
{angle=angle1;}}
document.getElementById('RotatbtnL').onclick=function(){if(angle!=0)
{angle=(angle-90)%360;if(angle>-1)
{$('#img01').removeClass("rotate0");$('#img01').removeClass("rotate90");$('#img01').removeClass("rotate180");$('#img01').removeClass("rotate270");if(angle>0){$('#img01').addClass("rotate"+angle);$('#img01').css("max-height","500px");$('#RotatbtnR').css("opacity","1");}
else{$('#RotatbtnL').css("opacity","0.5");$('#RotatbtnR').css("opacity","1");}}}}
$(document).on('click','#colseLightbox',function(e){$('#img01').removeClass("rotate0");$('#img01').removeClass("rotate90");$('#img01').removeClass("rotate180");$('#img01').removeClass("rotate270");$('#img01').addClass("rotate0");$('#img01').css("height","auto");$('#my_image_zoom').hide();});$(document).on('click','#ZoomInbtn',function(e){heightimg=heightimg+100;if(heightimg<501)
{$('#img01').css("height",heightimg+"px");$('#ZoomInbtn').css("opacity","1");}
else
{heightimg=500;$('#ZoomInbtn').css("opacity","0.5");}
$('#Zoomlessbtn').css("opacity","1");});$(document).on('click','#Zoomlessbtn',function(e){heightimg=heightimg-100;if(heightimg>99)
{$('#img01').css("height",heightimg+"px");$('#Zoomlessbtn').css("opacity","1");}
else
{heightimg=100;$('#Zoomlessbtn').css("opacity","0.5");}
$('#ZoomInbtn').css("opacity","1");});$(document).on('click','.add_mcq_opt',function(e){postActive();$(this).hide();$('.mcqShow').css('display','block');$('[name="optionA"]').focus();$('#hid_post_type').val(2);});function PostModelOpen(){$('#myModalPost').modal('show');$("#post_data").focus();}
$(document).on('click','#filtD',function(e){$(this).html('DISCUSS');$('#filtD').addClass("active");$('#filtA').removeClass("active");$('#filtQ').removeClass("active");$('#hid_filt_type').val('D');$('#post_load_more_value').val(5);$('#post_load_more_value_m').val('');start_count_default();$('#top_ask_doubt_post').show();});$(document).on('click','#filtA',function(e){$(this).html('ARTICLES');$('#filtD').removeClass("active");$('#filtA').addClass("active");$('#filtQ').removeClass("active");$('#hid_filt_type').val('A');$('#post_load_more_value').val(5);$('#post_load_more_value_m').val('');start_count_default();$('#top_ask_doubt_post').hide();});$(document).on('click','#filtQ',function(e){$(this).html('QUIZZES');$('#filtD').removeClass("active");$('#filtA').removeClass("active");$('#filtQ').addClass("active");$('#hid_filt_type').val('Q');$('#post_load_more_value').val(5);$('#post_load_more_value_m').val('');start_count_default();$('#top_ask_doubt_post').hide();});function postActive(){$('#TopLoaderDiv').css('display','block');$('#TopLoaderDiv img').hide();$('#top_ask_doubt_post').css('z-index','1041');$('#top_ask_doubt_post').css('position','relative');$('.postClose').css('display','block');$('.myshadow').css('box-shadow','none');}
$(document).on('keyup','.textEnter',function(event){var mytxt=$(this).val();var mytxtID=this.id;$('#'+mytxtID).css('overflow','hidden');var scrotexthight=$('#'+mytxtID).prop('scrollHeight');$('#'+mytxtID).css('height',(1+scrotexthight)+"px");if(BothAdm!=1){var mainstr=mytxt;var mainArray=mainstr.split(' ');var check=["http","https","www"];var result;result=mainArray.filter(function(val){for(var i=0;i<check.length;i++)
if($.inArray(check[i],mainArray)!=-1)
{$('#MyErrorDiv').modal('show');$('#popupError').html("Don't Use URL in Content");return false;}
else
{if(mainstr.indexOf("http")!=-1||mainstr.indexOf("https")!=-1||mainstr.indexOf("www")!=-1)
{$('#MyErrorDiv').modal('show');$('#popupError').html("Don't Use URL in Content");return false;}}});}});$(document).on('click','.postReport',function(e){var did=$(this).attr('dataid');$("#"+did).toggleClass("show");e.stopPropagation();});$(document).on('click','.copy_link',function(e){var did=$(this).attr('datakey');var dataid=this.id;var textarea=document.getElementById("copy_url");textarea.textContent=did;var localStorage=$(window).scrollTop();copyToClipboard(document.getElementById("copy_url"));$('#'+dataid).css('color','#2ad400');$('#'+dataid).html('<i class="fa fa-link" aria-hidden="true"></i> Copy done');e.stopPropagation();});function copyToClipboard(elem){var targetId="_hiddenCopyText_";var isInput=elem.tagName==="INPUT"||elem.tagName==="TEXTAREA";var origSelectionStart,origSelectionEnd;if(isInput){target=elem;origSelectionStart=elem.selectionStart;origSelectionEnd=elem.selectionEnd;}else{target=document.getElementById(targetId);if(!target){var target=document.createElement("textarea");target.style.position="absolute";target.style.left="-9999px";target.style.top="0";target.id=targetId;document.body.appendChild(target);}
target.textContent=elem.textContent;}
var currentFocus=document.activeElement;target.focus();target.setSelectionRange(0,target.value.length);var succeed;try{succeed=document.execCommand("copy");}catch(e){succeed=false;}
if(currentFocus&&typeof currentFocus.focus==="function"){currentFocus.focus();}
if(isInput){elem.setSelectionRange(origSelectionStart,origSelectionEnd);}else{target.textContent="";}
return succeed;}
$(document).on('click','.reportPost',function(e){var dataid=$(this).attr('dataid');var datatype=$(this).attr('datatype');$('#hid_report_post').val(dataid);$('#hid_report_type').val(datatype);$("#report_post_form textarea.form-control").val(' ');$('#repMsg').html('');});$(document).on('submit','#report_post_form',function(e){$("#report_post_form .btn-success").css('visibility','hidden');$.ajax({url:frontend_url+"post-report-upload",type:"POST",data:new FormData(this),contentType:false,cache:false,processData:false,success:function(data)
{if(data==1)
{$('#repMsg').html('<div class="alert alert-success"><strong>Success!</strong> Thanks for your valuable Feedback. </div>');var myVar=setInterval(function(){$('#ReportPostModal').modal('hide')
clearTimeout(myVar);},2000);$("#report_post_form textarea.form-control").val(' ');}
else
{$('#repMsg').html('<div class="alert alert-danger"><strong>Error!</strong> Report Not Send.</div>');}
$("#report_post_form .btn-success").css('visibility','visible');}});return false;});$(document).on('click','.reportPostBook',function(e){var dataid=$(this).attr('dataid');var datatype=$(this).attr('datatype');var changeName=this.id;var databook=$(this).attr('databook');if(databook==1){var newdatabook=2;}
if(databook==2){var newdatabook=1;}
$.ajax({url:frontend_url+"post-report-bookmark",type:"POST",data:{dataId:dataid,dataType:datatype,dataBook:databook},success:function(data)
{if(data=='1')
{if(databook==1)
{$('#'+changeName).html('<i class="fa fa-bookmark" aria-hidden="true"></i> Unbookmark');}
if(databook==2)
{$('#'+changeName).html('<i class="fa fa-bookmark-o" aria-hidden="true"></i> bookmark');$('#DO'+dataid).hide();}
datatype=$('#'+changeName).attr('databook',newdatabook);}
e.stopPropagation();}});});$(document).on('click','.unpublishPostcls',function(e){var r=confirm("Do You Want to Unpublish this Post?");if(r==true){}else{return false;}
var datamain=$(this).attr('datamain');var datatype=$(this).attr('datatype');var dataid=$(this).attr('dataid');if((datamain!='')&&(datatype!='')&&(dataid!=''))
{$.ajax({url:frontend_url+"homef-post-status-change",data:{id:dataid,type:datatype},type:'POST',success:function(data){if(data!=''){$('#'+datamain).css('display','none');$('#'+datamain).remove();}}});}});$(document).on('click','.deletepostcls',function(e){var r=confirm("Do You Want to Delete this Post?");if(r==true){}else{return false;}
var datamain=$(this).attr('datamain');var datatype=$(this).attr('datatype');var dataid=$(this).attr('dataid');if((datamain!='')&&(datatype!='')&&(dataid!=''))
{$.ajax({url:frontend_url+"homef-post-delete",data:{id:dataid,type:datatype},type:'POST',success:function(data){if(data!=''){$('#'+datamain).css('display','none');$('#'+datamain).remove();}}});}});$(document).on('click','.trash_cls',function(){var com=$(this).attr('dataitem');var comP=$(this).attr('dataid');var comPT=$(this).attr('datatype');$('#ComHdDel').val(com);$('#ComPdDel').val(comP);$('#ComPTdDel').val(comPT);$('#confirm-deleteC').modal('show');});$(document).on('click','.cancelComDel',function(){$('#ComHdDel').val(0);$('#ComPdDel').val(0);$('#ComPTdDel').val(0);});$(document).on('click','.comDelYes',function(){var com=$('#ComHdDel').val();var comP=$('#ComPdDel').val();var comPT=$('#ComPTdDel').val();if(com!=0){$.ajax({url:frontend_url+"comment-delete",data:{com:com,comP:comP,comPT:comPT},type:'POST',success:function(data){$('#confirm-deleteC').modal('hide');$('#ComHdDel').val(0);$('#ComPdDel').val(0);$('#ComPTdDel').val(0);$('#commentFrom'+comP+'show').html(data);}});}});$(document).on('click','.editcls',function(){var com=$(this).attr('dataitem');var comP=$(this).attr('dataid');var comPT=$(this).attr('datatype');$('#ComHdDel').val(com);$('#ComPdDel').val(comP);$('#ComPTdDel').val(comPT);$('#CommentEditPop-up').modal('show');if(com!=0){$.ajax({url:frontend_url+"comment-details",data:{com:com},type:'POST',success:function(data){var da=data.split('**-**');$('#editCommentText').val(da[0]);if((da[1]!='')&&(typeof da[1]!='undefined')){$('#CommentEditImg').css('display','block');$('.comImgdel').css('display','block');$('#CommentEditImg').attr('src',da[1]);}}});}});$(document).on('click','.comEditYes',function(){var txtval=$('#editCommentText').val();if(txtval==''){return false;}
var com=$('#ComHdDel').val();var comP=$('#ComPdDel').val();var comPT=$('#ComPTdDel').val();var xform=document.getElementById('EditCommentForm');var formID=new FormData(xform);$.ajax({url:frontend_url+"post-comment-edit",processData:false,contentType:false,type:'POST',data:formID,beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();if(data!='')
{$('#CommentEditPop-up').modal('hide');$('#ComHdDel').val(0);$('#ComPdDel').val(0);$('#ComPTdDel').val(0);$('#commentFrom'+comP+'show').html(data);}}});});$(document).on('click','.comImgdel',function(){var km=$(this).attr('datakey');$('#'+km).css('display','none');$('#ComPIdDel').val(1);$(this).css('display','none');});$(document).on('click','.blockusercls',function(e){var r=confirm("Do You Want to Block this User?");if(r==true){}else{return false;}
var datamain=$(this).attr('datamain');var datatype=$(this).attr('datatype');var dataid=$(this).attr('dataid');if((datamain!='')&&(datatype!='')&&(dataid!=''))
{$.ajax({url:frontend_url+"homef-post-user-block",data:{id:dataid,type:datatype},type:'POST',success:function(data){var at=data.split('**-**');if(at[0]==1){$('#'+datamain).css('display','none');$('#'+datamain).remove();$('#MyErrorDiv').modal('show');$('#popupError').html(at[1]+'('+at[2]+') Bloked for WifiStudy!');}
else{$('#MyErrorDiv').modal('show');$('#popupError').html('Something went wrong!');}}});}});