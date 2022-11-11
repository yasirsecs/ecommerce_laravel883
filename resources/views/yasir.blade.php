<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
  <div id="yasir" class="yasir">
  </div>
  <button id="appendbtn">Append</button>
    {{-- <button onclick="yasir()">button1</button>
    <div id="yasir" class="yasir">
    </div>
    <button onclick="newfun()">button</button> --}}
    <script src="{{asset('/js/test.js')}}" defer></script>
</body>
<script>

   
  /* 
  var text = document.getElementById('yasir');
  function yasir() 
  {
     text.innerHTML+='<button id="newbtn" onclick="newfun()">new button</button>';
  }
  function newfun() 
  {
    var new1 = document.getElementById('newbtn');
     new1.addEventListener('click',()=>{
       console.log("eventlistener working"); 
    })
  }
   */
   
/* 
let newDog = document.createElement('div')

newDog.classList.add('dog')

const myImage = document.createElement('img')
myImage.src="https://picsum.photos/id/237/500/500";
myImage.alt='Dog photo'

const h2 = document.createElement('h2')
h2.textContent = 'My name is Roviel and i love playing and eating.'

const p = document.createElement('p')
p.classList.add('moreInfo')

p.textContent= 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ent montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat.'


const button = document.createElement('button')
button.classList.add('btn')
button.textContent= 'Click to read  more about me '

document.body.appendChild(newDog)
newDog.appendChild(myImage)
newDog.appendChild(h2)
newDog.appendChild(p)
newDog.appendChild(button)

// Adding event handlers

function showMore(){
  document.querySelector('.moreInfo').style.display ='block';
  console.log("dog button clicked");
}

document.querySelector('.btn').addEventListener('click', showMore) */
   </script> 
</html>