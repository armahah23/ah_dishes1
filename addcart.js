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
}

//Remove food items from cart
function removeItem() {
  if (confirm("Are you sure to remove?")) {
    this.parentElement.remove();
  }
}

//Change quantity of food items
function changeQty() {
  if (isNaN(this.value) || this.value <= 1) {
    this.value = 1;
  }
}

//addCart
function addCart() {
  let food = this.parentElement;
  let title = food.querySelector(".food-title").innerHTML;
  let price = food.querySelector(".price").innerHTML;
  //let itemNo = food.querySelector(".item-num").innerHTML;
  console.log(title, price);
}
