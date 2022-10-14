<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title')</title>
  {{--   @vite('resources/css/app.css')
    @vite('resources/js/script1.js')  --}}
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/sidebar.js')}}" defer></script>
    {{-- <script src="{{asset('/js/usersetting.js')}}"></script> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
<body>
<div class="hidden lg:block  main-navbar  bg-theme-black h-screen lg:h-auto text-gray-100 w-full  left-0 top-0 py-6 lg:py-0">
    <div class="container mx- px-1 lg:px-0">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between space-x-2">
        <div class="logo text-2xl font-black cursor-pointer w-full text-center lg:text-left">
          <span id="closeButton" class=" crossbutton inline-block lg:hidden rotate-45 text-6xl font-thin absolute left-6 top-2 ">+</span>
          <span class="text-2xl lg:text-2xl uppercase "><!-- <img src="/images/adidas.png" alt="Girl in a jacket" class=" w-1/2 h-1/2"> -->
          <a href="{{url('home')}}">Addidas</a>
          </span>
        </div>
        <!--top navbar menu-->
        <nav class="navbar order-1 lg:order-0  ">
          <ul class="flex flex-col lg:flex-row lg:items-center">
            <li>
              <a href="{{url('product')}}" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <div class="home flex items-start space-x-1 bottom-0 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class=" lg:hidden w-5 h-5">
                  <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                </svg>
                <span>
                  Men
                </span>
              </div>
              </a>
            </li>
            <li>
              <a href="{{ url('product-women') }}" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Women
                </span>
              </a>
            </li>
            <li>
              <a href="" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Kidz
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Sports
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Brands
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-50 lg:hover:bg-opacity-50">
                <span>
                Collection
                </span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!--top navbar rightside-->
        <div class="flex flex-col lg:flex-row lg:items-center cursor-pointer order-0 lg:order-1 mt-10 lg:mt-0">
          <div id="usersetting1" class="order-0 mt-4 lg:mt-0 lg:order-0 flex flex-col lg:flex-row lg:items-center  whitespace-nowrap lg:p-3    ">
           <button id="dropdownDefault" onclick = "usersettingfunction()" 
            class="text-white text-sm  text-center inline-flex items-center" type="button">  
            <span class="block lg:hidden">Hello</span>Yasir arfatse
           <!--  <img src="/images/yasir1.jpg" class=" order-0 lg:order-1 block rounded-full w-6 h-6  lg:w-6 px-2" alt="">  -->
          </button>  
           </div>
           <!-- Dropdown menu -->
            <div id="usersetting2" class=" order-1  lg:absolute hidden lg:top-10 lg:right-20 w-32 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
            </div>
      </div>
      </div>
    </div>
  </div>
