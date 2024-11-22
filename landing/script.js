const imagenes = document.querySelectorAll(".imagenes img");
const puntos = document.querySelectorAll(".punto");
const anterior = document.querySelector(".anterior");
const siguiente = document.querySelector(".siguiente");

let indiceCarrusel = 0;

/* Avanza o retrocede en el carrusel, dependiendo de la dirección que se pase como argumento ('1' avanza; '-1' retrocede).
En primer lugar, se actualiza el índice sumándole o restándole la dirección (es decir, sumándole o restándole 1).
En segundo lugar, se comprueba si el índice se sale del array de imágenes por alguno de los dos lados.
De ser así, significa que hay que ajustarlo para que continúe desde el otro lado.
Por último, se actualiza el carrusel para reflejar en pantalla el cambio. */
function desplazarCarrusel(direccion) {
    indiceCarrusel += direccion;
    if (indiceCarrusel < 0) {
        indiceCarrusel = imagenes.length - 1;
    } else if (indiceCarrusel >= imagenes.length) {
        indiceCarrusel = 0;
    }
    actualizarCarrusel();
}

/* Actualiza el carrusel para que muestre en pantalla la imagen que corresponde al índice actual, y también cambia el color del punto de navegación correspondiente.
Por defecto, usando CSS, todas las imágenes están ocultas, salvo la que tiene la clase "activo", así que esta función recorre todo el array
de imágenes para añadir la clase 'activo' a la imagen que corresponde al índice actual y quitársela a las demás. En paralelo, hace
lo mismo con los puntos de navegación (en el caso de los puntos, la clase 'activo' se utiliza para el cambio de color). */
function actualizarCarrusel() {
    for (let i = 0; i < imagenes.length; i++) {
        if (i === indiceCarrusel) {
            imagenes[i].classList.add("activo");
            puntos[i].classList.add("activo");
        } else {
            imagenes[i].classList.remove("activo");
            puntos[i].classList.remove("activo");
        }
    }
}

let autoplay;

/* Inicia o reinicia el autoplay del carrusel y lo programa para avanzar una imagen cada cinco segundos. 
Se utiliza una variable global porque la referencia debe seguir siendo accesible al acabar la función si se quiere poder reiniciar más adelante el temporizador. */
function iniciarAutoplay() {
    clearInterval(autoplay);
    autoplay = setInterval(() => {
        desplazarCarrusel(1);
    }, 5000);
}

/* Se añade un event listener al botón de retroceder para que, al hacer clic sobre él, se muestre la imagen anterior y se reinicie el temporizador del autoplay.*/
anterior.addEventListener("click", () => {
    desplazarCarrusel(-1);
    iniciarAutoplay();;
});

/* Se añade un event listener al botón de avanzar para que, al hacer clic sobre él, se muestre la imagen siguiente y se reinicie el temporizador del autoplay.*/
siguiente.addEventListener("click", () => {
    desplazarCarrusel(1);
    iniciarAutoplay();
});

/* Se añade un event listener a todos los puntos de navegación para que, al hacer clic sobre cualquiera de ellos,
se cambie el índice a esa posición y luego se actualice el carrusel. Igual que con los botones, se reinicia el temporizador del autoplay. */
puntos.forEach((punto, i) => {
    punto.addEventListener("click", () => {
        indiceCarrusel = i;
        actualizarCarrusel();
        iniciarAutoplay();
    })
});

iniciarAutoplay();