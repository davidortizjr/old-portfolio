<?php
include("process/reservationQuery.php");

$reservationQuery = "SELECT * FROM reservation ORDER BY date, timeIn";
$reservationResult = executeQuery($reservationQuery);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="BoardBrew">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://boardbrew.fun">
    <meta property="og:image" content="https://boardbrew.fun/img/BOARDBREW.png">
    <link rel="icon" href="img/BOARDBREW.png" type="image/png">
    <link rel="shortcut icon" href="img/BOARDBREW.png" type="image/png">
    <title>BoardBrew</title>
    <link rel="icon" type="image" href="img/BOARDBREW.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="img/Secondary Logo.png"
                    style="width: 200px; height: 100%; padding-left: 36px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#about">ABOUT US</a>
                    </li>
                    <li class="nav-item mx-3" style="padding-right: 8px;">
                        <a class="nav-link active" href="#reservation-form">RESERVATION</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="#footer">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php if ($reservationSuccess): ?>
        <div class="alert alert-success text-center" role="alert">
            Reservation successful! We look forward to seeing you.
        </div>
    <?php endif; ?>

    <section class="bento">
        <div class="container-fluid justify-content-center align-items-center" style="background-color: var(--fc-white);">
            <div class="row" style="margin-right: 0px">
                <div class="col-12 col-lg-6 p-0 text-center align-items-center justify-content-center d-flex flex-column">
                    <img src="img/Primary Logo.png"
                        style="width: 250px; height: auto; margin-top: 16px; border-radius: 8px;" class="logo p-3">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tagline mt-3">
                                WHERE COFFEE MEETS CONNECTIONS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="img/pic03.jpg"
                        style="width: 100%; height: auto; margin-top: 16px; backdrop-filter: blur(2px); border-radius: 8px;"
                        class="logo p-3">
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container-fluid px-3 d-flex justify-content-end flex-column" style="background-color: var(--fc-green);">
            <div class="row">
                <div class="col-12 col-lg-6 mb-3">
                    <img src="img/pic02.jpg"
                        style="width: 100%; height: auto; margin-top: 16px; backdrop-filter: blur(2px); border-radius: 8px;"
                        class="logo p-3">
                </div>
                <div class="col-12 col-lg-6 align-items-center justify-content-center d-flex flex-column">
                    <h2 style="font-family: var(--ff-title); color: var(--fc-brown)">ABOUT US</h2>
                    <p class="text-start" style="font-family: var(--ff-text); color: var(--fc-brown); width: 300px;">
                        BOARDBREW isn't just another amusement place – it's a haven for those seeking genuine connection
                        and unforgettable experiences. We specialize in fostering bonds through the timeless joy of
                        board games and card games. Our establishment is meticulously designed to provide an environment
                        where laughter, strategy, and camaraderie flourish.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>

   <section class="reserve-header text-center">
        <div class="container-fluid" style="background-color: var(--fc-white)">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                    <h2 class="tagline m-3" style="font-family: var(--ff-text-bold); color: var(--fc-brown);">Reserve Your
                        Spot for
                        Coffee, Games, and Good Times!</h2>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center">
                    <img src="img/seat.png" style="width: 100%; height: auto; object-fit: contain;"
                        class="img logo p-3">
                </div>
            </div>
        </div>
    </section>

    <section class="reservation-form" id="reservation-form">
        <div class="container-fluid p-4 d-flex justify-content-center" style="background-color: var(--fc-green)">
            <div class="row">
                <div class="col-12 col-lg-6 mt-2">
                    <form method="POST">
                        <div class="card p-3">
                            <a class="reserve">RESERVATION FORM</a>
                            <div class="inputBox1">
                                <input type="text" required="required" id="name" name="name">
                                <span class="user">Name</span>
                            </div>

                            <div class="inputBox">
                                <input type="text" required="required" id="number" name="number">
                                <span>Phone Number</span>
                            </div>

                            <div class="inputBox">
                                <input type="number" required="required" id="table" name="table">
                                <span>Table Number</span>
                            </div>

                            <div class="inputBox">
                                <input type="date" required="required" id="date" name="date">
                                <span style="margin-left: 8rem;">Date</span>
                            </div>

                            <div class="inputBox">
                                <input type="time" required="required" id="timeIn" name="timeIn">
                                <span style="margin-left: 8rem;">Time In</span>
                            </div>

                            <div class="inputBox">
                                <input type="time" required="required" id="timeOut" name="timeOut">
                                <span style="margin-left: 8rem;">Time Out</span>
                            </div>

                            <button type="submit" name="btnSubmit" class="enter">Enter</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 mt-2">
                    <div class="card p-3 justify-content-start" style="height: 100%; overflow-y: scroll;">
                        <a class="reserve">RESERVED TABLES</a>
                        <table class="table table-success table-hover" style="border: 1px solid var(--fc-green);">
                            <thead>
                                <tr>
                                    <th scope="col">Table #</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time In</th>
                                    <th scope="col">Time Out</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                date_default_timezone_set('Asia/Manila');
                                
                                if ($reservationResult->num_rows > 0) {
                                    while ($row = $reservationResult->fetch_assoc()) {
                                        $reservationEnd = strtotime($row['date'] . ' ' . $row['timeOut']);
                                        $currentTime = time();

                                        if ($reservationEnd > $currentTime) {
                                            echo "<tr>";
                                            echo "<td>" . $row['tableNumber'] . "</td>";
                                            echo "<td>" . $row['date'] . "</td>";
                                            echo "<td>" . $row['timeIn'] . "</td>";
                                            echo "<td>" . $row['timeOut'] . "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='text-center'>No Reservations Yet</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-lg-start" id="footer">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center flex-column mt-3">
                <div class="h4 mx-auto" style="font-family: var(--ff-title);">
                    SOCIALS
                </div>
                <div class="h6 d-flex flex-column">
                    <a href="https://www.facebook.com/boardbreww">
                        <i class="bi bi-facebook"></i> boardbreww
                    </a>
                    <a href="https://www.instagram.com/boardbrew.wcmc/">
                        <i class="bi bi-instagram"></i> boardbrew.wcmc
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=boardbrew.wcmc@gmail.com">
                        <i class="bi bi-envelope-at"></i> boardbrew.wcmc@gmail.com
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center flex-column mt-3">
                <div class="h4 mx-auto" style="font-family: var(--ff-title);">
                    ABOUT US
                </div>
                <div class="h6" style="font-family: var(--ff-text);">
                    BOARDBREW isn't just another amusement place – it's a haven for those seeking genuine connection
                        and unforgettable experiences. We specialize in fostering bonds through the timeless joy of
                        board games and card games. Our establishment is meticulously designed to provide an environment
                        where laughter, strategy, and camaraderie flourish.
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center flex-column mt-3">
                <div class="footer-logo">
                    <img src="img/footer logo.png" style="width: 200px; height: auto;" class="logo">
                </div>
            </div>
            <div class="row m-0">
                <div class="col mt-3">
                    <div class="copyright pt-3"
                        style="font-family: var(--ff-text); color: var(--fc-white); border-top: 1px solid #ffffff0e;">
                        © 2025, <a href="adminLogin.php">BoardBrew.</a>
                    </div>
                </div>
            </div>
    </footer>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dateInput = document.getElementById("date");
            const timeInInput = document.getElementById("timeIn");
            const form = document.querySelector("form");

            form.addEventListener("submit", (event) => {
                const selectedDate = dateInput.value;
                const selectedTime = timeInInput.value;

                if (selectedDate && selectedTime) {
                    const selectedDateTime = new Date(`${selectedDate}T${selectedTime}`);
                    const currentTime = new Date();

                    const minAllowedTime = new Date(currentTime.getTime() + (2 * 60 * 60 * 1000));

                    if (selectedDateTime < minAllowedTime) {
                        alert("You can only reserve at least 2 hours in advance.");
                        event.preventDefault();
                    }
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>