export function initCart() {
  const cart = JSON.parse(localStorage.getItem("cart"));
  const cartBody = document.getElementById("cart-body");
  if (cart === null || cart.length === 0) {
    cartBody.innerHTML = "<h3>La cesta está vacía</h3>";
  } else {
    for (const item of cart) {
      cartBody.innerHTML += `
          <div class="card mb-3" id="${item["screeningId"]}" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-4">
                    <img src="${item["poster"]}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-8 align-content-center">
                    <div class="card-body" data-id="${item["screeningId"]}">
                            <h5 class="card-title">${item["movieTitle"]}</h5>
                            <p class="card-text">${item["day"]} | ${item["time"]}</p>
                            <p class="card-text">Sala ${item["screen"]}</p>
                            <p class="card-text">Precio: ${item["price"]} €</p>
                            <label>Cantidad:</label>
                            <input min="1" max="10" onkeydown="return false" type="number" value="${item["quantity"]}" style="max-width: 3rem;" class="quantity">
                            <i class="bi bi-trash3-fill ms-2" style="cursor: pointer;"></i> 
                    </div>
                </div>
            </div>
          </div>
      `;
    }
    cartBody.innerHTML += `
    <h4 id="total-price" class="text-center">Total: </h4>    
    <button id="buy-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#thanks-modal">Finalizar compra</button>   
    `;
    updatePrice();
  }

  const trashIcons = document.querySelectorAll(".bi-trash3-fill");
  for (const trashIcon of trashIcons) {
    trashIcon.addEventListener("click", () => {
      const id = parseInt(trashIcon.parentElement.getAttribute("data-id"));
      const ticket = document.getElementById(`${id}`);
      ticket.remove();

      let cart = JSON.parse(localStorage.getItem("cart"));
      cart = cart.filter((ticket) => ticket.screeningId !== id);

      if (cart.length === 0) {
        cartBody.innerHTML = "<h3>La cesta está vacía</h3>";
      }

      localStorage.setItem("cart", JSON.stringify(cart));

      updatePrice();
    });
  }

  const quantityInputs = document.querySelectorAll(".quantity");
  for (const quantityInput of quantityInputs) {
    quantityInput.addEventListener("input", () => {
      const id = parseInt(quantityInput.parentElement.getAttribute("data-id"));
      let quantity = parseInt(quantityInput.value);
      let cart = JSON.parse(localStorage.getItem("cart"));

      for (const item of cart) {
        if (item["screeningId"] === id) {
          item["quantity"] = quantity;
        }
      }

      localStorage.setItem("cart", JSON.stringify(cart));
      updatePrice();
    });
  }

  document.getElementById("buy-button").addEventListener("click", () => {
    const cartBody = document.getElementById("cart-body");
    cartBody.innerHTML = ``;
    let cart = JSON.parse(localStorage.getItem("cart"));
    cart = [];
    localStorage.setItem("cart", JSON.stringify(cart));
  });
}

export function updatePrice() {
  let cart = JSON.parse(localStorage.getItem("cart"));
  let totalPrice = 0;
  for (const item of cart) {
    totalPrice += item["price"] * item["quantity"];
  }
  document.getElementById("total-price").innerText = `Total: ${totalPrice} €`;
}
