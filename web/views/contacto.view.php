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
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                            value="<?= $name ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" aria-describedby="lastNameHelp"
                            value="<?= $lastName ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            value="<?= $email ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Tu mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input id="privacy" type="checkbox">
                        <label for="privacy" class="form-label">Acepto la <a href="<?= BASE_PATH . '/politica-privacidad'; ?>" class="link">política de privacidad</a>.</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" id="send" disabled data-bs-toggle="modal" data-bs-target="#contact-modal">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="contact-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¡Mensaje enviado!</h5>
                </div>
                <div class="modal-body text-center">
                    <p>Gracias por ponerte en contacto con nosotros.</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= BASE_PATH . '/' ?>">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>