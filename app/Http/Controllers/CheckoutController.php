<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    { echo "in checkout function";  
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK');

        $amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'AED',
			'description' => 'Payment From All About Laravel',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;
        print_r($intent);
		//return view('checkout.credit-card',compact('intent'));
        //$intent='baboooo';
        return view('checkout',compact('intent'));

    }

    public function checkout4()
    { echo "in checkout function";  
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK');

        $amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'AED',
			'description' => 'Payment From All About Laravel',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;
        print_r($intent);
		//return view('checkout.credit-card',compact('intent'));
        //$intent='baboooo';
        return view('checkout4',compact('intent'));

    }


    public function afterPayment()
    {
        echo 'Payment Received, Thanks you for using our services.';
    }
}


