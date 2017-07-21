<?php

return [
    'username' => env('ADYEN_USERNAME'),
    'password' => env('ADYEN_PASSWORD'),
    'merchantAccount' => env('ADYEN_MERCHANT_ACCOUNT'),
    'environment' => env('ADYEN_ENVIRONMENT', \Adyen\Environment::TEST),
    'skinCode' => '	ThLDlQeG',
    'hmacSignature' => env('ADYEN_HMAC_SIGNATURE'),
    'currency' => 'EUR',

    'storePayoutUsername' => 'YOUR STORE PAYOUT USERNAME',
    'storePayoutPassword' => '"YOUR STORE PAYOUT PASSWORD"',
    'reviewPayoutUsername' => 'YOUR REVIEW PAYOUT USERNAME',
    'reviewPayoutPassword' => '"YOUR REVIEW PAYOUT PASSWORD"',
];
