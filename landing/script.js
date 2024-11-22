const imagenes = document.querySelectorAll(".imagenes img");
const puntos = document.querySelectorAll(".punto");
const anterior = document.querySelector(".anterior");
const siguiente = document.querySelector(".siguiente");

let indiceCarrusel = 0;

/* Muestra en el carrusel la imagen cuyo índice coincide con el índice que se ha pasado como argumento.
Se recorre todo el array de imágenes para añadir la clase "activo" a la imagen con ese índice y quitársela a las demás.
Finalmente, se activa el punto de navegación correspondiente a esa imagen (es decir, el que tiene el mismo índice). */
function mostrarImagen(indice) {
    imagenes.forEach((imagen, i) => {
        if (i === indice) {
            imagen.classList.add("activo");
        } else {
            imagen.classList.remove("activo");
        }
    });
    activarPunto(indice);
}

/* La función que activa un punto de navegación concreto. La lógica es igual que en la anterior. */
function activarPunto(indice) {
    puntos.forEach((punto, i) => {
        if (i === indice) {
            punto.classList.add("activo");
        } else {
            punto.classList.remove("activo");
        }
    });
}

/* Avanza o retrocede una imagen en el carrusel, dependiendo de la dirección indicada ('1' avanza; '-1' retrocede).
En primer lugar, se actualiza el índice sumándole o restándole la dirección (es decir, sumándole o restándole 1).
En segundo lugar, se comprueba si el índice se sale del array de imágenes por alguno de los dos lados.
De ser así, significa que hay que ajustarlo para que continúe desde el otro lado.
Por último, se utiliza la función anterior para mostrar la imagen que corresponde al nuevo índice. */
function desplazarCarrusel(direccion) {
    indiceCarrusel += direccion;
    if (indiceCarrusel < 0) {
        indiceCarrusel = imagenes.length - 1;
    } else if (indiceCarrusel >= imagenes.length) {
        indiceCarrusel = 0;
    }
    mostrarImagen(indiceCarrusel);
}

let autoplay;

/* Inicia o reinicia el autoplay del carrusel y lo programa para avanzar una imagen cada cinco segundos. 
Se utiliza una variable global porque debe seguir siendo accesible al acabar la función si se quiere poder reiniciar más adelante el temporizador. */
function iniciarAutoplay() {
    clearInterval(autoplay);
    autoplay = setInterval(() => {
        desplazarCarrusel(1);
    }, 5000);
}

/* Se añade un event listener al botón de retroceder para que retroceda una imagen y reinicie el temporizador del autoplay.*/
anterior.addEventListener("click", () => {
    desplazarCarrusel(-1);
    iniciarAutoplay();;
});

/* Se añade un event listener al botón de avanzar para que avance una imagen y reinicie el temporizador del autoplay.*/
siguiente.addEventListener("click", () => {
    desplazarCarrusel(1);
    iniciarAutoplay();
});

/* Se añade un event listener a todos los puntos de navegación para que, al hacer clic sobre cualquiera de ellos,
actualicen el índice del carrusel y luego muestren la imagen correspondiente. Igual que con los botones, se reinicia el temporizador del autoplay. */
puntos.forEach((punto, i) => {
    punto.addEventListener("click", () => {
        indiceCarrusel = i;
        mostrarImagen(i);
        iniciarAutoplay();
    })
});

iniciarAutoplay();