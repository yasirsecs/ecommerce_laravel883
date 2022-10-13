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
<div class="container flex justify-center lg:h-3/4">
    <div class=" w-6 h-6 border border-gray-100 rounded-full absolute top-5 left-5"></div>
    <div class=" w-10 h-10   absolute top-0 right-0">
        <div class=" w-full h-full rounded-full border border-gray-100  absolute top-0 left-0"> 
            <div class=" w-6 h-6 rounded-full border-2 border-gray-100  absolute top-5 left-5">   </div> 
        </div>
    </div>
    <!-- card section-->
    <div class="card w-full sm:w-2/4 sm:h-1/2 lg:w-4/5 lg:h-full  grid grid-cols-1 sm:grid-cols-2 gap-0  relative  bg-white  rounded-2xl    shadow-theme-1 overflow-hidden ">
      <!-- left side-->
        <div class="left-side  h-full bg-white  bg-gradient-to-bl from-theme-pink to-theme-blue  rounded-2xl shadow-theme-2">
           <div class="logo w-20 top-16  ">
                 <svg class="fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.013 512.013"><path d="M287.757 225.794l-31.808 8.352-88.256 23.104c-31.168 7.712-58.432 17.984-84.704 8.992-35.712-15.424-35.072-55.552-8.448-98.24C27.469 206.85-57.235 331.074 57.325 343.618c14.592 1.92 40.576-3.2 68.8-15.072l129.824-53.28 256.064-104.704-224.256 55.232z"/></svg>
            </div>            
           <div class="number h11 -top-16 sm:-top-20 lg:-top-20 sm:-right-5  text-right relative  bg-gradient bg-gradient-to-bl from-theme-ping to-theme-pink text-transparent bg-clip-text ">
                <span class="text-7xl lg:text-10xl  font-bold leading-none ">32</span>
           </div>
           <div class="shoes-main   ">
                
                <div class="shoe  relative -top-5 sm:-top-4 lg:top-0 px-2 bg-slate-200">
                    <div class="plus1  w-6 h-6 lg:left-5 lg:top-2 relative rounded-full bg-theme-pink  cursor-pointer transform hover:scale-125 transition-all p-2 ">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path></svg>
                    </div>                    
                    <img src="/images/shoe.png" alt="shoe" class="w-40 h-40 sm:w-60 sm:h-60 lg:h-4/3 lg:w-4/3 object-center "> 
                    <div class="w-6 h-6 absolute left-40 bottom-[50px]  lg:left-56 rounded-full bg-theme-blue  cursor-pointer transform hover:scale-125 transition-all p-2"><svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path></svg></div>                      
                </div>
                <div class="dotcircle w-full  bg-red-200  top-10 flex justify-center  space-x-2">
                    <span class="  w-4 h-4 rounded-full bg-white hover:bg-gray-300 block"></span>
                    <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-300 block"></span>
                    <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-300 block"></span>
                </div>
                <div class="dotcircle w-full  bg-red-200  top-10 flex justify-center  space-x-2">
                   
                </div>
                <div class="dotcircle w-full  bg-red-200  top-10 flex justify-center  space-x-2">
                    
                </div>
           </div>
                
            
        </div>
        <!-- right side-->
       <div class="right-side bg-green-300 w-full col-start-1  sm:col-start-2 ">
            <div class="tex-logo justify-end ">
                <img src="/images/text-logo.png" alt="" >
            </div>
            <div class="price px-3">
                <span class="font-bold text-2xl text-gray-600 ">$99</span>
                <p class=" md:text-xl sm:text-sm lg:text-lg text-gray-700 ">   Experience sports, traning, shopping and everything else that's new at Nike from any country in the world.</p>            
            </div>
        </div>
       
        
    
    </div> 
    
</div>    

</body>
</html>