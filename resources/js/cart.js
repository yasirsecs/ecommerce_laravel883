const { takeRight } = require("lodash");

let carts=document.querySelectorAll('.add-cart');
/* console.log(carts[1]); */
let products=[
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
        inCart:0
    },
    {
        name:'.',
        tag:'.',
        img:'a',
        price:0,
    }
];


/* var product_parent = document.getElementById('pid-1');
var children = product_parent.children;
inCart:0  
children[0].innerText;
console.log("number child of product_parent =",children.length);
var children_lenght=children.length;
console.log("running") */
/* var total_parent = [];
for(let j=0;j<carts.length;j++)
{
    const total_parent = [
    "pid-0",
    "pid-1",
    "pid-2",
    "pid-3",
  ];
} */
  //console.log("total_parent_second_child=",total_parent[1]);
  //console.log("lenght of carts parent=",carts.length);
for(let i=0;i<carts.length;i++)
{
    // call when click on add to cart button
    carts[i].addEventListener('click',()=>{
        var pid="pid-"+i.toString();
        htmlelementvalue(products[i],i,pid);
        cartnumbers(products[i]); 
        totalCost(products[i]);
    })
}

//set value of product properties in products array
function htmlelementvalue(product,i,pid)
{
    var product_parent = document.getElementById(pid);
    var children = product_parent.children;
    var children_lenght=children.length;
    product.img=children[0].getAttribute('src');
    product.name=children[1].innerText;
    console.log("type of price value form htmlelement function",typeof(parseInt(children[2].innerText)));
    var price1 = children[2].innerText.replace('$','');
    price1=price1.replace(',','')
    console.log("price without dollar sign",price1);
    product.price=parseInt(price1);
    product.tag=children[3].innerText;
    console.log('image path=',product.img);
}
function onLoadCartNumbers()
{
    let productNumbers =localStorage.getItem('cartNumbers');
    if(productNumbers)
    {
        document.querySelector('.cart span').textContent=productNumbers;
    }
}

function cartnumbers(product)
{
    let productNumbers=localStorage.getItem('cartNumbers');
    productNumbers=parseInt(productNumbers);

    if(productNumbers)
    {
        localStorage.setItem('cartNumbers',productNumbers+1);
        document.querySelector('.cart span').textContent=productNumbers+1;
    }
    else
    {
        localStorage.setItem('cartNumbers',1);
        //set cart value on html page
        document.querySelector('.cart span').textContent=1;
    }
    setItems(product);
}

function setItems(product)
{
let cartItems   =localStorage.getItem('productInCart');
  cartItems=JSON.parse(cartItems);
  /* console.log("cartitem="+cartItems[product.tag]); */
  if(cartItems!=null)
  {
    if(cartItems[product.tag]==undefined)
    {
        cartItems={
            ...cartItems ,[product.tag]:product
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
        console.log("cartcost===",cartCost);
        cartCost=parseInt(cartCost);
        localStorage.setItem("totalCost",cartCost+product.price);
    }
    else
    {
        let stringprice= (product.price);
        stringprice=stringprice.toString();
        localStorage.setItem("totalCost",stringprice);
        console.log("type of product.price=",typeof(stringprice));
    }
}
function displayCart()
{
    let cartItems = localStorage.getItem("productInCart");
    cartItems=JSON.parse(cartItems);
    
    let productContainer = document.querySelector(".product");
    //console.log("in display cart function="+cartItems.va);
    if(cartItems&& productContainer)
    {
        productContainer.innerHTML='';
        Object.values(cartItems).map(item=>{  productContainer.innerHTML+= '<div>'+item.tag+'</div>'
        console.log();
            
            productContainer.innerHTML+='<div class="flex flex-col"><img class="w-10 h-10" src="'+item.img+'"></img><span>'+item.name+'</span> </div><div class="price">$'+item.price+'</div><div class="quantity"><span>'+item.inCart+'</span></div><div class="total">$'+item.inCart*item.price+'</div>';
 
        /*      productContainer.innerHTML+='<div class="basketTotalContainer"><h4 class="basketTotalTitle">Basket Total</h4><h4 class="basketTotal">$${cartCost},00</h4>';
         */})
    }

}

    /* let parent1 = document.getElementById('id-1');
    let child1=parent1.children;
    let numb = document.getElementById("id-1").childNodes.length;
    let child = document.getElementById("myElement").childNodes.length;
    console.log("total number of child=",child); myElement
    var element = document.getElementById('pid-1');
    var children = element.children;
    document.getElementById('out').innerHTML = children.length + " children of #myElement."+"text of first child="+children[0].innerHTML;
    //console.log("text of element =",children[3].innerText);
    //console.log("number child of script2 =",children.length);
    */
// remove item from cart

let removeitemcart=document.querySelectorAll('.removeitemcart');

removeitemcart.addEventListener('click',()=>{
    console.log("remove item clicked");
})
onLoadCartNumbers();
displayCart();
