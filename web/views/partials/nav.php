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
                    <a class="nav-link" href="<?= BASE_PATH; ?>#cartelera">Cartelera</a>
                    <a class="nav-link" href="<?= BASE_PATH . '/contacto'; ?>">Contacto</a>
                    <a class="nav-link" href="<?= BASE_PATH . '/sobre-nosotros'; ?>">Sobre nosotros</a>
                    <?php
                    if (!isset($_SESSION['currentUser'])) {
                        echo '<a class="nav-link" href="' . BASE_PATH .  '/iniciar-sesion">Iniciar sesión</a>';
                    } else {
                        echo '<a class="nav-link" href="' . BASE_PATH .  '/cerrar-sesion">' .
                            "Cerrar sesión ({$_SESSION['currentUser']['name']})</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>