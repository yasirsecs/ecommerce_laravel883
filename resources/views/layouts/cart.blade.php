{{-- start of cart here--}}
<!-- start of cart here This example requires Tailwind CSS v2.0+ -->
<div id="cart1" class="relative z-10 bg-red hidden " aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <!--
      Background backdrop, show/hide based on slide-over state.
  
      Entering: "ease-in-out duration-500"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in-out duration-500"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity "></div>
  
     <div  class="fixed inset-0 overflow-hidden ">
      <div class="absolute inset-0 overflow-hidden ">
        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 ">
          <!--
            Slide-over panel, show/hide based on slide-over state.
  
            Entering: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
           <div id="cart2"  class="pointer-events-auto w-screen max-w-md  ">
            <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
              <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                <div class="flex items-start justify-between">
                  <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                  <div class="ml-3 flex h-7 items-center">
                    <button type="button" onclick='hidecart()' class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Close panel</span>
                      <!-- Heroicon name: outline/x-mark -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
          <form action="{{route('checkout.credit-card2')}}"  method="post" id="payment-form1">
            @csrf 
                <div  class="mt-8">
                  <div class="flow-root">
                    <ul role="list" class="cart-item-list -my-6 divide-y divide-gray-200">
                      
                      <!-- More products... -->
                    </ul>
                  </div>
                </div>
              </div>
  
              <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                  <p>Subtotal</p>
                  <p id="cart-price-total">$00.00</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                <div class="mt-6">
                {{--   <a href="{{asset('checkout')}}" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                 --}}</div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                  <p>
                <button type="submit" class=" text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm   px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Payment</button>
          </form>
                    or
                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                      Continue Shopping<a href="{{asset('pcard6')}}" ></a>
                      <span aria-hidden="true"> &rarr;</span>
                    </button>
                    
                  </p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div> 
  </div>
  {{-- end of cart --}}