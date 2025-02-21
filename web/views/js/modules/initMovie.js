export default function initMovie() {
  const screenings = document.querySelectorAll("#screenings a");
  for (const screening of screenings) {
    screening.addEventListener("click", (event) => {
      event.preventDefault();

      const ticket = {
        screeningId: parseInt(screening.getAttribute("data-id")),
        movieTitle: document.querySelector("h1").innerText,
        poster: document.querySelector("#poster").src,
        screen: parseInt(screening.getAttribute("data-screen")),
        day: screening.parentElement.getAttribute("data-day"),
        time: screening.innerText,
        price: Number(screening.getAttribute("data-price")),
        quantity: 1,
      };

      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      let inCart = false;

      for (const item of cart) {
        if (ticket.screeningId === item.screeningId) {
          inCart = true;
          if (item.quantity < 10) {
            item.quantity++;            
          }
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
