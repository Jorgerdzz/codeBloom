export default function initCart() {
  const cart = JSON.parse(localStorage.getItem("cart"));
  const cartBody = document.getElementById("cart-body");
  if (cart === null || cart.length === 0) {
    const h3 = document.createElement("h3");
    h3.innerText = "La cesta está vacía";
    cartBody.appendChild(h3);
  } else {
    for (const item of cart) {
      cartBody.innerHTML += `
          <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-4">
                    <img src="${item["poster"]}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-8 align-content-center">
                    <div class="card-body">
                            <h5 class="card-title">${item["movieTitle"]}</h5>
                            <p class="card-text">${item["day"]} | ${item["time"]}</p>
                            <p class="card-text">Sala ${item["screen"]}</p>
                            <p class="card-text">Precio: ${item["price"]} €</p>
                            <label for="quantity">Cantidad:</label>
                            <input type="number" value="${item["quantity"]}" style="max-width: 3rem;" id="quantity">
                            <i class="bi bi-trash3-fill ms-2"></i> 
                    </div>
                </div>
            </div>
        </div>          
      `;
    }
  }
}
