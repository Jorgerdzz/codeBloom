<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<main>
    <div class="container">
        <h2>Título película</h2>
        <div class="row">
            <div class="col-4">
                <img src="views/images/cartel1.webp" alt="" class="img-fluid">
            </div>
            <div class="col-8 col-md-3 order-md-2">
                <div>
                    <h5>DURACIÓN</h5>
                    <p>1h 58m</p>
                </div>
                <div>
                    <h5>FECHA DE ESTRENO</h5>
                    <p>20 diciembre 2024</p>
                </div>
            </div>
            <div class="col-12 col-md-5 order-md-1">
                <div>
                    <h5>DIRECTORES</h5>
                    <p>Barry Jenkins </p>
                </div>
                <div>
                    <h5>ACTORES</h5>
                    <p>Kelvin Harrison Jr., Mads Mikkelsen, Beyoncé Knowles-Carter, Keith David, Lennie James,
                        agiso Lediga, Anika Noni Rose, Blue Ivy Carter, John Kani, Aaron Pierre, Thandiwe
                        Newton, Tiffany Boone, Preston Nyman, Billy Eichner, Seth Rogen</p>
                </div>
                <div>
                    <h5>SINOPSIS</h5>
                    <p>Precuela de 'El rey león' (2019). Cuenta la historia de origen del padre de Simba,
                        Mufasa, explorando su infancia al crecer con su hermano Scar.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'partials/footer.php'; ?>