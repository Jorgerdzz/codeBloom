"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const page = document.body.dataset.page;

    switch (page) {
        case "iniciar-sesion":
            console.log("En el inicio de sesión");
            break;
        default:
            break;
    }
});