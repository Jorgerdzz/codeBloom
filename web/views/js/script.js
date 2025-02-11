import initSignUp from "./modules/initSignUp.js";
import initEditAccount from "./modules/initEditAccount.js";
import initDeleteAccount from "./modules/initDeleteAccount.js";
import initMovie from "./modules/initMovie.js";
import initCart from "./modules/initCart.js";


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
        default:
            break;
    }
});