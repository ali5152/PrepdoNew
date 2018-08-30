<br><Br><br><br>
<center><img src="{{ url('/public/images/loading.gif') }}"></center>
<?php
  /*
   *  @author   Gopal Joshi
   *  @wesite   www.sgeek.org
   *  @about    PayUMoney Payment Gateway integration in PHP
   */

	$merchant_key  = "gtKFFx";
	$salt          = "eCwWELxi";
	$payu_base_url = "https://test.payu.in"; // For Test environment
	$action        = '';
	$currentDir	   = url('/').'/';
	$posted = array();
	if(!empty($_POST)) {
	  foreach($_POST as $key => $value) {    
	    $posted[$key] = $value; 
	  }
	}

	$formError = 0;
	if(empty($posted['txnid'])) {
	  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	} else {
	  $txnid = $posted['txnid'];
	}

	$hash         = '';
	$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

	if(empty($posted['hash']) && sizeof($posted) > 0) {
	  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
	  ){
	    $formError = 1;

	  } else {
	   	$hashVarsSeq = explode('|', $hashSequence);
	    $hash_string = '';	
		foreach($hashVarsSeq as $hash_var) {
	      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
	      $hash_string .= '|';
	    }
	    $hash_string .= $salt;
	    $hash = strtolower(hash('sha512', $hash_string));
	    $action = $payu_base_url . '/_payment';
	  }
	} elseif(!empty($posted['hash'])) {
	  $hash = $posted['hash'];
	  $action = $payu_base_url . '/_payment';
	}
 //dd($ID);
  $query = DB::table('courses')->where('id',$ID)->first();
  $user = DB::table('users')->where('id',Auth::id())->first();
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">

    <br/>
    <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm" id = "MYFORM" style = "visibility: hidden;">
        @csrf
      <input type="hidden" name="key" value="<?php echo $merchant_key ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount <span class="mand">*</span>: </td>
          <td><input type="hidden" name="amount" value="{{ $query->price }}" /></td>
          <td>First Name <span class="mand">*</span>: </td>
          <td><input type="text" name="firstname" id="firstname" value="{{ $user->name }}" /></td>
        </tr>
        <tr>
          <td>Email <span class="mand">*</span>: </td>
          <td><input type="email" readonly="" name="email" id="email" value="{{ $user->email }}" /></td>
          <td>Phone <span class="mand">*</span>: </td>
          <td><input type="text" name="phone" value="919961964634" /></td>
        </tr>
        <tr>
          <td>Product Info <span class="mand">*</span>: </td>
          <td colspan="3"><textarea readonly="" name="productinfo">PrepScale Online Test Series-{{ $query->course_name }}-{{ $query->id }}</textarea></td>
        </tr>
        <tr>
          <td>Success URL <span class="mand">*</span>: </td>
          <td colspan="3"><input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? $currentDir.'success' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URL <span class="mand">*</span>: </td>
          <td colspan="3"><input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? $currentDir.'failure' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="" size="64" /></td>
        </tr>


        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>

<script type="text/javascript">
  
  document.getElementById("MYFORM").submit();


</script>
