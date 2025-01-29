<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <h1>Título película</h1>
        <div class="row g-4 justify-content-center">
            <div class="col-5 col-md-2">
                <img src="views/images/cartel1.webp" alt="" class="img-fluid">
            </div>
            <div class="col-7 col-md-2 order-md-2">
                <div>
                    <h4>DURACIÓN</h4>
                    <p>1h 58m</p>
                </div>
                <div>
                    <h4>FECHA DE ESTRENO</h4>
                    <p>20 diciembre 2024</p>
                </div>
                <div>
                    <p>No recomendada para menores de 7 años</p>
                </div>
            </div>
            <div class="col-12 col-md-8 order-md-1">
                <div>
                    <h4>DIRECCIÓN</h4>
                    <p>Barry Jenkins </p>
                </div>
                <div>
                    <h4>ACTORES</h4>
                    <p>Kelvin Harrison Jr., Mads Mikkelsen, Beyoncé Knowles-Carter, Keith David, Lennie James,
                        agiso Lediga, Anika Noni Rose, Blue Ivy Carter, John Kani, Aaron Pierre, Thandiwe
                        Newton, Tiffany Boone, Preston Nyman, Billy Eichner, Seth Rogen</p>
                </div>
                <div>
                    <h4>SINOPSIS</h4>
                    <p>Precuela de 'El rey león' (2019). Cuenta la historia de origen del padre de Simba,
                        Mufasa, explorando su infancia al crecer con su hermano Scar.</p>
                </div>
                <div class="row d-flex justify-content-center mb-3">
                    <h4>SESIONES</h4>
                    <div>
                        <div class="nav nav-pills justify-content-between" id="myTab" role="tablist">
                            <button class="nav-link active" id="day1" data-bs-toggle="tab" data-bs-target="#day1-pane" type="button" role="tab" aria-controls="day1-pane" aria-selected="true">20/01/2025</button>
                            <button class="nav-link" id="day2" data-bs-toggle="tab" data-bs-target="#day2-pane" type="button" role="tab" aria-controls="day2-pane" aria-selected="false">21/01/2025</button>
                            <button class="nav-link" id="day3" data-bs-toggle="tab" data-bs-target="#day3-pane" type="button" role="tab" aria-controls="day3-pane" aria-selected="false">22/01/2025</button>
                            <button class="nav-link" id="day4" data-bs-toggle="tab" data-bs-target="#day4-pane" type="button" role="tab" aria-controls="day4-pane" aria-selected="false">23/01/2025</button>
                            <button class="nav-link" id="day5" data-bs-toggle="tab" data-bs-target="#day5-pane" type="button" role="tab" aria-controls="day5-pane" aria-selected="false">24/01/2025</button>
                            <button class="nav-link" id="day6" data-bs-toggle="tab" data-bs-target="#day6-pane" type="button" role="tab" aria-controls="day6-pane" aria-selected="false">25/01/2025</button>
                            <button class="nav-link" id="day7" data-bs-toggle="tab" data-bs-target="#day7-pane" type="button" role="tab" aria-controls="day7-pane" aria-selected="false">26/01/2025</button>
                        </div>
                        <div class="tab-content mt-3 d-flex justify-content-center" id="myTabContent">
                            <div class="tab-pane fade show active" id="day1-pane" role="tabpanel" aria-labelledby="day1" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                            <div class="tab-pane fade" id="day2-pane" role="tabpanel" aria-labelledby="day2" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                            <div class="tab-pane fade" id="day3-pane" role="tabpanel" aria-labelledby="day3" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                            <div class="tab-pane fade" id="day4-pane" role="tabpanel" aria-labelledby="day4" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                            <div class="tab-pane fade" id="day5-pane" role="tabpanel" aria-labelledby="day5" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                            <div class="tab-pane fade" id="day6-pane" role="tabpanel" aria-labelledby="day6" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                            <div class="tab-pane fade" id="day7-pane" role="tabpanel" aria-labelledby="day7" tabindex="0">
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">16:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">18:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">20:00</button>
                                <button type="button" class="btn btn-outline-primary btn-lg rounded-0 mx-2">22:00</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>