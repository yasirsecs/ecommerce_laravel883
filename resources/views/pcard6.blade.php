@extends('layouts.main')
@push('title')
    Product Detail
@endpush
@section('main-section')
<!--main container -->

<div id="siteWrapper" class=" main-container container p-5 w-full">
                @include('layouts.mobile-navbar')
      <div class=" px-5 lg:px-0 flex flex-col lg:flex-row item-center justify-center p-8 border border-cyan-200" >
                  
                    <div class="lg:w-1/3 item-images flex flex-col w-full bg-green border rounded-md ">
                      <div class="large-image-view w-full py-5   ">
                        <a href="#">
                        <img id="cart-image" class=" object-center" src="{{asset('images/women-jogger.png')}}" alt="product image">
                        </a>
                      </div>
                      <div class="small-image-list flex justify-center h-10 ">
                         <div class="small-imagesborder shrink  border border-gray-500 rounded-xl items-center w-12 h-10 "><a href="#">
                          <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                          </a>
                        </div>
                        <div class="small-imagesborder shrink border border-gray-500 rounded-xl items-center w-12 h-10  border-solid"><a href="#">
                          <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                          </a>
                        </div>
                        <div class="small-imagesborder shrink border border-gray-500 rounded-xl items-center w-12 h-10 border-solid"><a href="#">
                          <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                          </a>
                        </div>
                        <div class="small-imagesborder shrink border border-gray-500 rounded-xl items-center w-12 h-10 border-solid "><a href="#">
                          <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                          </a>
                        </div>
                      
                      </div>
                    </div>    
                
                    {{-- <div class="lg:w-1/3 bg-red border border-cyan-300 bg-green-200">
                        <div class="item-images grid grid-rows-2 gap-1 w-full bg-green">
                          <div class="large-image-view w-full  border rounded-md object-center">
                            <a href="#">
                            <img class=" " src="{{asset('images/shoe2.png')}}" alt="product image">
                            </a>
                          </div>
                          <div class="large-image-list flex justify-center h-10 bg-slate-600">
                             <div class="small-imagesborder shrink  border border-gray-500 rounded-xl items-center w-12 h-10 "><a href="#">
                              <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder shrink border border-gray-500 rounded-xl items-center w-12 h-10 "><a href="#">
                              <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder shrink border border-gray-500 rounded-xl items-center w-12 h-10 "><a href="#">
                              <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder shrink border border-gray-500 rounded-xl items-center w-12 h-10 "><a href="#">
                              <img class="rounded-xl" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                          
                          </div>
                          <!-- <div class="large-image-list grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full h-1/5 justify-center">
                             <div class="small-imagesborder border border-gray-500 rounded-xl items-center "><a href="#">
                              <img class=" p-1 w-12 h-12" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl "><a href="#">
                              <img class="p-1 w-12 h-12 " src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl ">
                              <img class="p-1 w-12 h-12" src="{{asset('images/shoe2.png')}}" alt="product image">
                            </div>
                           <div class="small-imagesborder border border-gray-500 rounded-xl "><a href="#">
                              <img class="p-1 w-12 h-12 " src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                           </div>
                          
                          </div> -->
                        </div>    
                    </div> --}}
                    <!-- second card-->
                    
                    <!--   shoping cart start here --> 
                    <div class="lg:w-1/4  rounded-lg dark:bg-gray-800 dark:border-gray-700 border p-5 ">
                          <div class="px-5 pb-5">
                            <a href="#">
                                <h5 id="card-item-name" class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Nike Air Zoom Alphafly NEXT% 2</h5>
                            </a>
                            <p id="cart-text" class="gl-vspace">Once you take a few strides in the Nike Air Zoom Alphafly NEXT% 2, you'll never look at your favourite pair of old racing shoes the same way again. </p>
                            <p id="cart-item-tag">womenrunner333</p>
                            <div class="flex items-center mt-2.5 mb-5">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                            </div>
                            <div class="flex flex-col">
                              <div class="sizes flex flex-row p-5 ">
                                <div class="small hover:bg-black hover:text-white  text-xl basis-1/4 text-center align-middle  ">4</div>
                                <div class="large hover:bg-black hover:text-white  text-xl basis-1/4 text-center align-middle ">5</div>
                                <div class="extralarge  hover:bg-black hover:text-white  text-xl basis-1/4 text-center align-middle  ">6</div>
                                <div class="extralarge  hover:bg-black hover:text-white  text-xl basis-1/4 text-center align-middle ">7</div>
                        
                              </div>
                              <div  class="price flex justify-between"><span id="cart-item-price" class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                {{-- <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                                 --}}<button id="burgerButton"  class="add-cart burger bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add to Cart</button>
                        
                              </div>
                                
                                
                            </div>
                          </div>   
                    </div>
                     <!--   shoping cart end here --> 
                    <!--   shoping cart start here --> 
                    {{-- <div class="cart absolute right-5 top-1 flex">
                      <button id="burgerButton" onclick='showcart1()' class="burger bg-white   rounded-lg hover:bg-gray-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                      </button>
                    <div class="rounded-full w-4 h-4 text-red-600 text-lg absolute  right-3 font-bold"><span>0</span></div>
                    </div> --}}
                    
                                
                      
                    <!--   shoping cart end here -->
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

              <div  class="mt-8">
                <div class="flow-root">
                  <ul role="list" class="cart-item-list -my-6 divide-y divide-gray-200">
                    {{-- <li id="cartitemnumber-0" class="cartitemnumber-0 flex py-6">
                      <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img id="imagincart" src="" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                      </div>

                      <div class="ml-4 flex flex-1 flex-col">
                        <div>
                          <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                              <a id="nameitemcart"href="#">name of item</a>
                            </h3>
                            <p id="priceitemcart" class="ml-4">price</p>
                          </div>
                          <p id="detailitemcart" class="mt-1 text-sm text-gray-500">Once you take a few strides in the Nike Air Zoom Alphafly NEXT% 2, you'll never look at your favourite pair of old racing shoes the same way again.

                            womenrunner</p>
                        </div>
                        <div class="flex flex-1 items-end justify-between text-sm">
                          <p id="quantityitemcart" class="text-gray-500">quantity</p>

                          <div class="flex">
                            <button id="removeitemcart" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                          </div>
                        </div>
                      </div>
                    </li> --}}

                    

                    
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
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
              </div>
              <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>
                  or
                  <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Continue Shopping
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
{{-- <script src="{{asset('/js/singleitemcart.js')}}" defer></script>  --}}                  
<script>
  function showcart() 
{
	var text = document.getElementById('cart1');
  text.classList.add('hidden');
	//text.classList.add('cart-active');
}
function showcart1() 
{
	var maincart1 = document.getElementById('cart1');
  var cartlist1 = document.getElementById('cart2');
  maincart1.classList.remove('hidden');
  maincart1.classList.add('visible');
	maincart1.classList.add('cart-main-active');
  //cartlist1.classList.add('cart-list-active')
}

function hidecart() {
	var maincart1 = document.getElementById('cart1');
  var cartlist1 = document.getElementById('cart2');
  maincart1.classList.remove('visible');
  maincart1.classList.add('hidden');
	maincart1.classList.add('cart-main-deactive');
  cartlist1.classList.add('cart-list-deactive')
}
/* 
function remove() {
	console.log("Remove button working fine");
} */
</script> 
                </div> 
        </div>
       
  </div>
  @endsection
