const imagenes = document.querySelectorAll(".imagenes img");
const anterior = document.querySelector(".anterior");
const siguiente = document.querySelector(".siguiente");
const puntos = document.querySelectorAll(".punto");

let autoplay;
let indice = 0;

function mostrarImagen(indice) {
    imagenes.forEach((imagen, i) => {
        imagen.classList.remove("activo");
        if (i === indice) {
            imagen.classList.add("activo");
        }
    });
    actualizarPuntos(indice);
}

function cambiarImagen(direccion) {
    indice += direccion;
    if (indice < 0) {
        indice = imagenes.length - 1;
    } else if (indice >= imagenes.length) {
        indice = 0;
    }
    mostrarImagen(indice);
}

function irAImagen(nuevaImagen) {
    indice = nuevaImagen;
    mostrarImagen(indice);
}

function actualizarPuntos(indice) {
    puntos.forEach((punto, i) => {
        punto.classList.remove("activo");
        if (i === indice) {
            punto.classList.add("activo");
        }
    });
}

function iniciarAutoplay() {
    clearInterval(autoplay);
    autoplay = setInterval(() => {
        cambiarImagen(1);
    }, 5000);
}

anterior.addEventListener("click", () => {
    cambiarImagen(-1);
    iniciarAutoplay();;
});

siguiente.addEventListener("click", () => {
    cambiarImagen(1);
    iniciarAutoplay();
});

puntos.forEach((punto, i) => {
    punto.addEventListener("click", () => {
        irAImagen(i);
        iniciarAutoplay();
    })
});

mostrarImagen(indice);
iniciarAutoplay();