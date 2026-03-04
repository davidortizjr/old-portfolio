<?php
include("connect.php");
if (isset($_POST['id'])) {
    $reservationID = $_POST['id'];

    $deleteQuery = "DELETE FROM reservation WHERE reservationID = $reservationID";
    $deleteResult = executeQuery($deleteQuery);

    if ($deleteResult) {
        header("Location: admin.php?delete=success");
        exit;
    } else {
        header("Location: admin.php?delete=error");
        exit;
    }
}
?>