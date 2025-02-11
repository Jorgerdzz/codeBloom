<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <h1 class="text-center">Modificar datos</h1>
        <?= $errorMessage ?? '' ?>
        <div class="row justify-content-center">
            <div class="col-10 col-md-4">
                <form method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <i class="bi bi-check-lg" id="name-check"></i>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $name; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Apellido</label>
                        <i class="bi bi-check-lg" id="last-name-check"></i>
                        <input type="text" class="form-control" id="last-name" name="last-name" value="<?= $lastName; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <i class="bi bi-check-lg" id="email-check"></i>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $email; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Nueva contraseña (opcional)</label>
                        <i class="bi bi-check-lg d-none" id="new-password-check"></i>
                        <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Al menos ocho caracteres">
                    </div>
                    <div class="mb-3">
                        <label for="new-password-confirm" class="form-label">Confirma la nueva contraseña</label>
                        <i class="bi bi-check-lg d-none" id="new-password-confirm-check"></i>
                        <input type="password" class="form-control" id="new-password-confirm">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña actual (obligatoria)</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" id="update" type="submit" disabled>Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>