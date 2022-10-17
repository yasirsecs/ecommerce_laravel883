@extends('layouts.main')
@push('title')
    Product Detail
@endpush
@section('main-section')
<!--main container -->

<div id="siteWrapper" class=" main-container container p-5 w-full">
    @include('layouts.mobile-navbar')
                <div class="  px-5 lg:px-0 flex flex-col lg:flex-row item-center justify-center" >
                    <div class="w-1/3 bg-red rounded-lg  dark:bg-gray-800 dark:border-gray-700">
                        <div class="item-images grid grid-rows-2 gap-1 w-full">
                          <div class="large-image-view w-full max-w-sm border rounded-md ">
                            <a href="#">
                            <img class=" p-5 border " src="{{asset('images/shoe2.png')}}" alt="product image">
                            </a>
                          </div>
                          <div class="large-image-list grid grid-cols-4 w-full h-1/5  ">
                            <div class="small-imagesborder border border-gray-500 rounded-xl items-center "><a href="#">
                              <img class=" p-1 object-cover" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl "><a href="#">
                              <img class="p-1 object-contain" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl ">
                              <img class="p-1 object-fill" src="{{asset('images/shoe2.png')}}" alt="product image">
                              
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl "><a href="#">
                              <img class="p-1 object-scale-down" src="{{asset('images/shoe2.png')}}" alt="product image">
                              </a>
                            </div>
                          </div>
                        </div>    
                    </div>
                    <!-- second card-->
                    
                    <!--   shoping cart start here --> 
                    <div class="w-1/4   rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                      <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">SLEEK TRAINERS INSPIRED BY RUNNING TECHNOLOGY.</h5>
                        </a>
                        <p class="gl-vspace">Comfort that's rooted in running meets effortless style in these adidas Aestheto Shoes. An attractive chick design on the midsole and outsole reveals the comfortable cushioning underneath. The adidas mesh upper is stretchy and supportive. </p>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center">
                          <div class="sizes flex content-evenly ">
                            <div class="small hover:bg-black hover:text-white text-justify align-middle text-xl w-10 h-10">4</div>
                            <div class="large hover:bg-black hover:text-white text-justify align-middle text-xl w-10 h-10">5</div>
                            <div class="extralarge  hover:bg-black hover:text-white text-justify align-middle text-xl w-10 h-10">6</div>
                          </div>
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>   
                    </div>
                     <!--   shoping cart end here --> 
                </div>
        </div>
  </div>
  @endsection
