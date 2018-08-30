$(document).on('click','#exam_pre_menu li a',function(event){showExamPost(event);});function showExamPost(e){if(e.target.id==='')
return false;$.ajax({url:frontend_url+e.target.id,data:{type:'ajax'},type:'POST',beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();if(e.target.id=='ssc'||e.target.id=='banking')
{$("#main_tp_exam").html(e.target.id+' <span class="glyphicon glyphicon-menu-down arrow_menu"></span>');}
$('.page_content_top').html(data);window.history.pushState("object or string","Title",frontend_url+e.target.id);}});}
function viewDetails(id){if(id==='')
return false;$.ajax({url:frontend_url+'view-package-details',data:{pakid:id},type:'POST',beforeSend:function(){NProgress.start();},success:function(data){NProgress.done();$(".test-list_new").html(data);}});}