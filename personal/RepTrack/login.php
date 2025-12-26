<?php
session_start();
include('database/connect.php');

if (isset($_SESSION['user_id'])) {
    header("Location: home_page.php");
    exit();
}

if (isset($_POST['sign-in-btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = str_replace('\'', '', $email);

    $loginQuery = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $loginResult = executeQuery($loginQuery);

    if (mysqli_num_rows($loginResult) > 0) {
        $user = mysqli_fetch_assoc($loginResult);
        $_SESSION['user_id'] = $user['user_id'];
        header("Location: home_page.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RepTrack | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
        <div class="form-container">
            <p class="title">Login</p>
            <form class="form" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="">
                    <div class="forgot">
                        <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                    </div>
                </div>
                <button class="sign mt-3 mb-1" name="sign-in-btn">Sign in</button>
            </form>
            <p class="signup">Don't have an account?
                <a rel="noopener noreferrer" href="#" class="">Sign up</a>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>