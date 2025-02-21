<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <h1 class="text-center">Mi cesta</h1>
    <div class="container text-center">
        <div id="cart-body" class="d-flex flex-column align-items-center text-start"></div>
        <button id="buy-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#thanks-modal" style="display: none">Finalizar compra</button>
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