<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .h11 {
            text-shadow:5px 5px 1px rgb(0 0 0 / 10%)
        }
        </style>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-gradient bg-gradient-to-br from-theme-blue to-theme-pink flex items-center justify-center">
<div class="container flex justify-center lg:h-3/4 bg-yellow-400">
    <div class=" w-6 h-6 border border-gray-100 rounded-full absolute top-5 left-5"></div>
    <div class=" w-10 h-10   absolute top-0 right-0">
        <div class=" w-full h-full rounded-full border border-gray-100  absolute top-0 left-0"> 
            <div class=" w-6 h-6 rounded-full border-2 border-gray-100  absolute top-5 left-5">   </div> 
        </div>
    </div>
    <!-- card section-->
    <div class="card w-full sm:w-2/4 sm:h-1/2 lg:w-4/5 lg:h-full  bg-blue-500  grid grid-cols-1 sm:grid-cols-2 gap-0  relative  bg-white  rounded-2xl    shadow-theme-1 overflow-hidden ">
      <!-- left side-->
        <div class="left-side  grid grid-rows-3 gap-0 h-full  bg-gradient-to-bl from-theme-pink to-theme-blue  rounded-2xl shadow-theme-2">
            <!-- row1 for logo and nummber-->
                <div class="row1-logo grid grid-cols-3 grid-rows-1 lg:h-36">
                    <div class="logo p-1   col-span-2 lg:w-3/5 ">
                        <svg class="fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.013 512.013"><path d="M287.757 225.794l-31.808 8.352-88.256 23.104c-31.168 7.712-58.432 17.984-84.704 8.992-35.712-15.424-35.072-55.552-8.448-98.24C27.469 206.85-57.235 331.074 57.325 343.618c14.592 1.92 40.576-3.2 68.8-15.072l129.824-53.28 256.064-104.704-224.256 55.232z"/></svg>
                    </div>           
                    <div class="number  col-start-3 h11 bg-gradient bg-gradient-to-bl from-theme-blue to-theme-ping text-transparent bg-clip-text text-shadow">
                            <span class="  text-7xl lg:text-9xl  font-bold leading-none ">32</span>
                    </div>
                </div>
                  <!-- row2 for shoes-->
           <div class=" row2-shoes-main grid col-span-3  ">
                <div class="shoe lg:col-start-1 relative px-2">
                        <div class="plus1  w-6 h-6  relative rounded-full bg-theme-pink  cursor-pointer transform hover:scale-125 transition-all p-2 ">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path></svg>
                        </div>                    
                        <img src="/images/shoe.png" alt="shoe" class="w-40 h-40 sm:w-60 sm:h-60 lg:h-4/3 lg:w-4/3 object-center "> 
                        <div class="w-6 h-6 absolute left-40 bottom-[50px]  lg:left-56 rounded-full bg-theme-blue  cursor-pointer transform hover:scale-125 transition-all p-2"><svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path></svg></div>                      
                </div>
            </div>
            <div class="dotcircle w-full  bg-red-200  top-10 flex justify-center  space-x-2">
                <span class="  w-4 h-4 rounded-full bg-white hover:bg-gray-300 block"></span>
                <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-300 block"></span>
                <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-300 block"></span>
            </div>
        </div>
        <!-- right side-->
       <div class="right-side bg-green-300 w-full   col-start-1  sm:col-start-2 grid gap-0 grid-rows-3 rounded-2xl ">
            <div class="tex-logo row-start-1  justify-end ">
                <img src="/images/text-logo.png" alt="" >
            </div>
            <div class=" row-start-2 price px-3 ">
                <span class="font-bold text-2xl text-gray-600 ">$99</span>
                <p class="  text-gray-700 ">   Experience sports, traning, shopping and everything else that's new at Nike from any country in the world.</p>            
            </div>
            
            
        </div>
    </div>
</div>    

</body>
</html>