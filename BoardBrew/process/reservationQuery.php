<?php
include("connect.php");

$reservationSuccess = false;

if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $tableNumber = $_POST['table'];
    $date = $_POST['date'];
    $timeIn = $_POST['timeIn'];
    $timeOut = $_POST['timeOut'];


    $reservationQuery = "INSERT INTO reservation (name, tableNumber, timeIn, timeOut, phoneNumber, date) VALUES ('$name', '$tableNumber', '$timeIn', '$timeOut', '$number', '$date')";
    $reservationResult = executeQuery($reservationQuery);

    if ($reservationResult) {
        $reservationSuccess = true;
    }
}

?>