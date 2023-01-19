<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    { 
    try{
        $name = $request->input('name');
        // Enter Your Stripe Secret
      \Stripe\Stripe::setApiKey('sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK');

        $amount = 100;
        $amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'EUR',
			'description' => 'Payment From All About Laravel',
            //'payment_method_types' => ['payment'],
             'payment_method_types' => ['card'],
             //'payment_method_types' => ['giropay'],
			// 'payment_method_types' => ['card'],
            // 'payment_method_types' => ['card,ideal'],
            //'automatic_payment_methods'=>'enabled',
            'receipt_email'=>'yasir.arfatse@gmail.com',           
            
		]);
    }
    catch(\Exception $e)
    {return $e->getMessage();}
		$intent = $payment_intent->client_secret;
        $cust_id = $payment_intent->id; 
    
        $public_key='sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK';
        //This is example to update once paymentIntent is created.
        // $stripe = new \Stripe\StripeClient(
        //     $public_key
        //   );
        //   try
        //   {
        //     $update=$stripe->paymentIntents->update(
        //         $cust_id,
        //         ['metadata' => ['order_id' => '6735'],
        //         'amount' =>400,
        //         'currency'=>'USD'
        //         ]
        //     );
        // }
        // catch(\Exception $e)
        // {return $e->getMessage();}
        //print_r($intent);
		//return view('checkout.credit-card',compact('intent'));
        //$intent='baboooo';
        //This is example to confirm the payment Intent
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
    // public function updateintent($secret)
    // { echo "updateintent function";
    //     $public_key='sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK';
        
    //     $stripe = new \Stripe\StripeClient(
    //         $public_key
    //       );
    //       try
    //       {
    //         $update=$stripe->paymentIntents->update(
    //             $secret,
    //             ['metadata' => ['order_id' => '6735'],
    //             'amount' =>$amount
    //             ]
    //         );
    //     }
    //     catch(\Exception $e)
    //     {return $e->getMessage();}
    // }

    public function subscription()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK'
          );
         //You can crete payment method and then attach to to newly creted customer 
        //   $payment_method=$stripe->paymentMethods->create([
        //     'type' => 'card',
        //     'card' => [
        //       'number' => '4242424242424242',
        //       'exp_month' => 8,
        //       'exp_year'  => 2024,
        //       'cvc' => '314',
        //     ],
        //   ]);
        //   $customer=$stripe->customers->create([
        //     'name'=> 'Yasir_customer4',
        //     'balance'=>10,
        //     'description' => 'My First Test Customer (created for API docs at https://www.stripe.com/docs/api)',
        //     'payment_method'=>$payment_method->id,  //you can also directly attach payment from stripe dashboard
        //   ]);
        //  echo $customer_id=$customer->id;
           $intent=$stripe->subscriptions->create([
            'customer' => 'cus_N6vHru3GeVCyA4', //YOU CAN use $customer_id here of newly created customer
            'items' => [
              ['price' => 'price_1MMKfZIBnJVnbiVxyixbNQ2G'],
            ],
          ]);
          echo "<pre>";
         // print_r($intent);
          echo "</pre>";
          if($intent->status=='active')
          {
            echo "You have successfully subscribed for monthly package";
          }
          else
          {
            echo "Problem while subscribing";
          }
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
        // //$public_key = $request->input('paybtn'); 'sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK'
        // $public_key='sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK';
        // print_r($public_key);
        // $stripe = new \Stripe\StripeClient(
        //     $public_key
        //   );
        //   try
        //   {
        //     $update=$stripe->paymentIntents->update(
        //         $secret,
        //         ['metadata' => ['order_id' => '6735'],
        //         'amount' =>$amount
        //         ]
        //     );
        // }
        // catch(\Exception $e)
        // {return $e->getMessage();}
        // print_r($update);
        return view('success');
    }

}


