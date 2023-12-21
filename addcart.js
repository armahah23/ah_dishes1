const btnCart = document.querySelector("#cart-icon");
const cart = document.querySelector(".cart");
const btnClose = document.querySelector("#cart-close");

btnCart.addEventListener("click", () => {
  cart.classList.add("cart-active");
});

btnClose.addEventListener("click", () => {
  cart.classList.remove("cart-active");
});

document.addEventListener("DOMContentLoaded", loadfood);

function loadfood() {
  loadContent();
}

function loadContent() {
  //Remove food items from cart
  let btnRemove = document.querySelectorAll(".cart-remove");
  btnRemove.forEach((btn) => {
    btn.addEventListener("click", removeItem);
  });

  //prodect item change event
  let qtyElements = document.querySelectorAll(".cart-quantity");
  qtyElements.forEach((input) => {
    input.addEventListener("change", changeQty);
  });

  //product cart
  let cartBtns = document.querySelectorAll(".add-cart");
  cartBtns.forEach((btn) => {
    btn.addEventListener("click", addCart);
  });

  updateTotal();
}

//Remove food items from cart
function removeItem() {
  if (confirm("Are you sure to remove?")) {
    let title=this.parentElement.querySelector('.cart-food-title').innerHTML;
    itemlist=itemlist.filter(el=>el.title!=title);
    this.parentElement.remove();
    loadContent();
  }
}

//Change quantity of food items
function changeQty() {
  if (isNaN(this.value) || this.value <= 1) {
    this.value = 1;
  }
  loadContent();
}

let itemlist=[];

//addCart
function addCart() {
  let food = this.parentElement;
  let title = food.querySelector(".food-title").innerHTML;
  let price = food.querySelector(".price").innerHTML;
  let itemNo = food.querySelector(".itum-num").innerHTML;
  //console.log(title, price,itemNo);

  let newProduct={title,price,itemNo}

  //check Product already exist in cart
  if(itemlist.find((el)=>el.title==newProduct.title)){
    alert('Already added to cart');
    return
  } else {
    itemlist.push(newProduct);
  }

  let newProductElement=createCartProduct(title,price,itemNo);
  let element=document.createElement('div');
  element.innerHTML=newProductElement;
  let cartBasket=document.querySelector(".cart-content");
  cartBasket.append(element);
  loadContent();
}

function createCartProduct(title,price,itemNo) {
  return `
  <div class="cart-box">
            <div class="detail-box">
              <div class="cart-food-title">${title}</div>
              <div class="itemNo">${itemNo}</div>
              <div class="price-box">
                <div class="cart-price">${price}</div>
                <div class="cart-amt">${price}</div>
              </div>
              <input type="number" value="1" class="cart-quantity" />
            </div>
            <ion-icon name="trash" class="cart-remove"></ion-icon>
          </div>
          `;
}

function updateTotal() {
  const cartItems=document.querySelectorAll('.cart-box');
  const totalValue=document.querySelector('.total-price');
  
  let total=0;

  cartItems.forEach(product=>{
    let priceElement=product.querySelector('.cart-price');
    let price=parseFloat(priceElement.innerHTML.replace('Rs.',''));
    let qty=product.querySelector('.cart-quantity').value;
    total+=(price*qty);
    product.querySelector('.cart-amt').innerText='Rs.'+(price*qty);
  });

  totalValue.innerText='Rs.'+total;

  //Add product count

  const cartCount=document.querySelector('.cart-count');
  let count=itemlist.length;
  cartCount.innerText=count;

  if(count==0){
    cartCount.style.display='none';
  } else {
    cartCount.style.display='block';
  }
}



