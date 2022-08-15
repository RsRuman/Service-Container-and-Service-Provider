<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayInterface;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request, PaymentGatewayInterface $paymentGateway, OrderDetails $orderDetails){
        $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
