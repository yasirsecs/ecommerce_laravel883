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