@extends('layouts.main')
@push('title')
    Checkout
@endpush
@section('main-section')
<!--main container -->
<style>
 @media screen and (min-width: 0px) and (max-width: 400px) {
  #buybtn{ display: none; }  /* show it on smaller screen */
}
@media screen and (min-width: 401px) and (max-width: 1024px) {
  #buybtn{ display: block; }   /* hide it on larger screens */
} 
fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: var(--font-size-h1);
  line-height: 1.2;
  margin-block: 0 1.5em;
}

h2 {
  font-size: var(--font-size-h2);
  line-height: 1.2;
  margin-block: 0 0.5em;
}

legend {
  font-weight: 600;
  margin-block-end: 0.5em;
  padding: 0;
}

input {
  border: 0;
  color: inherit;
  font: inherit;
}

input[type="radio"] {
  accent-color: var(--color-primary);
}

table {
  border-collapse: collapse;
  inline-size: 100%;
}

tbody {
  color: #b4b4b4;
}

td {
  padding-block: 0.125em;
}

tfoot {
  border-top: 1px solid #b4b4b4;
  font-weight: 600;
}

.align {
  display: grid;
  place-items: center;
}

.button {
  align-items: center;
  background-color: var(--color-primary);
  border-radius: 999em;
  color: #fff;
  display: flex;
  gap: 0.5em;
  justify-content: center;
  padding-block: 0.75em;
  padding-inline: 1em;
  transition: 0.3s;
}

.button:focus,
.button:hover {
  background-color: #e96363;
}

.button--full {
  inline-size: 100%;
}

.card {
  border-radius: 1em;
  background-color: var(--color-primary);
  color: #fff;
  padding: 1em;
}

.form {
  display: grid;
  gap: 2em;
}

.form__radios {
  display: grid;
  gap: 1em;
}

.form__radio {
  align-items: center;
  background-color: #fefdfe;
  border-radius: 1em;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  display: flex;
  padding: 1em;
}

.form__radio label {
  align-items: center;
  display: flex;
  flex: 1;
  gap: 1em;
}

.header {
  display: flex;
  justify-content: center;
  padding-block: 0.5em;
  padding-inline: 1em;
}

.icon {
  block-size: 1em;
  display: inline-block;
  fill: currentColor;
  inline-size: 1em;
  vertical-align: middle;
}

</style>
<div id="siteWrapper" class=" main-container p-5 bg-white w-full">
        <div class="mobile-navbar-top mb-5 lg:hidden">
            <div class="container mx-auto px-5 lg:px-0 flex items-center justify-between">
                    <button id="burgerButton" class="burger text-gray-700 rounded-lg bg-gray-100 hover:bg-gray-200 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                    </button>
                    <div class="logo uppercase">panton</div>
                        <button id="searchButton"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                        </button>
                    </div>
            </div>
           
            <div class="container mx-auto lg:px-10 " >
              <form action="{{route('checkout.credit-card')}}"  method="post" id="payment-form">
                <div class="lg:px-10  flex item-center flex-col lg:flex-row p-5 lg:p-10 border border-blue-200 rounded" >
                <div class="order-2 lg:order-1 left w-full lg:w-1/2 px-5">
                  <fieldset>
                   <!-- start of code from stripe-->
                  @csrf                    
                  <div class="form-group">
                      <div class="card-header">
                          
                      </div>
                      <div class="card-body">
                          
                          <div id="card-number">
                            <!-- A Stripe Element will be inserted here. -->
                          </div>
                          <div id="card-cardExpiry">
                            <!-- A Stripe Element will be inserted here. -->
                          </div>
                          <div id="card-cardCvc">
                            <!-- A Stripe Element will be inserted here. -->
                          </div>
                          <!-- Used to display form errors. -->
                          
                      </div>
                  </div>
                 
                <!-- end of code from stripe-->
 
                  </fieldset>
                  <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter your card detail</label>
                    <div id="card-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <div id="card-errors" role="alert"></div>
                          <input type="hidden" name="plan" value="" />
                   </div>
                   {{-- <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter your card detail</label>
                    <div id="payment-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <div id="card-errors" role="alert"></div>
                          <input type="hidden" name="plan" value="" />
                   </div> --}}
                <div class="mb-6">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                  <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required="">
                </div>
                <div class="mb-6">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                  <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div class="flex items-start mb-6">
                  <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                  </div>
                  <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                </div>
                <div class="mb-6">
                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Delivery Address</label>
                  <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your address for delivery..."></textarea>
                </div>
                <div class="buy1 ">
                  <input hidden  type="text" name="secret_id" value="{{ $cust_id }}">
                  <input hidden  type="text" name="paybtn" value="{{ $intent }}">
                  <button id="card-button" type="submit" data-secret="{{ $intent }}" name="paybtn" class=" text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm   px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buy</button>
                </div>
                </div>
              <div class="order-1 lg:order-2 right w-full lg:w-1/2 px-5">
                <ul role="list" class="cart-item-list -my-6 divide-y divide-gray-200">
                  <li id="cartitemnumber-0" class="cartitemnumber-0 flex py-6">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img id="imagincart" src="{{asset("")}}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a id="nameitemcart" href="#">name of item</a>
                          </h3>
                          <p id="priceitemcart"  class="ml-4">price</p>
                        </div>
                        <p id="detailitemcart" class="mt-1 text-sm text-gray-500">nike shoes detail

                          womenrunner</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p id="quantityitemcart" class="text-gray-500">quantity</p>

                        <div class="flex">
                          <button id="removeitemcart1" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                        
                      </div>
                    </div>
                  </li>
                  <li id="cartitemnumber-0" class="cartitemnumber-0 flex py-6">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img id="imagincart" src="{{asset("")}}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a id="nameitemcart"href="#">name of item</a>
                          </h3>
                          <p id="priceitemcart" class="ml-4">price</p>
                        </div>
                        <p id="detailitemcart" class="mt-1 text-sm text-gray-500">nike shoes detail

                          womenrunner</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p id="quantityitemcart" class="text-gray-500">quantity</p>

                        <div class="flex">
                          <button id="removeitemcart" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                        
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                  <div class="flex justify-between text-base font-medium text-gray-900">
                    <p>Subtotal</p>
                    <p id="cart-price-total">$00.00</p>
                  </div>
                  <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                </div>
                {{-- <button type="submit" class="visible sm:hidden text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm   px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buy Now</button>
                  --}}               
                
                {{-- @include('layouts.cart-visible') --}}
              </div>
            </div>
            </form>
            <script src="https://js.stripe.com/v3/"></script>
            <script>
              var style = {
                             base: {
                                 color: '#32325d',
                                 lineHeight: '30px',
                                 fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                 fontSmoothing: 'antialiased',
                                 fontSize: '16px',
                                 '::placeholder': {
                                     color: '#aab7c4'
                                 }
                             },
                             invalid: {
                                 color: '#fa755a',
                                 iconColor: '#fa755a'
                             }
                         };
                         
                        const stripe = Stripe('pk_test_51LYYEIIBnJVnbiVxnjCoS0zFLgYsTaV6J12HjM0fufWUxMjOtvNtWXkV4SftpiD2abWWcFXnlqowF6D01m1npuDA00LgqpHJPg', { locale: 'en' }); // Create a Stripe client.sk_test_51LYYEIIBnJVnbiVxXXHE1HgLakPATdcQUA1RlH4O459iwpV00Qbn5OLcy5NI4gM4kOG6YKAzg3aeqTMIdGniP64K00Flpkr3rK
                         const elements = stripe.elements(); // Create an instance of Elements.
                         const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
                         //var paymentElement = elements.create('payment');
                         /* var cardNumberElement = elements.create('cardNumber', { style: style });
                         var cardExpiryElement = elements.create('cardExpiry', { style: style });
                         var cardCvcElement = elements.create('cardCvc', ); */
                         const cardButton = document.getElementById('card-button');
                         const clientSecret = cardButton.dataset.secret;
                         
                         cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
                         //paymentElement.mount('#payment-element'); // Add an instance of the card Element into the `card-element` <div>.
                          
                          /*cardNumberElement.mount('#card-number');//testing
                          cardExpiryElement.mount('#card-cardExpiry');//testing
                          cardCvcElement.mount('#card-cardCvc');//testing */
                         
                         // Handle real-time validation errors from the card Element.
                        cardElement.addEventListener('change', function(event) {
                             var displayError = document.getElementById('card-errors');
                             if (event.error) {
                                 displayError.textContent = event.error.message;
                             } else {
                                 displayError.textContent = '';
                             }
                         }); 
                         
                         // Handle form submission.
                         var form = document.getElementById('payment-form');
                         
                         form.addEventListener('submit', function(event) {
                             event.preventDefault();
                             console.log("In function form.addeventlistener");
                             stripe.handleCardPayment(clientSecret, cardElement, {
                                 payment_method_data: {
                                    // billing_details: { name: cardHolderName.value }
                                     billing_details: { name: 'arfat' }
                                 }
                             })
                             .then(function(result) {
                                 console.log(result);
                                 if (result.error) {
                                     // Inform the user if there was an error.
                                     var errorElement = document.getElementById('card-errors');
                                     errorElement.textContent = result.error.message;
                                 } else {
                                     console.log(result);
                                     //alert("Payment successfully done");
                                     form.submit();
                                 }
                             });
                         });
                   
               </script> 
            </div>
  @endsection