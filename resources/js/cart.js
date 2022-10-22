const { takeRight } = require("lodash");

let carts=document.querySelectorAll('add-cart');
let products=[
    {
        name:'Grey Tshirt',
        tag:'greytshirt',
        price:15,
        inCart:0
    },
    {
        name:'Grey hoddie',
        tag:'greyhoddie',
        price:20,
        inCart:0
    },
    {
        name:'Black Tshirt',
        tag:'blacktshirt',
        price:10,
        inCart:0
    },
    {
        name:'Black Hoddie',
        tag:'blackhoddie',
        price:25,
        inCart:0
    }
];

console.log("running")
for(let i=0;i<carts.length;i++)
{
    carts[i].addEventListener('click',()=>{
        cartnumbers(products[i]);
        totalCost(products[i]);
        console.log(products[i].name);
    })
}
function onLoadCartNumbers()
{
    let productNumbers =localStorage.getItem('cartNumbers');
    if(productNumbers)
    {
        document.querySelector('.cart span').textContent=productNumbers;
    }
}

function cartNumbers(product)
{
    let productNumbers=localStorage.getItem('cartNumbers');
    productNumbers=parseInt(productNumbers);

    if(productNumbers)
    {
        localStorage.setItem('cartNumbers',productNumbers+1);
    }
    else
    {
        localStorage.setItem('cartNumbers,1');
        document.querySelector('.cart span').textContent=1;
    }
    setItems(product)
}
console.log('running2');

function setItems(product)
{
  let cartItems   =localStorage.getItem('productsInCart');
  cartItems=JSON.parse(cartItems);
  if(cartItems!=null)
  {
    if(cartItems[product.tag]==undefined)
    {
        cartItems={
            cartItems,[product.tag]:product
        }
    }
    cartItems[product.tag].inCart+=1;
}
else
{
    product.inCart=1;
    cartItems={[product.tag]:product}
}
localStorage.setItem("productInCart",JSON.stringify(cartItems));
}

function totalCost(product)
{
    let cartCost=localStorage.getItem('totalCost');
    console.log("my cartCost is ",cartCost);
    console.log(typeof cartCost);

    if(cartCost!=null)
    {
        cartCost=parseInt(cartCost);
        localStorage.setItem("totalCost",cartCost+product.price);
    }
    else
    {
        localStorage.setItem("totalCost",product.price);
    }
}
function displayCart()
{
    let cartItems = localStorage.getItem("productsInCart");
    cartItems=JSON.parse(cartItems);
    let productContainer = document.querySelector(".product");
    console.log(cartItems);
    if(cartItems&& productContainer)
    {
        productContainer.innerHTML='';
        Object.values(cartItems).map(item=>{
            productContainer.innerHTML+='div class="product">
            <img src="./images/${item.tag}.jpg"></img>
            <span>${item.name}</span>
            </div>
            <div class="price"';
        })
    }

}
onLoadCartNumbers();
