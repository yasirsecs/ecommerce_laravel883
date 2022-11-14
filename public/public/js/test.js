/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/test.js ***!
  \******************************/
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

p.textContent= 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat.'
 */

/* document.body.appendChild(newDog)
newDog.appendChild(myImage)
newDog.appendChild(h2)
newDog.appendChild(p)
newDog.appendChild(button) */
// Adding event handlers
var appendbtn = document.getElementById("appendbtn");
appendbtn.addEventListener('click', function () {
  var button = document.createElement('button');
  button.setAttribute('id', 'removebtn1');
  button.classList.add('btn2');
  button.textContent = 'Click to read  more about me ';
  var button2 = document.createElement('button');
  button.setAttribute('id', 'removebtn2');
  button2.classList.add('btn1');
  button2.textContent = 'button2';
  document.getElementById("yasir").appendChild(button2);
  document.getElementById("yasir").appendChild(button);
  document.querySelector('.btn1').addEventListener('click', showMore); //document.querySelector('.btn2').addEventListener('click', showMore)

  document.getElementById('removebtn2').addEventListener('click', showMore);
});

function myFunction() {}

function showMore() {
  console.log("dog button clicked");
}
/******/ })()
;