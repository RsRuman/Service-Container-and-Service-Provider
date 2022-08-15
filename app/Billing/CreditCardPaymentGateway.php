<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditCardPaymentGateway implements PaymentGatewayInterface
{

    private string $currency;
    private float $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function setDiscount($amount){
        $this->discount = $amount;
    }

    public function charge($amount): array
    {
        $fee = $amount * 0.003;
        return [
            'amount' => ($amount - $this->discount) + $fee,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fee' => $fee,
            'payment_type' => 'CreditCardPayment'
        ];
    }
}
