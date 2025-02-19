<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Extraescolares</title>
    <link rel="icon" href="images/icons/logodojotarraco.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/clubjudodojotarraco/src/views/layouts/partials/navbar.php'); ?>

    <!-- Hero Section -->
    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Actividades Extraescolares</h1>
            <p class="lead">Explora nuestro programa educativo y deportivo diseñado para niños y adultos.</p>
        </div>
    </section>

    <!-- Categorías de Actividades -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestras Actividades</h2>
            <div class="row">
                <!-- Actividades Deportivas -->
                <div class="col-md-4">
                    <h3>Deportivas</h3>
                    <ul>
                        <li>Judo (Primaria)</li>
                        <li>Patinaje Artístico (Primaria)</li>
                        <li>Patinaje Línea (Perfeccionamiento)</li>
                        <li>Psico-Judo (P4 y P5)</li>
                        <li>Pre-Deporte (P4 y P5)</li>
                    </ul>
                </div>
                <!-- Actividades No Deportivas -->
                <div class="col-md-4">
                    <h3>No Deportivas</h3>
                    <ul>
                        <li>Psico-Desarrollo Motriz (P3 y P4)</li>
                        <li>Juegos de Mesa (Primaria)</li>
                        <li>Talleres de Emociones (P4 - 2º Primaria)</li>
                        <li>Talleres de Deberes (Primaria)</li>
                    </ul>
                </div>
                <!-- Actividades para Adultos -->
                <div class="col-md-4">
                    <h3>Para Adultos</h3>
                    <ul>
                        <li>Defensa Personal</li>
                        <li>Pilates y Corrección Postural</li>
                        <li>Patinaje</li>
                        <li>Sesiones Dirigidas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="" class="card-img-top" alt="Patinaje Artístico">
            <div class="card-body">
                <h5 class="card-title">Patinaje Artístico</h5>
                <p class="card-text">Para niños de Primaria, desarrollo de habilidades en patinaje artístico.</p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include('../src/views/layouts/partials/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>