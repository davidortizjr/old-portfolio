<?php
include('database/connect.php');
session_start();

$page = 'workouts';

$programMap = [
    'PUSH PROGRAM' => 1,
    'PULL PROGRAM' => 2,
    'LEGS PROGRAM' => 3,
];

if (isset($_POST['program-btn'])) {
    $programName = $_POST['program-btn'];

    if (isset($programMap[$programName])) {
        $_SESSION['program'] = $programName;
        $_SESSION['program_id'] = $programMap[$programName];
    }
}

if (!isset($_SESSION['program_id'])) {
    header("Location: index.php");
    exit;
}

$programId = $_SESSION['program_id'];

$exerciseQuery = "SELECT exercise_name FROM exercises WHERE program_id = '$programId'";
$exerciseResult = executeQuery($exerciseQuery);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RepTrack | Workouts</title>
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

    <div class="container mt-5">
        <div class="row">
            <?php
            if (mysqli_num_rows($exerciseResult) > 0) {
                while ($exercise = mysqli_fetch_assoc($exerciseResult)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <h5 class="card-title ps-3 pt-2">
                                <?php echo $exercise['exercise_name']; ?>
                            </h5>
                            <div class="card-body">
                                <form action="submit_workout.php" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <label for="sets" class="form-label">Sets</label>
                                            <input type="number" class="form-control" id="sets" name="sets">
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center mt-4">
                                            x
                                        </div>
                                        <div class="col">
                                            <label for="reps" class="form-label">Reps</label>
                                            <input type="number" class="form-control" id="reps" name="reps">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label for="weight" class="form-label">Weight (kg)</label>
                                            <input type="number" class="form-control" id="weight" name="weight">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>