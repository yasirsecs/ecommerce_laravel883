@extends('layout.main')
@section('main-section')
<!--main container -->
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
            <div class="container mx-auto px-5 lg:px-0 flex item-center " style="background-image: {{ url('/images/addidas_shoe.jpg') }}">
                <img src="/images/addidas_shoe.jpg" alt="Girl in a jacket" class=" w-1/2 h-1/2">
                <img src="/images/addidas_shoe.jpg" alt="Girl in a jacket" class=" w-1/2 h-1/2">
            </div>
        </div>
  </div>
  @endsection