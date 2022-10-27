@extends('layouts.main')
@push('title')
Product Categories
@endpush
@section('main-section')
      <!--main container -->
  <div id="siteWrapper" class=" main-container p-5 bg-white w-full">
  @include('layouts.mobile-navbar')
    <div class="container mx-auto px-5 lg:px-0">
      <div class="pageTitle text-3xl font-medium mb-5">
        <h1>Product</h1> 
      </div>
      <!-- product -->
      <div class="product grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <div class="productinfo border rounded">
                  <div class="productimage h-48 bg-yellow-300"><a href="{{asset('pcard6')}}"><img src="{{asset('/images/shoe4.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></a></div>
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
        <div class="productimage h-48 bg-yellow-300"><a href="{{asset('pcard6')}}"><img src="{{asset('/images/shoe4.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></a></div>
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
        <div class="productimage h-48 bg-yellow-300"><a href="{{asset('pcard6')}}"><img src="{{asset('/images/shoe4.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></a></div>
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
        <div class="productimage h-48 bg-yellow-300"><a href="{{asset('pcard6')}}"><img src="{{asset('/images/shoe4.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></a></div>
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
        <div class="productimage h-48 bg-yellow-300"><img src="{{asset('/images/shoe5.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></div>
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
        <div class="productimage h-48 bg-yellow-300"><a href="{{url('pcard')}}"<img src="{{asset('/images/shoe5.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></div>
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
        <div class="productimage h-48 bg-yellow-300"><img src="{{asset('/images/shoe5.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></div>
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
        <div class="productimage h-48 bg-yellow-300"><img src="{{asset('/images/shoe5.png')}}" alt="Girl in a jacket" class=" w-full h-3/4"></div>
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
  @endsection
