    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_PATH . '/'; ?>">
                <img class="img-fluid" style="width: 15rem;" src="<?= BASE_PATH . '/views/images/logo.png'; ?>" alt="">
            </a>
            <button class="navbar-toggler btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <?php
                    if (!isset($_SESSION['currentUser'])) {
                        echo '<a class="nav-link order-md-4" href="' . BASE_PATH .  '/iniciar-sesion"><i class="bi bi-person-circle"></i>&nbspIniciar sesión</a>';
                    } else {
                        echo '<a class="nav-link order-md-4" href="' . BASE_PATH .  '/mi-cuenta">' .
                            '<i class="bi bi-person-circle"></i>' . " "
                            . htmlspecialchars($_SESSION['currentUser']['name'], ENT_QUOTES) . '</a>';
                    }
                    ?>
                    <a class="nav-link order-md-5" href="<?= BASE_PATH . '/cesta'; ?>"><i class="bi bi-bag"></i>&nbsp;Cesta</a>
                    <a class="nav-link order-md-1" href="<?= BASE_PATH; ?>#cartelera">Cartelera</a>
                    <a class="nav-link order-md-2" href="<?= BASE_PATH . '/contacto'; ?>">Contacto</a>
                    <a class="nav-link order-md-3" href="<?= BASE_PATH . '/sobre-nosotros'; ?>">Sobre nosotros</a>
                </div>
            </div>
        </div>
    </nav>