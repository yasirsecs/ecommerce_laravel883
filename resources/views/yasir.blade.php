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
        <div id="pid-0" class="image">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Black Tshirt</h3>
          <h3>$10</h3>
          <p class="tag">blacktshirt</p>
          <a class="add-cart cart3 " href="#" >Add Cart</a>
        </div>
        <div id="pid-1" class="image">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Blue Tshirt</h3>
          <h3>$10</h3>
          <p>bluetshirt</p>
          <a class="add-cart cart3 " href="#" >Add Cart</a>
        </div>
      
        <div id="pid-2" class="image ">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Yellow Tshirt</h3>
          <h3>$20</h3>
          <p>yellowtshirt</p>
          <a class="add-cart cart3" href="#" >Add Cart</a>
        </div>

        <div id="pid-3" class="image ">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>greed Tshirt</h3>
          <h3>$25</h3>
          <p>greentshirt</p>
          <a class="add-cart cart3" href="#" >Add Cart</a>
        </div>
        <div id="pid-4" class="image ">
          <img src="/images/shoe5.png" alt="thshirt">
          <h3>Red Tshirt</h3>
          <h3>$25</h3>
          <p>redtshirt</p>
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
{{-- 
    <h2>Get Children of this HTML Element using JavaScript</h2>
    <div id="myElement">
      <p>Hello <span>World</span>!</p>
      <ul><li>List Item</li></ul>
      <div>Sample World</div>
      <img src="/images/shoe5.png" alt="thshirt">
      <h3>Black Tshirt</h3>
          <h3>$20,00</h3>
          <a class=" cart3" href="#" >Add Cart</a>
    </div>
    <br>
    <button type="button" onclick="execute()">Click Me</button>
    <p id="out"></p> --}}
    <script>
       
   /*  function execute(){
        var element = document.getElementById('myElement');
        var children = element.children;
        document.getElementById('out').innerHTML = children.length + " children of #myElement."+"text of first child="+children[0];
        console.log("text of element =",children[0].innerText);
        console.log("number child of script2 =",children.length);
    } */
    </script>
</body>
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