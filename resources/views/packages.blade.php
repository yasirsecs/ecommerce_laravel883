@extends('layouts.main')
@push('title')
    Checkout
@endpush
@section('main-section')
<!--main container -->
<style>
  .packages {
    text-align: center;
}
h2 {
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-size: 36px;
    color: #096fcf;
    margin-bottom: 30px;
    font-weight: 400;
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
           <div class="packages container mx-auto w-full text-center bg-gray-300 text-4xl  font-bold p-4 text-blue-500 border rounded-md">Example of Stripe Payment subscription</div>
            <div class="container mx-auto lg:px-10 lg:flex items-center bg-gray-300 border rounded-md p-10 " >
            <div class="first w-full lg:w-1/4 border border-blue-300 rounded-md bg-white mx-3 flex flex-col items-center py-7   ">
              <div class="Monthly price text-center p-2 text-blue-500  text-2xl font-bold ">Cloud LiteStarter</div>
              <div class="price text-center p-2 text-blue-500"><span>10$/month<span></div>
              <div class="cpu text-center p-2 text-blue-500 ">1 Core CPU</div>
              <div class="memory text-center p-2 text-blue-500 ">512 Memory</div>
              <div class="ssd text-center p-2 text-blue-500 ">30GB SSD</div>
              <div class="ip text-center p-2 text-blue-500 ">One IPv4 and IPv6</div>
              <div class="bandwidth text-center p-2 text-blue-500 ">One TBBandwidth</div>
              <div class="speed text-center p-2 text-blue-500 ">1 Gbps uplink </div>
              <div class="cpanel text-center p-2 text-blue-500 ">Free Cpanel/WHS</div>
              <a href="{{route('subscription.subr')}}" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 rounded">
                Subscribe Now
              </a>
            </div>
            <div class="first w-full lg:w-1/4 border border-blue-300 rounded-md bg-white mx-3 flex flex-col items-center py-7   ">
              <div class="Monthly price text-center p-2 text-blue-500  text-2xl font-bold "> Cloud LitePlus</div>
              <div class="price text-center p-2 text-blue-500">15<span>$/month<span></div>
              <div class="cpu text-center p-2 text-blue-500 ">1 Core CPU</div>
              <div class="memory text-center p-2 text-blue-500 ">512 Memory</div>
              <div class="ssd text-center p-2 text-blue-500 ">30GB SSD</div>
              <div class="ip text-center p-2 text-blue-500 ">One IPv4 and IPv6</div>
              <div class="bandwidth text-center p-2 text-blue-500 ">One TBBandwidth</div>
              <div class="speed text-center p-2 text-blue-500 ">1 Gbps uplink </div>
              <div class="cpanel text-center p-2 text-blue-500 ">Free Cpanel/WHS</div>
              <a href="{{route('subscription.subr')}}" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 rounded">
                Subscribe Now
              </a>
            </div>
            <div class="first w-full lg:w-1/4 border border-blue-300 rounded-md bg-white mx-3 flex flex-col items-center py-7   ">
              <div class="Monthly price text-center p-2 text-blue-500  text-2xl font-bold "> Cloud Lite 1</div>
              <div class="price text-center p-2 text-blue-500"><span>20$/month<span></div>
              <div class="cpu text-center p-2 text-blue-500 ">1 Core CPU</div>
              <div class="memory text-center p-2 text-blue-500 ">512 Memory</div>
              <div class="ssd text-center p-2 text-blue-500 ">30GB SSD</div>
              <div class="ip text-center p-2 text-blue-500 ">One IPv4 and IPv6</div>
              <div class="bandwidth text-center p-2 text-blue-500 ">One TBBandwidth</div>
              <div class="speed text-center p-2 text-blue-500 ">1 Gbps uplink </div>
              <div class="cpanel text-center p-2 text-blue-500 ">Free Cpanel/WHS</div>
              <a href="{{route('subscription.subr')}}" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 rounded">
                Subscribe Now
              </a>
            </div>
            <div class="first w-full lg:w-1/4 border border-blue-300 rounded-md bg-white mx-3 flex flex-col items-center py-7   ">
              <div class="Monthly price text-center p-2 text-blue-500  text-2xl font-bold "> Cloud Lite 2</div>
              <div class="price text-center p-2 text-blue-500"><span>25$/month<span></div>
              <div class="cpu text-center p-2 text-blue-500 ">1 Core CPU</div>
              <div class="memory text-center p-2 text-blue-500 ">512 Memory</div>
              <div class="ssd text-center p-2 text-blue-500 ">30GB SSD</div>
              <div class="ip text-center p-2 text-blue-500 ">One IPv4 and IPv6</div>
              <div class="bandwidth text-center p-2 text-blue-500 ">One TBBandwidth</div>
              <div class="speed text-center p-2 text-blue-500 ">1 Gbps uplink </div>
              <div class="cpanel text-center p-2 text-blue-500 ">Free Cpanel/WHS</div>
              <a href="{{route('subscription.subr')}}" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 rounded">
                Subscribe Now
              </a>
            </div>
            </div>
  @endsection