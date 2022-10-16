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
                          <div class="large-image-view w-full h-1/2 ">
                            <a href="#">
                            <img class="p-8  " src="{{asset('images/shoe2.png')}}" alt="product image">
                            </a>
                            
                          </div>
                          <div class="large-image-list grid grid-cols-4 w-full h-1/4 ">
                            <div class="small-imagesborder border border-gray-500 rounded-xl items-center "><a href="#">
                              <img class=" p-1" src="{{asset('images/shoe2s.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl "><a href="#">
                              <img class="p-1" src="{{asset('images/shoe2s.png')}}" alt="product image">
                              </a>
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl ">
                              <img class="p-1" src="{{asset('images/shoe2s.png')}}" alt="product image">
                              
                            </div>
                            <div class="small-imagesborder border border-gray-500 rounded-xl "><a href="#">
                              <img class="p-1" src="{{asset('images/shoe2s.png')}}" alt="product image">
                              </a>
                            </div>
                          </div>
                        </div>    
                    </div>
                    <!-- second card-->
                    
                    <!--   shoping cart start here --> 
                    <div class="w-1/4 bg-black rounded-lg dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                        <img class="p-8  " src="{{asset('images/shoe2.png')}}" alt="product image">
                        </a>     
                    </div>
                     <!--   shoping cart end here --> 
                </div>
        </div>
  </div>
  @endsection
