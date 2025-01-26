<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<main>
  <div class="container">
    <h1 class="text-center">Crear cuenta</h1>
    <div class="row justify-content-center">
      <div class="col-10 col-md-4">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <i class="bi bi-check-lg d-none" id="name-check"></i>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="last-name" class="form-label">Apellido</label>
            <i class="bi bi-check-lg d-none" id="last-name-check"></i>
            <input type="text" class="form-control" id="last-name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <i class="bi bi-check-lg d-none" id="email-check"></i>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <i class="bi bi-check-lg d-none" id="password-check"></i>
            <input type="password" class="form-control" id="password" placeholder="Al menos ocho caracteres">
          </div>
          <div class="mb-3">
            <label for="password-confirm" class="form-label">Confirma la contraseña</label>
            <i class="bi bi-check-lg d-none" id="password-confirm-check"></i>
            <input type="password" class="form-control" id="password-confirm">
          </div>
          <div class="d-grid">
            <button class="btn btn-primary" id="signin" type="button" disabled>Registrarse</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require 'partials/footer.php'; ?>