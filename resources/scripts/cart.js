let addButtons = document.querySelectorAll(".add");
let cart = document.getElementById("cart-js");


for (let addBtn of addButtons) {
  addBtn.addEventListener("click", async () => {
    window.history.forward();
    let response = await fetch("/addCart");
    let data = await response.json();
    let quantityCart = Object.values(data);
    setCartQuantity(quantityCart);
    
  });
}

function setCartQuantity(quantityCart) {
  let cartQuantity = document.getElementById("cartincrement");
  cartQuantity.innerHTML = quantityCart;
}
