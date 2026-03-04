<?php
include("connect.php");
include("process/loginQuery.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="icon" type="image" href="img/BOARDBREW.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminLogin.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col mt-5 d-flex justify-content-center">
                <form class="form action" method="POST">
                    <div class="title">Welcome,<br><span>sign up to continue</span></div>
                    <input class="input" name="username" placeholder="Username" type="text" id="username">
                    <input class="input" name="password" placeholder="Password" type="password" id="password">
                    <button type="submit" class="button-confirm" name="btnLogin">Let`s go →</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>