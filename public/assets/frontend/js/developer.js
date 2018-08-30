var frontend_url=frontend_url;$("#searchbox2").keyup(function(){var search=$('#searchbox2').val();if(search!='')
{$.ajax({url:frontend_url+"home-search",data:{v:search},type:'POST',success:function(data){if(data)
{$('#searchRes').css('display','block');$('#searchRes').html(data);}
else
{$('#searchRes').css('display','none');}}});}
else
{$('#searchRes').css('display','none');}});function lang_change(str){$.ajax({url:frontend_url+"ajax_lang_change",data:{v:str},type:'POST',success:function(data){window.location.reload();}});}
function LoginOpen(){$('#my_login_signup_modal').modal('show');}