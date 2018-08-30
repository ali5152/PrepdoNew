<?php
  $status      =$_POST["status"];
  $firstname   =$_POST["firstname"];
  $amount      =$_POST["amount"];
  $txnid       =$_POST["txnid"];
  $posted_hash =$_POST["hash"];
  $key         =$_POST["key"];
  $productinfo =$_POST["productinfo"];
  $email       =$_POST["email"];
  $salt        ="eCwWELxi";
  


  If (isset($_POST["additionalCharges"])) {
    $additionalCharges =$_POST["additionalCharges"];
    $retHashSeq        = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
          
  } else {
    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  }

  $hash = hash("sha512", $retHashSeq);
  if ($hash != $posted_hash) {
    echo "Invalid Transaction. Please try again";

  } else {
    
    $query = DB::table('payu_payments')->where('txnid',$_POST["txnid"])->first();
    if($query)
    {

    }
    else
    {

    DB::table('payu_payments')->insert([
    ['payable_id' => Auth::id(),'date' => date('Y-m-d'),'coursse_id' => $courseID[2],'status' => 1,'txnid' => $_POST["txnid"], 'amount' => $_POST["amount"]],
    ]);
    
    $courseID = explode('-',$productinfo);
    $user = DB::table('users')->where('id',Auth::id())->first();
    DB::table('users')
            ->where('id', Auth::id())
            ->update(['allowed_exams' => $user->allowed_exams.','.$courseID[2]]);
    }



    echo "<h3>Thank You. Your order status is ". $status .".</h3>";
    echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
    echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
  }         
?>	

<a href="{{ url('/') }}"><button class="btn btn-block">Return to PrepScale</button></a>