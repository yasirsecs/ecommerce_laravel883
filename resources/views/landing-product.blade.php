<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
   </head>
<body>
  <div class="hidden lg:block  main-navbar  bg-theme-black h-screen lg:h-auto text-gray-100 w-full  left-0 top-0 py-6 lg:py-0">
    <div class="container mx-auto px-1 lg:px-0">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between space-x-2">
        <div class="logo text-2xl font-black cursor-pointer w-full text-center lg:text-left">
          <span id="closeButton" class=" crossbutton inline-block lg:hidden rotate-45 text-6xl font-thin absolute left-6 top-2 ">+</span>
          <span class="text-4xl lg:text-2xl uppercase">Nike Shoes</span>
        </div>
        <!--top navbar menu-->
        <nav class="navbar order-1 lg:order-0  ">
          <ul class="flex flex-col lg:flex-row lg:items-center">
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <div class="home flex items-start space-x-1 bottom-0 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                </svg>
                <span>
                  Home
                </span>
              </div>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                shop
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Learn
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Consult
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-10 lg:hover:bg-opacity-50">
                <span>
                Liecence
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black hover:bg-opacity-50 lg:hover:bg-opacity-50">
                <span>
                Setting
                </span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!--top navbar rightside-->
        <div class="flex flex-col lg:flex-row lg:items-center cursor-pointer order-0 lg:order-1 mt-10 lg:mt-0">
          <div class="order-1 mt-4 lg:mt-0 lg:order-0 flex flex-col lg:flex-row lg:items-center  whitespace-nowrap lg:p-3    ">
            <span class="block lg:hidden">Hello</span>
            <span class=" lg:hover:bg-slate-400 transition-all duration-200 ">Yasir arfatse</span>
          </div>
          <img src="/images/yasir1.jpg" class=" order-0 lg:order-1 block rounded-full w-10 h-10  lg:w-10 px-2" alt="">
        </div>
      </div>
    </div>
  </div>
      <!--main container -->
  <div id="siteWrapper" class=" main-container p-5 bg-white w-full">
    <div class="mobile-navbar-top mb-5 lg:hidden">
      <div class="container mx-auto px-5 lg:px-0 flex items-center justify-between">
        <button id="burgerButton" class="burger text-gray-700 rounded-lg bg-gray-100 hover:bg-gray-200 p-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
    <div class="container mx-auto px-5 lg:px-0">
      <div class="pageTitle text-3xl font-medium mb-5">
        <h1>Product</h1>
      </div>
      <!-- product -->
      <div class="product grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
      </div>
    </div>
  </div>
</body>
</html>