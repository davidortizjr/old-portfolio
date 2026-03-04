<?php
include('../database/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exerciseName = $_POST['exercise_name'];
    $sets = $_POST['sets'];
    $reps = $_POST['reps'];
    $weight = $_POST['weight'];

    $query = "INSERT INTO user_progress (sets, reps, weight) VALUES ('$sets', '$reps', '$weight')";
    if (executeQuery($query)) {
        header("Location: ../workouts.php");
        exit;
    } else {
        echo "Error submitting workout.";
    }
}
?>