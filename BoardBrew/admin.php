<?php
include("process/deleteReservation.php");
session_start();

if (!empty($_SESSION['username'])) {
} else {
    header("Location: index.php");
}

$reservationQuery = "SELECT * FROM reservation ORDER BY date, timeIn";
$reservationResult = executeQuery($reservationQuery);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BoardBrew Admin</title>
    <link rel="icon" type="image" href="img/BOARDBREW.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/Secondary Logo.png"
                    style="width: 200px; height: 100%; padding-left: 36px;"></a>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card p-3 shadow rounded-5" style="background-color: #028e85;">
                        <h1 class="text-center mt-4 mb-3" style="color: beige;">Reservations</h1>
                        <table class="table table-light table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Table #</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time In</th>
                                    <th scope="col">Time Out</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($reservationResult->num_rows > 0) {
                                    while ($row = $reservationResult->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['tableNumber'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['phoneNumber'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['timeIn'] . "</td>";
                                        echo "<td>" . $row['timeOut'] . "</td>";
                                        echo "<td><form method='POST' action='admin.php'>
                                            <input type='hidden' name='id' value='" . $row['reservationID'] . "'>
                                            <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                                        </form></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7' class='text-center'>No Reservations Yet</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>