<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <h1 class="text-center">Mi cesta</h1>
    <div class="container">
        <div id="cart-body" class="d-flex flex-column align-items-center"></div>
    </div>
    <div class="modal" id="thanks-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¡Compra realizada con éxito!</h5>
                </div>
                <div class="modal-body text-center">
                    <p>Esperamos que disfrutes esta experiencia en Cine Eternum</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= BASE_PATH . '/' ?>">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>