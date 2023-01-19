<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    
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
        //    $intent=$stripe->subscriptions->create([
        //     'customer' => 'cus_N6vHru3GeVCyA4', //YOU CAN use $customer_id here of newly created customer
        //     'items' => [
        //       ['price' => 'price_1MMKfZIBnJVnbiVxyixbNQ2G'],
        //     ],
        //   ]);
        //   echo "<pre>";
        //  // print_r($intent);
        //   echo "</pre>";
        //   if($intent->status=='active')
        //   {
        //     echo "You have successfully subscribed for monthly package";
        //   }
        //   else
        //   {
        //     echo "Problem while subscribing";
        //   }
        echo "in subscription controller";
    }
    
}


