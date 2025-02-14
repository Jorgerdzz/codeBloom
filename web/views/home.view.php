<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <h1 class="text-center">CLÁSICOS QUE PERDURAN, ESTRENOS QUE SORPRENDEN</h1>
        <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class=" carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="<?= BASE_PATH . '/pelicula?id=1'; ?>">
                        <img src="<?= BASE_PATH . '/views/images/carousel/carousel1.webp'; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <span class="h2 p-1">Sonic 3 - La película</span>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?= BASE_PATH . '/pelicula?id=2'; ?>">
                        <img src="<?= BASE_PATH . '/views/images/carousel/carousel2.webp'; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <span class="h2 p-1">Psicosis</span>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?= BASE_PATH . '/pelicula?id=3'; ?>">
                        <img src="<?= BASE_PATH . '/views/images/carousel/carousel3.webp'; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <span class="h2 p-1">Red One</span>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?= BASE_PATH . '/pelicula?id=4'; ?>">
                        <img src="<?= BASE_PATH . '/views/images/carousel/carousel4.webp'; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <span class="h2 p-1">Doce hombres sin piedad</span>
                        </div>
                    </a>
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

        <form action="<?= BASE_PATH . '/pelicula'; ?>" method="GET" class="my-3 ">
            <div class="row g-2 justify-content-center">
                <div class="col-auto">
                    <select name="id" id="movie" class="form-select" aria-label="select movie">
                        <?php foreach ($availableMovies as $movie): ?>
                            <option value='<?= $movie['id_pelicula'] ?>'><?= $movie['titulo'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary highlight">Comprar entradas</button>
                </div>
            </div>
        </form>

        <h2 class="text-center" id="cartelera">Cartelera</h2>
        <div class="row g-3 cartelera justify-content-center">
            <?php foreach ($availableMovies as $movie): ?>
                <div class='col-6 col-md-3'>
                    <a href='<?= BASE_PATH ?>/pelicula?id=<?= $movie['id_pelicula'] ?>'>
                        <img class='img-fluid' src='<?= BASE_PATH ?>/views/images/posters/<?= $movie['id_pelicula'] ?>.webp' alt=''>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>