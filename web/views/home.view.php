<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="d-flex flex-column align-items-center gap-3">
    <h1 class="text-center">CLÁSICOS QUE PERDURAN, ESTRENOS QUE SORPRENDEN</h1>

    <div id="carousel" class="carousel slide carousel-fade col-lg-9 text-center" data-bs-ride="carousel">
        <div class=" carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= BASE_PATH . '/views/images/carousel/carousel1.webp'; ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= BASE_PATH . '/views/images/carousel/carousel2.webp'; ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= BASE_PATH . '/views/images/carousel/carousel3.webp'; ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= BASE_PATH . '/views/images/carousel/carousel4.webp'; ?>" class="d-block w-100" alt="...">
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

    <form action="<?= BASE_PATH . '/pelicula'; ?>" method="GET" class="my-3">
        <div class="row g-2">
            <div class="col">
                <select name="id" id="movie" class="form-select" aria-label="select movie">
                    <option value="1">Sonic 3 - La película</option>
                    <option value="2">Psicosis</option>
                    <option value="3">Red One</option>
                    <option value="4">12 hombres sin piedad</option>
                    <option value="5">Bitelchús Bitelchús</option>
                    <option value="6">Un lugar en ninguna parte</option>
                    <option value="7">Jurado Nº 2</option>
                    <option value="8">Centauros del desierto</option>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary highlight">Comprar entradas</button>
            </div>
        </div>
    </form>

    <h2 class="" id="cartelera">CARTELERA</h2>

    <div class="container cartelera">
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=1'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/1.webp"'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=2'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/2.webp'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=3'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/3.webp'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=4'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/4.webp'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=5'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/5.webp'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=6'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/6.webp'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=7'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/7.webp'; ?>" alt=""></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="<?= BASE_PATH . '/pelicula?id=8'; ?>"><img class="img-fluid" src="<?= BASE_PATH . '/views/images/posters/8.webp'; ?>" alt=""></a>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>