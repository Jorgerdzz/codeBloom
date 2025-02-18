<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <h1><?= $title; ?></h1>
        <div class="row g-4 justify-content-center">
            <div class="col-5 col-md-2">
                <img src='<?= BASE_PATH . "/views/images/posters/{$id}.webp"; ?>' alt="" id="poster" class="img-fluid">
            </div>
            <div class="col-7 col-md-2 order-md-2">
                <div>
                    <h4>Duración</h4>
                    <p><?= $runningTime; ?> minutos</p>
                </div>
                <div>
                    <h4>Fecha de estreno</h4>
                    <p><?= $releaseDate; ?></p>
                </div>
                <div>
                    <p><?= $ageRating; ?></p>
                </div>
            </div>
            <div class="col-12 col-md-8 order-md-1">
                <div>
                    <h4>Dirección</h4>
                    <p><?= $director; ?></p>
                </div>
                <div>
                    <h4>Actores</h4>
                    <p><?= $cast; ?></p>
                </div>
                <div>
                    <h4>Sinopsis</h4>
                    <p><?= $summary; ?></p>
                </div>
                <div class="row d-flex justify-content-center mb-3">
                    <h4>Sesiones</h4>
                    <div class="nav nav-pills" id="days" role="tablist">
                        <?php
                        for ($i = 0; $i < sizeof($days); $i++) {
                            if ($i === 0) {
                                echo "<button class='nav-link active' id='day" . ($i + 1) . "' data-bs-toggle='tab' data-bs-target='#day" . ($i + 1) . "-pane' type='button' role='tab' aria-controls='day" . ($i + 1) . "-pane' aria-selected='true'>" . reverseDate($days[$i]) . "</button>";
                            } else {
                                echo "<button class='nav-link' id='day" . ($i + 1) . "' data-bs-toggle='tab' data-bs-target='#day" . ($i + 1) . "-pane' type='button' role='tab' aria-controls='day" . ($i + 1) . "-pane' aria-selected='false'>" . reverseDate($days[$i]) . "</button>";
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-content mt-3 d-flex justify-content-center" id="screenings">
                        <?php
                        for ($i = 0; $i < sizeof($days); $i++) {
                            if ($i === 0) {
                                echo "<div class='tab-pane fade show active' id='day" . ($i + 1) . "-pane' role='tabpanel' aria-labelledby='day" . ($i + 1) . "' tabindex='0' data-day='{$days[$i]}'>";
                            } else {
                                echo "<div class='tab-pane fade' id='day" . ($i + 1) . "-pane' role='tabpanel' aria-labelledby='day" . ($i + 1) . "' tabindex='0' data-day='{$days[$i]}'>";
                            }
                            foreach ($screenings as $screening) {
                                if ($screening['fecha'] === $days[$i]) {
                                    echo "<a href='" . BASE_PATH . "/cesta' type='button' class='btn btn-outline-primary btn-lg rounded-0 mx-2' data-id='{$screening['id']}' data-price='8'>{$screening['hora']}</a> ";
                                }
                            }
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>