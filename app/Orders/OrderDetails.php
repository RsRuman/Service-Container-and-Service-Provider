<?php

namespace App\Orders;

use App\Billing\PaymentGatewayInterface;

class OrderDetails
{
    private PaymentGatewayInterface $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all(){
        $this->paymentGateway->setDiscount(500);
        return [
            'name' => 'Naruto Uzumaki',
            'address' => 'Hidden leaf village'
        ];
    }
}
