<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <h1 class="text-center">Contacto</h1>
        <div class="row justify-content-center">
            <div class="col-10 col-md-4">
                <form method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" aria-describedby="lastNameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Tu mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input id="privacy" type="checkbox">
                        <label for="privacy" class="form-label">Acepto la política de privacidad</label>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" id="send" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>