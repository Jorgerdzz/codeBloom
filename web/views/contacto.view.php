<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
        <h1 class="d-flex justify-content-center">Contacto</h1>
            <div class="col-10 col-md-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary">
                        <p class="m-2"><i class="bi bi-telephone-fill m-1"></i>+34 911 967 231</p> 
                        <p class="m-2"><i class="bi bi-geo-alt-fill m-1"></i> Calle Leonardo Prieto Castro 8, 28040 Madrid</p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>