<?php
session_start();
session_destroy();
session_start();

$error = "";

if (!empty($_SESSION['username'])) {
    header("Location: admin.php");
}

if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = str_replace('\'', '', $username);
    $password = str_replace('\'', '', $password);

    $loginQuery = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $loginResult = executeQuery($loginQuery);

    if (mysqli_num_rows($loginResult) > 0) {
        while ($admin = mysqli_fetch_assoc($loginResult)) {
            $_SESSION['username'] = $admin['username'];
            $error = "";

            if ($admin['username'] == "admin" && $admin['password'] == "boardbrew") {
                header("Location: admin.php");
            } else {
                header("Location: index.php");
            }
        }
    } else {
        $error = "NO USER";
    }
}
?>