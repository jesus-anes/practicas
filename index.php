<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs Dojo Tarraco</title>
    <link rel="icon" href="images/icons/logodojotarraco.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php //require_once('../src/views/layouts/partials/navbar.php'); 
    //include('../src/views/layouts/partials/navbar.php'); 
    include($_SERVER['DOCUMENT_ROOT'] . '/clubjudodojotarraco/src/views/layouts/partials/navbar.php'); ?>


    <!-- Hero Section -->
    <header>
        <section class="bg-primary text-white text-center py-5">
            <div class="container">
                <h1 class="display-4 fw-bold">Descubre Clubs Dojo Tarraco</h1>
                <p class="lead">Formando en deporte, educación y valores</p>
            </div>
        </section>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Sobre nosotros</h2>
                    <p>Dojo Tarraco es un conjunto de clubes dedicados a la formación deportiva y educativa, abarcando Judo, Patinaje en línea, Patinaje artístico y más. Con más de 25 años de experiencia, ofrecemos actividades para todas las edades y niveles.</p>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/ejemplo1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ejemplo2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ejemplo3.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clubs Section -->
    <section id="clubs" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Clubs</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/ejemplo1.jpg" class="card-img-top" alt="Club Judo Dojo Tarraco">
                        <div class="card-body text-center">
                            <h5 class="card-title">Club Judo Dojo Tarraco</h5>
                            <p class="card-text">Nuestro club principal con enfoque en judo y valores educativos.</p>
                            <a href="judo-dojo-tarraco.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/ejemplo3.jpg" class="card-img-top" alt="Club Judo Roda">
                        <div class="card-body text-center">
                            <h5 class="card-title">Club Judo Roda</h5>
                            <p class="card-text">Expandiendo los valores del judo en la región.</p>
                            <a href="judo-roda.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/ejemplo2.jpg" class="card-img-top" alt="Club Patina Dojo Tarraco">
                        <div class="card-body text-center">
                            <h5 class="card-title">Club Patina Dojo Tarraco</h5>
                            <p class="card-text">Especializado en patinaje en línea y artístico.</p>
                            <a href="patina-dojo-tarraco.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/ejemplo1.jpg" class="card-img-top" alt="Club Patina Castellvell">
                        <div class="card-body text-center">
                            <h5 class="card-title">Club Patina Castellvell</h5>
                            <p class="card-text">Patinaje para todas las edades y niveles en Castellvell.</p>
                            <a href="patina-castellvell.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Extraescolares Section -->
    <section id="extra" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Actividades Extraescolares</h2>
            <p class="text-center">Explora nuestras actividades educativas y deportivas, diseñadas para todas las edades y niveles. </p>
            <div class="text-center">
                <a href="extraescolares.php" class="btn btn-secondary">Ver más detalles</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('../src/views/layouts/partials/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>