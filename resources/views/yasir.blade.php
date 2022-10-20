<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 {{--  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> --}}
 <style>
  body {
      text-align: center;
        
      padding: 5%;
  }
  h1{
      color:green;
  }

  .text {
	text-align: center;
}
.hidden {
	display: none;
}
.show {
	display: block;
}
</style>
 
</head>
<body class=" h-screen">
  <button onclick='showcart()'> Show Text </button>
<p id="text" class="text hidden">This is the magic text</p>
<button onclick='hidecart()'> hide text Text </button>

 {{-- <button id="burgerButton" onclick='showcart()' class="burger absolute right-5 top-1 text-gray-700 rounded-lg bg-gray-100 hover:bg-gray-200 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                      </button>    --}}



<script>
  function showcart() {
	var text = document.getElementById('text');
	text.classList.toggle('hidden');

}

function hidecart() {
	var text = document.getElementById('text');
	text.classList.remove('show');
	text.classList.add('hidden');
}
</script>
</body>
</html>