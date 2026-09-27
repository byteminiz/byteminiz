<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class PhonePe
{
     private $merchantId;
    private $merchantKey;
    private $callbackUrl;
    /**
     * Create a new class instance.
     */
      public function __construct()
    {
        $this->merchantId = config('phonepe.merchant_id');
        $this->merchantKey = config('phonepe.merchant_key');
        $this->callbackUrl = config('phonepe.callback_url');
    }
     public function createPaymentRequest($data)
    {
        $response = Http::post('https://api.phonepe.com/v1/merchant/order', [
            'merchant_id' => $this->merchantId,
            'merchant_key' => $this->merchantKey,
            'amount' => $data['amount'],
            'currency' => $data['currency'],
            'merchant_order_id' => $data['merchant_order_id'],
            'customer_id' => $data['customer_id'],
        ]);

        return $response->json();
    }

    public function verifyCallback($data)
    {
        $response = Http::post('https://api.phonepe.com/v1/merchant/callback', [
            'merchant_id' => $this->merchantId,
            'merchant_key' => $this->merchantKey,
            'callback_data' => $data,
        ]);

        return $response->json();
    }
}


