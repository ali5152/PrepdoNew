$(document).on('click','#pre_subject li a',function(){var catid=$(this).attr('id');var exam=$(this).data('bind');if(catid=='ots-ssc'||catid=='ots-banking'||catid=='ots-cds'||catid=='ots-afcat'||catid=='ots-capf'){show_ots(catid,exam);}else if(catid=='live-ssc'||catid=='live-banking'||catid=='live-cds'||catid=='live-afcat'){show_live_class(catid,exam);}else if(catid=='pre-ssc'||catid=='pre-banking'||catid=='pre-cds'||catid=='pre-afcat'){$("#topic_area").hide();$("#pre_subject li").removeClass('active_pre');$("#preparation-sub").addClass('active_pre');$("#preparation").show();$('#topic_area').html('');$('#topic_details_area').html('');}else if(catid=='doubt-ssc'||catid=='doubt-banking'||catid=='doubt-cds'||catid=='doubt-afcat'){}else if(catid=='downloads-ssc'||catid=='downloads-banking'||catid=='downloads-cds'||catid=='downloads-afcat'){}else{show_topics(catid,exam);}});$(document).on('click','h2 > a',function(){var catid=$(this).attr('id');var exam=$(this).data('bind');show_topics(catid,exam);});$(document).on("click","#menutop li a",function(){var tabid=this.id;var topic_slug=$("#topic_slug").val();var topic_url=$("#topic_url_"+topic_slug).val();var type=$("#"+tabid).attr("data-type");var pkgId=$("#packageid").val();if($('#'+type).is(':empty')){get_topic_details(type,topic_slug,topic_url,segment2,pkgId);}else{return false;}});$(document).on("click","#video_pop",function(){$("#pop_pack_head").text('This Video is locked');$("#pop_pack_text").text('Upgrade Now to Unlock Videos + Other Features');});$(document).on("click","#test_pop",function(){$("#pop_pack_head").text('This Test is locked');$("#pop_pack_text").text('Upgrade Now to Unlock Tests + Other Features');});$(document).on("click","#concept_pop",function(){$("#pop_pack_head").text('This Concept is locked');$("#pop_pack_text").text('Upgrade Now to Unlock Concept + Other Features');});function show_topics(catid,exam)
{var catid=catid;var exam=exam;$.ajax({url:frontend_url+'get-preparation-topic?url='+exam,data:{exam:exam,catid:catid},type:'POST',beforeSend:function(){NProgress.start();},success:function(data){if(data!==0){$("#preparation").hide();NProgress.done();$('#topic_area').html('');$("#topic_area").show();$("#right_add").show();$("#topic_details_area").hide();$("#preparation-sub").addClass('active_pre');$('#topic_area').html(data);}else{window.location.href=frontend_url+'404';}}});}
function get_topic_details(type,slug,url,examSlug,pkgId)
{var type=type;var slug=slug;var url=url;var examSlug=examSlug;$.ajax({url:frontend_url+'get-preparation-topic-details',data:{type:type,slug:slug,xm_slug:examSlug,setUrl:url,pkgid:pkgId},dataType:'json',type:'POST',beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$("#"+type).html('');$("#topic_area").hide();$("#right_add").hide();$("#preparation").hide();$("#"+type).removeClass('tab-pane fade');$("#"+type).addClass('tab-pane fade in active');$("#topic_details_area").show();if(data['topic-name']!=='')
{$("#topic_h").html('');$("#topic_h").append(data['topic-name']);$("#topic_slug").val(data['topic-slug']);}
if(data['topic-data']!=='')
{$("#"+type).append(data['topic-data']);}else{if(type=='video')
{$("#"+type).html('<ol class="col-lg-12">Coming Soon!</ol>');}else{$("#"+type).html('Coming Soon!');}}}});}
function GoBack(){$.ajax({url:frontend_url+'goback',type:'GET',success:function(data){window.location.href=data;}});}
function show_ots(catid,exam)
{$("#pre_subject li").removeClass('active_pre');$("#group-"+catid).addClass('active_pre');var pkgId=$("#packageid").val();var catid=catid;var exam=exam;$.ajax({url:frontend_url+'get-paid-ots',data:{exam:exam,catid:catid,pkgId:pkgId},type:'POST',beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$("#preparation").hide();$("#topic_details_area").hide();$("#topic_area").show();if(data!==0){$("#topic_area").html(data);}else{$("#topic_area").html('Coming Soon!');}}});}
function show_live_class(catid,exam)
{$("#pre_subject li").removeClass('active_pre');$("#group-"+catid).addClass('active_pre');var catid=catid;var exam=exam;$.ajax({url:frontend_url+'get-live-class',data:{exam:exam,catid:catid},type:'POST',beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$("#preparation").hide();$("#topic_details_area").hide();$("#topic_area").show();if(data!==0){$("#topic_area").html(data);}else{$("#topic_area").html('Coming Soon!');}}});}