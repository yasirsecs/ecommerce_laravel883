const { takeRight } = require("lodash");

let carts=document.querySelectorAll('.add-cart');
 //console.log("add cart value=",carts[2]);
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
        displayCart();
    })
}

//set value of product properties in products array
function htmlelementvalue(product,i,pid)
{
    product.img=document.getElementById("cart-image").getAttribute('src');
    product.name=document.getElementById("card-item-name").innerText;
    var price1 = document.getElementById("cart-item-price").innerText.replace('$','');
    price1=price1.replace(',','')
    product.price=parseInt(price1);
    product.tag=document.getElementById("cart-item-tag").innerText;
    
    
}
function onLoadCartNumbers()
{
    let productNumbers =localStorage.getItem('cartNumbers');
    if(productNumbers)
    {
        document.querySelector('.cart-count').textContent=productNumbers;
    }
}

function cartnumbers(product)
{
    let productNumbers=localStorage.getItem('cartNumbers');
    productNumbers=parseInt(productNumbers);

    if(productNumbers)
    {
        localStorage.setItem('cartNumbers',productNumbers+1);
        document.querySelector('.cart-count').textContent=productNumbers+1;
    }
    else
    {
        localStorage.setItem('cartNumbers',1);
        //set cart value on html page
        document.querySelector('.cart-count').textContent=1;
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
    //console.log("my cartCost is ",cartCost);

    if(cartCost!=null)
    {
        //console.log("cartcost===",cartCost);
        cartCost=parseInt(cartCost);
        localStorage.setItem("totalCost",cartCost+product.price);
    }
    else
    {
        let stringprice= (product.price);
        stringprice=stringprice.toString();
        localStorage.setItem("totalCost",stringprice);
        //console.log("type of product.price=",typeof(stringprice));
    }
}
function displayCart()
{
    let cartItems = localStorage.getItem("productInCart");
    let carttotalcost = localStorage.getItem("totalCost");
    cartItems=JSON.parse(cartItems);
    
    /*console.log("value of womenrunner=",cartItems.womenrunner.img);
     let imagincart=document.getElementById("imagincart");
    let nameitemcart=document.getElementById("nameitemcart");
    let priceitemcart=document.getElementById("priceitemcart");
    let detailitemcart=document.getElementById("detailitemcart");
    let quantityitemcart=document.getElementById("quantityitemcart");
    let removeitemcart=document.getElementById("imagincart"); */
    let productContainer = document.querySelector(".cart-item-list");
    let totalprice=document.getElementById("cart-price-total");
    let count=0;

    /* imagincart.src=cartItems.womenrunner.img;
    nameitemcart.innerText=cartItems.womenrunner.name;
    priceitemcart.innerText=cartItems.womenrunner.price;
    detailitemcart.innerText="detail";
    quantityitemcart.innerText=cartItems.womenrunner.inCart;
    console.log("total product=",cartItems.womenrunner.inCart); 
    console.log("total product=",cartItems.womenrunner.inCart);*/

    if(cartItems&& productContainer)
    { 
        let cartitemid;
        
        productContainer.innerHTML='';
          Object.values(cartItems).map(item=>
            {
                if(item.inCart>0)
                {
                    cartitemid="item-"+count;
                 productContainer.innerHTML+='<li id="list'+cartitemid+'" class="cartitemlist flex py-6">'
                      +'<div  class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">'
                        +'<img id="img'+cartitemid+'" src="'+item.img+'" alt=" Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="cartitemimage h-full w-full object-cover object-center">'
                      +'</div>'
                      +'<div class="ml-4 flex flex-1 flex-col">'
                        +'<div>'
                          +'<div class="flex justify-between text-base font-medium text-gray-900">'
                            +'<h3>'
                              +'<a href="#">Throwback Hip Bag</a>'
                            +'</h3>'
                            +'<p id="price'+cartitemid+'" class="cartitemprice ml-4">$'+item.price+'.00</p>'
                          +'</div>'
                          +'<p id="name'+cartitemid+'" class="cartitemname mt-1 text-sm text-gray-500">'+item.name+'</p>'
                          +'<p id="tag'+cartitemid+'" class="cartitemtag mt-1 text-sm text-gray-500">'+item.tag+'</p>'
                        +'</div>'
                        +'<div class="flex flex-1 items-end justify-between text-sm">'
                          +'<p id="quantity'+cartitemid+'" class=" cartitemquantity text-gray-500">'+item.inCart+'</p>'
                          +'<div id="removediv'+cartitemid+'" class="flex">'
                          +'</div>'
                        +'</div>'
                      +'</div>'
                    +'</li>';
                    let btnid="removebtn"+count;
                    //console.log("id of remove btn=",btnid);
                    const button = document.createElement('button');
                    button.setAttribute('id', btnid);
                    button.setAttribute('class', 'text-indigo-600');
                    button.classList.add('hover:text-indigo-500');
                    button.classList.add('font-medium');
                    button.textContent= 'Remove';
                    document.getElementById("removediv"+cartitemid).appendChild(button);
                    
                    count=count+1;
                }                    
            }) 
            let btncount=0;
            for (var key in cartItems) 
            {
                
                if (cartItems.hasOwnProperty(key)) {
                  // alert(cartItems[key].name);
                  // alert(cartItems[key].price);
                  let listid="listitem-"+btncount;
                  // console.log("listid for remove btn=",listid);
                   document.getElementById("removebtn"+btncount).addEventListener('click',()=>{
                   let cartitemlist=document.getElementById(listid);
                   removecartitem(cartitemlist);
                });
                }
                //console.log("btncount=",btncount);
                btncount=btncount+1;
             }

            totalprice.innerText=(carttotalcost).toString();
            
            
    }

}

   // remove item from cart


 
onLoadCartNumbers();
displayCart();


/*let cartitemlist=document.getElementsByClassName("cartitemlist");
let cartitemlist2=document.getElementById("listitem-1");
let child=cartitemlist2.querySelector(".cartitemprice").innerText;
let cartprice=document.querySelector('.cartitemlist .cartitemprice'); */




//remove item from cart
/* for(let i=0;i<removebutton.length;i++)
{
    // call when click on add to cart button
    let idoflist="listitem-"+i;
    let cartitemlist=document.getElementById(idoflist);
    //console.log("id of list",cartitemlist.id);
    removebutton[i].addEventListener('click',()=>{
        removecartitem(cartitemlist);
    })
}*/
function removecartitem(cartitemlist)
{
  //console.log("Remove button working fine from removecartitem");
  let tag=cartitemlist.querySelector(".cartitemtag").innerText;
  let price=cartitemlist.querySelector(".cartitemprice").innerText.replace('$','');
  price=parseInt(price);
  let quantity=cartitemlist.querySelector(".cartitemquantity").innerText;
  
  let cartItems = localStorage.getItem("productInCart");
  let carttotalcost = localStorage.getItem("totalCost");
  let cartNumbers = localStorage.getItem("cartNumbers");
  cartItems=JSON.parse(cartItems);
  
  //console.log("total cost after remove item=",carttotalcost)
  //let newquantity =cartItems["womenrunner333"].inCart+=1; 
  //let tagarray =cartItems["womenrunner333"]; 
  //console.log("first item of jsonarray=",cartItems[1]);
  /* let data={
        name:name,
        tag:tag,
        img:image,
        price:price,
        inCart:quantity
    }; */
  
  //console.log("data array tage value=",data.tag);
  if(cartItems!=null)
    {
        if(cartItems[tag].tag==tag)
        {
            if(quantity>0)
            {
                cartItems[tag].inCart-=1;
                carttotalcost=carttotalcost-price;
                quantity=quantity-1;
                //console.log("old value of cartnumber=",cartNumbers);
                cartNumbers=cartNumbers-1;
                //console.log("new value of cartnumber=",cartNumbers);

                carttotalcost=carttotalcost.toString();
                cartitemlist.querySelector(".cartitemquantity").innerText=quantity;
                //document.querySelector('.cart span').textContent=productNumbers-1;
                document.getElementById("cart-price-total").textContent=carttotalcost;
                if(quantity<=0)
                {
                    cartitemlist.classList.add("hidden");
                    delete cartItems[tag];
                }
    
                localStorage.setItem('cartNumbers',cartNumbers);
                localStorage.setItem("totalCost",carttotalcost);
                localStorage.setItem("productInCart",JSON.stringify(cartItems));
                
            }        
        }
    }
    
    onLoadCartNumbers();
}


function displayCartcheckout()
{
    let cartItems = localStorage.getItem("productInCart");
    let carttotalcost = localStorage.getItem("totalCost");
    cartItems=JSON.parse(cartItems);
    
    /*console.log("value of womenrunner=",cartItems.womenrunner.img);
     let imagincart=document.getElementById("imagincart");
    let nameitemcart=document.getElementById("nameitemcart");
    let priceitemcart=document.getElementById("priceitemcart");
    let detailitemcart=document.getElementById("detailitemcart");
    let quantityitemcart=document.getElementById("quantityitemcart");
    let removeitemcart=document.getElementById("imagincart"); */
    let productContainer = document.querySelector(".cart-item-checkout");
    let totalprice=document.getElementById("cart-price-total");
    let count=0;

    /* imagincart.src=cartItems.womenrunner.img;
    nameitemcart.innerText=cartItems.womenrunner.name;
    priceitemcart.innerText=cartItems.womenrunner.price;
    detailitemcart.innerText="detail";
    quantityitemcart.innerText=cartItems.womenrunner.inCart;
    console.log("total product=",cartItems.womenrunner.inCart); 
    console.log("total product=",cartItems.womenrunner.inCart);*/

    if(cartItems&& productContainer)
    { 
        let cartitemid;
        
        productContainer.innerHTML='';
          Object.values(cartItems).map(item=>
            {
                if(item.inCart>0)
                {
                    cartitemid="item-"+count;
                 productContainer.innerHTML+='<li id="list'+cartitemid+'" class="cartitemlist flex py-6">'
                      +'<div  class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">'
                        +'<img id="img'+cartitemid+'" src="'+item.img+'" alt=" Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="cartitemimage h-full w-full object-cover object-center">'
                      +'</div>'
                      +'<div class="ml-4 flex flex-1 flex-col">'
                        +'<div>'
                          +'<div class="flex justify-between text-base font-medium text-gray-900">'
                            +'<h3>'
                              +'<a href="#">Throwback Hip Bag</a>'
                            +'</h3>'
                            +'<p id="price'+cartitemid+'" class="cartitemprice ml-4">$'+item.price+'.00</p>'
                          +'</div>'
                          +'<p id="name'+cartitemid+'" class="cartitemname mt-1 text-sm text-gray-500">'+item.name+'</p>'
                          +'<p id="tag'+cartitemid+'" class="cartitemtag mt-1 text-sm text-gray-500">'+item.tag+'</p>'
                        +'</div>'
                        +'<div class="flex flex-1 items-end justify-between text-sm">'
                          +'<p id="quantity'+cartitemid+'" class=" cartitemquantity text-gray-500">'+item.inCart+'</p>'
                          +'<div id="removediv'+cartitemid+'" class="flex">'
                          +'</div>'
                        +'</div>'
                      +'</div>'
                    +'</li>';
                    let btnid="removebtn"+count;
                    //console.log("id of remove btn=",btnid);
                    const button = document.createElement('button');
                    button.setAttribute('id', btnid);
                    button.setAttribute('type', 'button');
                    button.setAttribute('class', 'text-indigo-600');
                    button.classList.add('hover:text-indigo-500');
                    button.classList.add('font-medium');
                    button.textContent= 'Remove';
                    document.getElementById("removediv"+cartitemid).appendChild(button);
                    
                    count=count+1;
                }                    
            }) 
            let btncount=0;
            for (var key in cartItems) 
            {
                
                if (cartItems.hasOwnProperty(key)) {
                  // alert(cartItems[key].name);
                  // alert(cartItems[key].price);
                  let listid="listitem-"+btncount;
                  // console.log("listid for remove btn=",listid);
                   document.getElementById("removebtn"+btncount).addEventListener('click',()=>{
                   let cartitemlist=document.getElementById(listid);
                   removecartitem(cartitemlist);
                });
                }
                //console.log("btncount=",btncount);
                btncount=btncount+1;
             }

            totalprice.innerText=(carttotalcost).toString();
            
            
    }

}

