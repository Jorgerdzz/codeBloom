export default function initCart() {
  const cart = JSON.parse(localStorage.getItem("cart"));
  const cartBody = document.getElementById("cart-body");
  if (cart === null || cart.length === 0) {
    const h3 = document.createElement("h3");
    h3.innerText = "La cesta está vacía";
    cartBody.appendChild(h3);
  } else {
    for (const item of cart) {
      const ticket = `
          <h3>${item["movieTitle"]}</h3>
          <p>${item["day"]} | ${item["time"]}</p>
          `;
      cartBody.innerHTML += ticket;
    }
  }
}
