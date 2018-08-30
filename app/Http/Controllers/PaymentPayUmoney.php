<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PaymentPayUmoney extends Controller
{
    //
    public function SubscribProcess($ID = null)
    {
        //dd('here');
        if($ID)
        {
          Session::put('IDPayment',$ID);
          return view('front.PayUMoney_form')->with('ID',Session::get('IDPayment'));
        }
        else
        {
         return view('front.PayUMoney_form')->with('ID',Session::get('IDPayment'));
        }
    }


    public function Response(Request $request)
    {
        dd('Payment Successfully done!');
    }
    public function SubscribeCancel()
    {
        dd('Payment Cancel!');
    }

    public function failure()
    {
       return view('front.failure');
    }

    public function success()
    {
     return view('front.success');
    }


}
