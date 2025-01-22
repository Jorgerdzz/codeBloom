<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<main class="d-flex flex-column align-items-center text-align-center gap-3">
    <h1>CLÁSICOS QUE PERDURAN,<br>ESTRENOS QUE SORPRENDEN</h1>

    <div id="carousel" class="carousel slide carousel-fade col-lg-9 text-center" data-bs-ride="carousel">
        <div class=" carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="views/images/carrusel1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="views/images/carrusel2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="views/images/carrusel3.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="views/images/carrusel4.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <form action="" method="post">
        <div class="row g-2">
            <div class="col">
                <select name="pelicula" id="pelicula" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Película</option>
                    <option value="">Película1</option>
                    <option value="">Película2</option>
                    <option value="">Película3</option>
                    <option value="">Película4</option>
                    <option value="">Película5</option>
                    <option value="">Película6</option>
                    <option value="">Película7</option>
                    <option value="">Película8</option>
                    <option value="">Película9</option>
                    <option value="">Película10</option>
                </select>
            </div>
            <div class="col">
                <select name="dia" id="dia" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Día</option>
                    <option value="">01/01/2025</option>
                    <option value="">02/01/2025</option>
                    <option value="">03/01/2025</option>
                    <option value="">04/01/2025</option>
                    <option value="">05/01/2025</option>
                </select>
            </div>
            <div class="col">
                <select name="sesion" id="sesion" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Sesión</option>
                    <option value="">16:30</option>
                    <option value="">19:00</option>
                    <option value="">21:30</option>
                    <option value="">00:30</option>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary highlight">Comprar</button>
            </div>
        </div>
    </form>

    <h2 class="mt-4">CARTELERA</h2>

    <div class="container cartelera">
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula'; ?>"><img class="img-fluid" src="views/images/cartel1.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel2.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel3.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel4.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel5.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel6.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel7.webp" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><img class="img-fluid" src="views/images/cartel8.webp" alt=""></a>
            </div>
        </div>

    </div>
</main>

<?php require 'partials/footer.php'; ?>