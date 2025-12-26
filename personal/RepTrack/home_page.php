<?php
session_start();

if (isset($_POST['program-btn'])) {
    $_SESSION['program'] = $_POST['program-btn'];
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RepTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <nav class="red p-4 text-white font-semibold rounded-bottom-4">
        <div class="row">
            <div class="col">
                <div class="fw-semibold">
                    HI, DAVID!
                </div>
            </div>
            <div class="col d-flex justify-content-end gap-2">
                <i class="bi bi-gear-wide-connected"></i>
                <i class="bi bi-person"></i>
            </div>
        </div>
    </nav>

    <div class="container mb-4">
        <div class="fw-semibold mt-5 text-center">
            <h5>SELECT YOUR PROGRAM</h5>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex justify-content-center align-items-center flex-column" style="height: 100%;">
                    <h5 class="fw-bold">PUSH</h5>
                    <form method="POST" action="workouts.php">
                        <button class="btn btn-primary" name="program-btn" value="PUSH PROGRAM">TRAIN</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="image">
                    <img src="https://www.pushupguide.com/images/push-up-exericse-down.jpg" class="img-fluid rounded-4">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <img src="https://thefitnessphantom.com/wp-content/uploads/2020/03/Chin-ups.jpg"
                    class="img-fluid rounded-4">
            </div>
            <div class="col">
                <div class="fw-semibold d-flex justify-content-center align-items-center flex-column"
                    style="height: 100%;">
                    <h5 class="fw-bold">PULL</h5>
                    <form method="POST" action="workouts.php">
                        <button class="btn btn-primary" name="program-btn" value="PULL PROGRAM">TRAIN</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="fw-semibold d-flex justify-content-center align-items-center flex-column"
                    style="height: 100%;">
                    <h5 class="fw-bold">LEGS</h5>
                    <form method="POST" action="workouts.php">
                        <button class="btn btn-primary" name="program-btn" value="LEGS PROGRAM">TRAIN</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="image">
                    <img src="https://th.bing.com/th/id/R.fac507482ef5c801efc2390c14ad9289?rik=8lU0nwo0Uukvxg&riu=http%3a%2f%2fmyfamilychiropractor.com.au%2fwp-content%2fuploads%2f2015%2f04%2fsquats.png&ehk=HeFvI%2bwZfuJOJAOBuxkkjwCgyEd7VAV7Wzj6CPAz3XE%3d&risl=&pid=ImgRaw&r=0"
                        class="img-fluid rounded-4">
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col red rounded-4 ms-2 py-5">
            </div>
            <div class="col">
                <div class="fw-semibold d-flex justify-content-center align-items-center flex-column"
                    style="height: 100%;">
                    <h5 class="fw-bold text-center">CUSTOM WORKOUT</h5>
                    <button class="btn btn-primary">TRAIN</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h6 class="text-center fw-semibold">WANT TO ADD A CUSTOM PROGRAM?</h6>
        <div class="d-flex justify-content-center mt-2">
            <button class="btn btn-primary">ADD</button>
        </div>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>