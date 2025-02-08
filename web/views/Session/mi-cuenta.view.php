<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
  <div class="container">
    <h1 class="text-center">MI CUENTA</h1>
    <div class="row justify-content-center">
      <div class="col-10 col-md-4">
        <p><strong>Nombre:</strong> <?= $fullName; ?></p>
        <p><strong>Correo electrónico:</strong> <?= $email; ?></p>
        <div class="d-grid gap-2">
          <a class="btn btn-outline-primary">Actualizar datos</a>
          <a class="btn btn-primary" href="<?= BASE_PATH . '/cerrar-sesion'; ?>">Cerrar sesión</a>
          <a class="btn btn-danger">Eliminar cuenta</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require 'views/partials/footer.php'; ?>