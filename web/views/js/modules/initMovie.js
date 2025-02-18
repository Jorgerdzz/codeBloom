export default function initMovie() {
  const screenings = document.querySelectorAll("#screenings a");
  for (const screening of screenings) {
    screening.addEventListener("click", (event) => {
      event.preventDefault();

      const ticket = {
        screeningId: parseInt(event.target.getAttribute("data-id")),
        movieTitle: document.querySelector("h1").innerText,
        poster: document.querySelector("#poster").src,
        day: event.target.parentElement.getAttribute("data-day"),
        time: event.target.innerText,
        price: Number(event.target.getAttribute("data-price")),
        quantity: 1,
      };

      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      let inCart = false;

      for (const item of cart) {
        if (ticket.screeningId === item.screeningId) {
          item.quantity++;
          inCart = true;
          break;
        }
      }

      if (!inCart) {
        cart.push(ticket);
      }

      localStorage.setItem("cart", JSON.stringify(cart));
      window.location.href = event.target.href;
    });
  }
}
