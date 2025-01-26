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
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="lastname" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="lastname">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="d-grid">
            <button class="btn btn-primary" type="button" disabled>Registrarse</button>
          </div>
        </form>        
      </div>
    </div>
  </div>
</main>

<?php require 'partials/footer.php'; ?>