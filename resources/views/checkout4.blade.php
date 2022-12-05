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
                  <!-- start of code from stripe-->
                  @csrf                    
                  <div class="form-group">
                      <div class="card-header">
                          <label for="card-element">
                              Enter your credit card information
                          </label>
                      </div>
                      <div class="card-body">
                          <div id="card-element">
                              <!-- A Stripe Element will be inserted here. -->
                          </div>
                          <!-- Used to display form errors. -->
                          <div id="card-errors" role="alert"></div>
                          <input type="hidden" name="plan" value="" />
                      </div>
                  </div>
                  <div class="card-footer">
                    <button
                    id="card-button"
                    class="btn btn-dark"
                    type="submit"
                    data-secret="{{ $intent }}"
                    > Pay </button>
                </div>
                <!-- end of code from stripe-->
              
                     
                 
              </div>
            </div>
           
            </form>
            <script src="https://js.stripe.com/v3/"></script>
<script>
  var style = {
                 base: {
                     color: '#32325d',
                     lineHeight: '18px',
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
             const cardButton = document.getElementById('card-button');
             const clientSecret = cardButton.dataset.secret;
             
             cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
             
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
                         form.submit();
                     }
                 });
             });
       
   </script> 

                             
  </div>
  @endsection
