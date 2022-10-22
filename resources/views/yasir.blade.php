<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 {{--  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> --}}
 
 
</head>
<body class=" h-screen">
  <style>

    .wrapper{
    position: relative;
    }
    .wrapper span{
    position: absolute;
    top: -2px;
    right: -2px; 
    }
    
    </style>
    
    <body>
    
    <div class="wrapper">
    <i class="fa" style="font-size:24px">&#xf07a;</i>
    <span> 5 </span>
    </div>
    
    </body>

        <script>
          function showcart() 
        {
          var text = document.getElementById('cart1');
          /* text.classList.toggle('hidden'); */
          text.classList.add('cart-active1');
        }
        function showcart1() 
        {
          var text = document.getElementById('cart1');
          /* text.classList.toggle('hidden'); */
          text.classList.add('cart-active1');
        }
        
        function hidecart() {
          var text = document.getElementById('text');
          text.classList.remove('show');
          text.classList.add('hidden');
        }
        </script> 
</body>
</html>