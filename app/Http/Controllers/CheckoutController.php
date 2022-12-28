<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    { 
    
        $name = $request->input('name');
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
            'receipt_email'=>'yasir.arfatse@gmail.com',           
            
		]);
		$intent = $payment_intent->client_secret;
        $cust_id = $payment_intent->id; 
        //print_r($intent);
		//return view('checkout.credit-card',compact('intent'));
        //$intent='baboooo';
        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK'
        //   );
        //   $stripe->paymentIntents->create([
        //     'amount' => 2000,
        //     'currency' => 'usd',
        //     'payment_method_types' => ['card'],
            
        //   ]);
        // $stripe->paymentIntents->confirm(
        //     $cust_id,
        //     ['return_url'=>'www.google.com','payment_method' => 'pm_card_visa']
        //   );
        return view('checkout',compact('intent'),compact('cust_id'));

    }

    public function testurl()
    { 
        // $myArr = array("John", "Mary", "Peter", "Sally");
        // $myJSON = json_encode($myArr);
        // echo $myJSON;
        echo "from test url function";
        try
        {
        $cURLConnection = curl_init();

       // curl_setopt($cURLConnection, CURLOPT_URL, 'https://hostname.tld/phone-list');
        curl_setopt($cURLConnection, CURLOPT_URL, 'http://yasirse.com/index3.php');
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $phoneList = curl_exec($cURLConnection);
        curl_close($cURLConnection);

         $jsonArrayResponse = json_decode($phoneList);
         echo $phoneList;
    } catch (\Exception $e) {
         return $e->getMessage();
        }
    // $response = Http::get('api.stripe.com:80');
    // echo $response;
    //error_reporting(E_ALL);
    //$response = Http::get('api.stripe.com:443');
    //    $response = Http::get('api.stripe.com', [
    //     'description' => 'Stripe Test Payment',
    //     'amount' => $amount,
    // ]);
        //echo $response;
        return view('success');
    }




    public function afterPayment(Request $request)
    {
        // $amount=500;
        // $secret = $request->input('secret_id');
        // $public_key = $request->input('paybtn');
        //print_r($public_key);
        // $stripe = new \Stripe\StripeClient(
        //     $public_key
        //   );
        // $update=$stripe->paymentIntents->update(
        //     $secret,
        //     ['metadata' => ['order_id' => '6735'],
        //      'amount' =>$amount
        //     ]
        //   );
        //print_r($update);
        return view('success');
    }

}


