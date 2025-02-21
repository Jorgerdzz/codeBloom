import initSignUp from "./modules/initSignUp.js";
import initEditAccount from "./modules/initEditAccount.js";
import initDeleteAccount from "./modules/initDeleteAccount.js";
import initMovie from "./modules/initMovie.js";
import { initCart, updatePrice } from "./modules/initCart.js";
import initContact from "./modules/initContact.js";

document.addEventListener("DOMContentLoaded", () => {
  const page = document.body.dataset.page;

  switch (page) {
    case "crear-cuenta":
      initSignUp();
      break;
    case "modificar-cuenta":
      initEditAccount();
      break;
    case "eliminar-cuenta":
      initDeleteAccount();
      break;
    case "pelicula":
      initMovie();
      break;
    case "cesta":
      initCart();
      break;
    case "contacto":
      initContact();
      break;
    default:
      break;
  }
});
