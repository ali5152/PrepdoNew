$(function(){$(document).on('click','.purchasepkg_class',function(){var Getid=$(this).attr('data-id');AddtoCart(Getid);});$(document).on('click','.deletefromcart',function(){deletefromcart(this);});$(document).on('click','#checkofcoupan',function(){addhtmlforcoupan(this);});$(document).on('click','#apply_coupan',function(){submitcoupancode('');});checkifalreadyapplied();});function addhtmlforcoupan(element){if($(element).is(':checked')==true){var htmlsa='<div class="promo_code_in"><input name="" value="" class="promo_apply" placeholder="Enter Promo Code" type="text"> <button type="submit" id="apply_coupan" value="Apply">Apply</button> <div class="error"></div></div>';$('.apply_code_outer').html(htmlsa);}else{$('.apply_code_outer').html('');}}
function checkifalreadyapplied(){$.ajax({url:frontend_url+'getcoupon',data:{},type:'POST',success:function(data){var jsoncode=JSON.parse(data);if(jsoncode.status==0){}else{$('#checkofcoupan').attr('checked','checked');$('.apply_code_outer').html('<div class="promo_code_in"><input name="" value="'+jsoncode.coupon+'" class="promo_apply" placeholder="Enter Promo Code" type="text"> <button type="submit" id="apply_coupan" value="Apply">Apply</button> <div class="error"></div></div>');submitcoupancode('checkif');}}});}
function submitcoupancode(varsd){var promo_apply=$('.promo_apply').val();if($('#checkofcoupan').is(':checked')==false){$('#checkofcoupan').addClass('error_check');$('.error').html('<p class="errorof">Please make sure, you have coupon code</p>');}else if(promo_apply==null||promo_apply==''){$('#checkofcoupan').addClass('error_check');$('.error').html('<p class="errorof">Please enter coupon code</p>');}else{$('#checkofcoupan').removeClass('error_check');$('.error').html('');$.ajax({url:frontend_url+'change-cart-price',data:{'coupon':promo_apply,'varsd':varsd},type:'POST',success:function(data){var jsoncode=JSON.parse(data);if(jsoncode.status==0){$('#checkofcoupan').addClass('error_check');$('.error').html(jsoncode.msg);if(jsoncode.url!=''){window.location.href=frontend_url+jsoncode.url;}}else{$('#checkofcoupan').removeClass('error_check');$('.error').html('');if(jsoncode.type=='single'){var coupon_value=jsoncode.coupon.dlb_cpn_value;var last_cop=0;var finalprice='';for(var i=0;i<jsoncode.coupon.dlb_pkg_id.length;i++){if($('#pkg-'+jsoncode.coupon.dlb_pkg_id[i]).length>0){var c_price=$('#pkg-'+jsoncode.coupon.dlb_pkg_id[i]+' .price').html();var finalprice=parseInt(c_price);var x=parseFloat((finalprice*coupon_value)/100);last_cop+=x;}}
var finalval=parseFloat(last_cop);var total_pay=$('.total_pay > span').html();$('.savedammount').html("You\'ve saved &#8377; "+Math.round(last_cop));var final_total_pay=Math.round(parseFloat(total_pay)-parseFloat(last_cop));$('.total_pay > span').html(final_total_pay);$('.promo_code_in').html('<span id="alreadyapplied">Applied successfully! <button id="btn_remove_cart" class="alpha" data-dismiss="alert" aria-label="close" onclick="remove_apply()">remove</button></span>');$('#checkofcoupan').remove();$('.promo_code_in').attr('id','appleyborder');}else{var order_no=$('.order-no').length;if(parseInt(order_no)>0){var coupon_value=jsoncode.coupon.dlb_cpn_value;for(var i=0;i<=parseInt(order_no);i++){var c_price=$('.jaga_'+i+' .price').html();var finalprice=parseFloat(c_price);var last_cop=(finalprice*coupon_value)/100;}
var total_pay=$('.total_pay > span').html();var ftotal_pay=Math.round(parseFloat((parseFloat(total_pay)*coupon_value)/100));var final_total_pay=Math.round(parseFloat(total_pay)-ftotal_pay);$('.total_pay > span').html(final_total_pay);$('.savedammount').html("You\'ve saved &#8377; "+Math.round(ftotal_pay));$('.promo_code_in').html('<span id="alreadyapplied">Applied successfully! <button id="btn_remove_cart" class="alpha" data-dismiss="alert" aria-label="close" onclick="remove_apply()">Remove</button></span>');$('#checkofcoupan').remove();$('.promo_code_in').attr('id','appleyborder');}}}}});}}
function remove_apply(){$.ajax({url:frontend_url+"remove-apply",data:{},type:'POST',success:function(data){var jsoncode=JSON.parse(data);if(jsoncode.status==0){window.location.href=frontend_url+jsoncode.url;}else{for(var i=0;i<jsoncode.pkg_value.length;i++){$('#pkg-'+jsoncode.pkg_value[i][0]+' .price').html(jsoncode.pkg_value[i][1]);}
$('.total_pay > span').html(jsoncode.total);$('#checkofcoupan').prop('checked',false);$('.apply_code_outer').html('');$('.savedammount').html('');$('.coupon_code > label').html('<input class="radiofalse" value="" id="checkofcoupan"  type="checkbox"> Have a Coupon Code?');$('.promo_code_in').attr('id','');}}});}
function AddtoCart(Getid){var Getpenddrive=$('#pendrive_segment-'+Getid).length;var getpendrive='';if(parseInt(Getpenddrive)>0){var checkedornot=$('#pendrive_segment-'+Getid).is(':checked');if(checkedornot==true){getpendrive=1;}}else{var checkedornot='';}
$.ajax({url:frontend_url+"add-to-cart",data:{'q':Getid,'s':getpendrive},type:'POST',beforeSend:function(){},success:function(data){$('#spinner').html('');if(data==''||data==null){}else{var stringjson=JSON.parse(data);if(stringjson.error==1){window.location.href=stringjson.url;}}}});}
function deletefromcart(element){var pkg=$(element).attr('data-bind');var x=confirm('Are you sure, you want to delete this package from your cart');if(x==true){$.ajax({url:frontend_url+"delete-from-cart",data:{'q':pkg},type:'POST',beforeSend:function(){},success:function(data){if(data==''||data==null){}else{var stringjson=JSON.parse(data);if(stringjson.error==1){alert(stringjson.msg);return false;}else{window.location.href=stringjson.url;}}}});}}
function submit_pay(type){if(type=='1'){var fname=$('#fname').val();var email=$('#email').val();var hn=$('#hn').val();var sn=$('#sn').val();var lm=$('#lm').val();var city=$('#city').val();var zipcode=$('#zipcode').val();var state=$('#state').val();var phone=$('#phone').val();var err=0;var re=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;if(fname==''||fname==null){err=err+1;$('#fname').css('border','1px solid #ed4242');}else{$('#fname').css('border','1px solid #e0e0e0');}
if(email==''||email==null){err=err+1;$('#email').css('border','1px solid #ed4242');}else{if(re.test(email)==true){$('#email').css('border','1px solid #e0e0e0');}else{$('#hn').css('border','1px solid #ed4242');err=err+1;}}
if(hn==''||hn==null){err=err+1;$('#hn').css('border','1px solid #ed4242');}else{$('#hn').css('border','1px solid #e0e0e0');}
if(city==''||city==null){err=err+1;$('#city').css('border','1px solid #ed4242');}else{$('#city').css('border','1px solid #e0e0e0');}
if(zipcode==''||zipcode==null){err=err+1;$('#zipcode').css('border','1px solid #ed4242');}else{if(parseInt(zipcode)==parseInt(zipcode,10)&&zipcode.length==6){err=err+0;$('#zipcode').css('border','1px solid #e0e0e0');}else{err=err+1;$('#zipcode').css('border','1px solid #ed4242');}}
if(state==''||state==null){err=err+1;$('#state').css('border','1px solid #ed4242');}else{$('#state').css('border','1px solid #e0e0e0');}
if(phone==''||phone==null){err=err+1;$('#phone').css('border','1px solid #ed4242');}else{if(parseInt(phone)==parseInt(phone,10)&&phone.length==10){err=err+0;$('#phone').css('border','1px solid #e0e0e0');}else{err=err+1;$('#phone').css('border','1px solid #ed4242');}}
if(err=='0'){$.ajax({url:frontend_url+'payment-sessionforadd',type:'POST',data:{'fname':fname,'email':email,'hn':hn,'sn':sn,'lm':lm,'city':city,'zipcode':zipcode,'state':state,'phone':phone},success:function(data){return true;}});}else{return err;}}else{return '0';}}
function submit_pay_tm(id,catid){if(catid==1){var fname=$('#fname').val();var email=$('#email').val();var hn=$('#hn').val();var sn=$('#sn').val();var lm=$('#lm').val();var city=$('#city').val();var zipcode=$('#zipcode').val();var state=$('#state').val();var phone=$('#phone').val();var err=0;var re=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;if(fname==''||fname==null){err=err+1;$('#fname').css('border','1px solid #ed4242');}else{$('#fname').css('border','1px solid #e0e0e0');}
if(email==''||email==null){err=err+1;$('#email').css('border','1px solid #ed4242');}else{if(re.test(email)==true){$('#email').css('border','1px solid #e0e0e0');}else{$('#hn').css('border','1px solid #ed4242');err=err+1;}}
if(hn==''||hn==null){err=err+1;$('#hn').css('border','1px solid #ed4242');}else{$('#hn').css('border','1px solid #e0e0e0');}
if(city==''||city==null){err=err+1;$('#city').css('border','1px solid #ed4242');}else{$('#city').css('border','1px solid #e0e0e0');}
if(zipcode==''||zipcode==null){err=err+1;$('#zipcode').css('border','1px solid #ed4242');}else{if(parseInt(zipcode)==parseInt(zipcode,10)&&zipcode.length==6){err=err+0;$('#zipcode').css('border','1px solid #e0e0e0');}else{err=err+1;$('#zipcode').css('border','1px solid #ed4242');}}
if(state==''||state==null){err=err+1;$('#state').css('border','1px solid #ed4242');}else{$('#state').css('border','1px solid #e0e0e0');}
if(phone==''||phone==null){err=err+1;$('#phone').css('border','1px solid #ed4242');}else{if(parseInt(phone)==parseInt(phone,10)&&phone.length==10){err=err+0;$('#phone').css('border','1px solid #e0e0e0');}else{err=err+1;$('#phone').css('border','1px solid #ed4242');}}
if(err==0){$.ajax({url:frontend_url+'payment-sessionforadd',type:'POST',data:{fname:fname,email:email,hn:hn,sn:sn,lm:lm,city:city,zipcode:zipcode,state:state,phone:phone},success:function(data){$('#formaddrssid').attr('action',frontend_url+'paytmkit/pgredirect');$('.tabactive_now').removeClass('tabactive_now');$('#'+id).addClass('tabactive_now');$('.payment_allcard_details').hide();$('#formaddrssid').submit();}});}else{return false;}}else{$('#formaddrssid').attr('action',frontend_url+'paytmkit/pgredirect');$('.tabactive_now').removeClass('tabactive_now');$('#'+id).addClass('tabactive_now');$('.payment_allcard_details').hide();$('#formaddrssid').submit();}}
function showDetailsWallet(id,catid){submit_pay_tm(id,catid);}
function showDetails(id){if(id=='wallet')
{$('#formaddrssid').attr('action',frontend_url+'paytmkit/pgredirect');}else if(id=='net_banking_detail')
{$('#pg').val('NB');$('#formaddrssid').attr('action',frontend_url+'pay');}else if(id=='credit_card')
{$('#pg').val('CC');$('#formaddrssid').attr('action',frontend_url+'pay');}
else if(id=='debit_card')
{$('#pg').val('DC');$('#formaddrssid').attr('action',frontend_url+'pay');}
$('.tabactive_now').removeClass('tabactive_now');$('#'+id).addClass('tabactive_now');$('.payment_allcard_details').hide();$('.'+id).show();}
function checkCaseCard(){var bankname=$('#casecardval').val();if(bankname=='')
{$('#casecardval').css('border-color','red');return false;}else
{$('#casecardval').css('border-color','#ccc');$('#bankcode').val(bankname);return true;}}
function checkWallet(){var walletname=$('#walletval').val();if(walletname=='')
{$('#walletval').css('border-color','red');return false;}else
{$('#walletval').css('border-color','#ccc');return true;}}
function checkMobileNumber(){var mobileno=$('#phoneadd').val().trim();if(mobileno==''){$('#phoneadd').css('border-color','red');return false;}
else if(mobileno.length<10||mobileno.length>10){$('#phoneadd').css('border-color','red');return false;}else
return true;}
function checkNetBanking(type)
{var bankname=$('#bankname').val();var str=0;if(bankname=='')
{$('#bankname').css('border-color','red');return false;}
else{$('#bankname').css('border-color','#ccc');$('#bankcode').val(bankname);$('#cccat').val('cashcard');$('#bankget').val('CASH');if(type=='1'){var submitaddr=submit_pay(type);if(submitaddr>0){return false;}else{window.location.href=frontend_url+'pay';}}else{window.location.href=frontend_url+'pay';}}}
function checkDebitCardNumber(type)
{var bankcode=$('#bankcoded').val();var ccnum=$('#ccnumd').val();var ccexpmon=$('#ccexpmond').val();var ccexpyr=$('#ccexpyrd').val();var ccvv=$('#ccvvd').val();var ccname=$('#ccnamed').val();var str=0;if(bankcode=='')
{$('#bankcoded').css('border-color','red');str=str+1;}else
$('#bankcoded').css('border-color','#ccc');if(ccnum=='')
{$('#ccnumd').css('border-color','red');str=str+1;}else if(ccnum.length<12)
{$('#ccnumd').css('border-color','red');str=str+1;}else
$('#ccnumd').css('border-color','#ccc');if(ccexpmon=='')
{$('#ccexpmond').css('border-color','red');str=str+1;}else
$('#ccexpmond').css('border-color','#ccc');if(ccexpyr=='')
{$('#ccexpyrd').css('border-color','red');str=str+1;}else if(ccexpyr==$('#c_year').val().trim()){if(ccexpmon<$('#c_month').val().trim()){$('#ccexpyrd').css('border-color','red');str=str+1;}}else
$('#ccexpyrd').css('border-color','#ccc');if(ccvv=='')
{$('#ccvvd').css('border-color','red');str=str+1;}else if(ccvv.length<3)
{$('#ccvvd').css('border-color','red');str=str+1;}else
$('#ccvvd').css('border-color','#ccc');if(ccname=='')
{$('#ccnamed').css('border-color','red');str=str+1;}else
$('#ccnamed').css('border-color','#ccc');if(str>0)
{return false;}
else{$('#bankcode').val(bankcode);$('#ccnum').val(ccnum);$('#ccexpmon').val(ccexpmon);$('#ccexpyr').val(ccexpyr);$('#ccvv').val(ccvv);$('#ccname').val(ccname);if(type=='1'){var submitaddr=submit_pay(type);if(submitaddr>0){return false;}else{window.location.href=frontend_url+'pay';}}else{window.location.href=frontend_url+'pay';}}}
function checkCreditCardNumber(type)
{var bankcode=$('#bankcodec').val();var ccnum=$('#ccnumc').val();var ccexpmon=$('#ccexpmonc').val();var ccexpyr=$('#ccexpyrc').val();var ccvv=$('#ccvvc').val();var ccname=$('#ccnamec').val();var str=0;if(bankcode=='')
{$('#bankcodec').css('border-color','red');str=str+1;}else
$('#bankcodec').css('border-color','#ccc');if(ccnum=='')
{$('#ccnumc').css('border-color','red');str=str+1;}else if(ccnum.length<12)
{$('#ccnumc').css('border-color','red');str=str+1;}else
$('#ccnumc').css('border-color','#ccc');if(ccexpmon=='')
{$('#ccexpmonc').css('border-color','red');str=str+1;}else
$('#ccexpmonc').css('border-color','#ccc');if(ccexpyr=='')
{$('#ccexpyrc').css('border-color','red');str=str+1;}else if(ccexpyr==$('#c_year').val().trim()){if(ccexpmon<$('#c_month').val().trim()){$('#ccexpyrc').css('border-color','red');str=str+1;}}else
$('#ccexpyrc').css('border-color','#ccc');if(ccvv=='')
{$('#ccvvc').css('border-color','red');str=str+1;}else if(ccvv.length<3)
{$('#ccvvc').css('border-color','red');str=str+1;}else
$('#ccvvc').css('border-color','#ccc');if(ccname=='')
{$('#ccnamec').css('border-color','red');str=str+1;}else{$('#ccnamec').css('border-color','#ccc');}
if(str>0)
{return false;}
else{$('#bankcode').val(bankcode);$('#ccnum').val(ccnum);$('#ccexpmon').val(ccexpmon);$('#ccexpyr').val(ccexpyr);$('#ccvv').val(ccvv);$('#ccname').val(ccname);if(type=='1'){var submitaddr=submit_pay(type);if(submitaddr>0){return false;}else{window.location.href=frontend_url+'pay';}}else{window.location.href=frontend_url+'pay';}}}
function isNumber(evt){var iKeyCode=(evt.which)?evt.which:evt.keyCode
if(iKeyCode!=46&&iKeyCode>31&&(iKeyCode<48||iKeyCode>57))
return false;return true;}
function ifcheckagain(element,id){var Getischeck=($(element).is(':checked'));if(Getischeck==true){$('#unique_id-'+id).html('<a class="btn_buynw purchasepkg_class" data-id="'+id+'" href="javascript:void(0)">Buy Now</a>');}else{$('#unique_id-'+id).html('<a class="btn_buynw" href="'+frontend_url+'ssc-preparation?package-details='+id+'">Start Now</a>');}}
function ifcheckagainsub(element,id,url){var Getischeck=($(element).is(':checked'));if(Getischeck==true){$('#unique_id-'+id).html('<a class="btn_buynw purchasepkg_class" data-id="'+id+'" href="javascript:void(0)">Buy Now</a>');}else{$('#unique_id-'+id).html('<a class="btn_buynw" href="'+url+'">Start Now</a>');}}