//add function 
function addToCart() {
  // selecting the element quantity on HTML file
  let quantityElement = document.getElementById("cart-quantity");
  // extracting the element quantity by using textContent = text contained by the element we are looking for
  // parseInt to convert textContent to a number 
  let quantity = parseInt(quantityElement.textContent);
  // incrementing quantity
  quantity++;
  // updating quantity display
  quantityElement.textContent = quantity;
}


//remove function
function removeFromCart() {
  let quantityElement = document.getElementById("cart-quantity");
  let quantity = parseInt(quantityElement.textContent);
  quantity--;
  quantityElement.textContent = quantity; 
}



