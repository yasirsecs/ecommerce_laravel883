<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{asset('/js/cart.js')}}" defer></script>
 {{--  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> --}}
 
 
</head>
<body class=" h-screen">
  <style>

    
    
    </style>
    
    <body>
      <div class="cart ">
       total item in Cart= <span class="span"></span>
      </div>
      <div  class="flex ">
        <div class="image">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Black Tshirt</h3>
          <h3>$10,00</h3>
          <a class="add-cart cart3 " href="#" >Add Cart</a>
        </div>
      
        <div class="image ">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Black Tshirt</h3>
          <h3>$20,00</h3>
          <a class="add-cart cart3" href="#" >Add Cart</a>
        </div>

        <div class="image ">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Black Tshirt</h3>
          <h3>$25,00</h3>
          <a class="add-cart cart3" href="#" >Add Cart</a>
        </div>
    </div>
    

    <div class="products-container">
      <div class="product-header">
        <h5 class="product-title" >Product</h5>
        <h5 class="price" >Price</h5>
        <h5 class="quantity" >Quantity</h5>
        <h5 class="total" >Total</h5>
      </div>
      <div class="product">

      </div>
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