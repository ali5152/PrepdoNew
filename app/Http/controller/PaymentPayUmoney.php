<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentPayUmoney extends Controller
{
    //
    public function SubscribProcess($ID == null)
    {
        
        
    }

    public function Response(Request $request)
    {
        dd('Payment Successfully done!');
    }
    public function SubscribeCancel()
    {
        dd('Payment Cancel!');
    }


}
