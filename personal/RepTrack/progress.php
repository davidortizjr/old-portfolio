<?php
include('database/connect.php');
session_start();

$page = 'progress';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <?php include('assets/modular/navbar.php'); ?>

    <div class="container mt-4 d-flex justify-content-start">
        <a href="home_page.php" class="btn btn-outline-danger"><i class="bi bi-caret-left-fill"></i></a>
    </div>

    <section>
        <main>
            <div class="container mt-4">
                <div class="text-center">
                    <h4 class="fw-bold">YOUR PROGRESS</h4>
                </div>
            </div>

            <div class="container mt-4 mb-5">
                <div class="row">
                    <div class="col">
                        <h4 class="fw-bold text-center">Push</h4>
                        <div class="row">
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Bench Press</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Machine Flyes</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Incline Bench Press</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Dumbbell Flyes</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <h4 class="fw-bold text-center">Pull</h4>
                        <div class="row">
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">T-Bar Row</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Lat Pulldown</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <h4 class="fw-bold text-center">Legs</h4>
                        <div class="row">
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Barbell Squats</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex justify-content-center align-items-center flex-column"
                                    style="height: 100%;">
                                    <h6 class="fw-bold">Leg Press</h6>
                                    <p>100kg x 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>