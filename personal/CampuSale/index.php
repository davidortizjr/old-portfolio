<?php
// if (!isset($_SESSION['userId'])) {
//     header("Location: login.php");
// }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CampuSale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <div class="container-fluid pt-3">
            <div class="row pt-3">
                <div class="col px-5">
                    <a href="index.html" class="text-white text-decoration-none fs-4 fw-bold">CampuSale</a>
                </div>
                <div class="col px-5">
                    <div class="row">
                        <input type="text" class="form-control rounded-pill px-3" id="productSearch"
                            placeholder="Search">
                    </div>
                    <div class="row">
                        <div
                            class="col d-flex justify-content-center align-items-center flex-row pt-3 fw-semibold text-white">
                            <a href="sections/men_section.php" class="text-white text-decoration-none">
                                <div class="categories">
                                    Men
                                </div>
                            </a>
                            <a href="sections/women_section.php" class="text-white text-decoration-none">
                                <div class="categories">
                                    Women
                                </div>
                            </a>
                            <div class="categories">
                                Shoes
                            </div>
                            <div class="categories">
                                Accessories
                            </div>
                            <div class="categories">
                                Bags
                            </div>
                            <div class="categories">
                                Home
                            </div>
                            <div class="categories">
                                Electronics
                            </div>
                            <div class="categories">
                                Sports
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col px-5 d-flex gap-4 justify-content-end">
                    <a><ion-icon name="mail"></ion-icon></a>
                    <a><ion-icon name="notifications"></ion-icon></a>
                    <a><ion-icon name="cart"></ion-icon></a>
                    <a><ion-icon name="person"></ion-icon></a>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="container banner-container mt-5">
            <div class="row">
                <div class="col-3 left-banner px-3">
                    <img src="img/home/home001.jpg" alt="left-banner" class="img-fluid banner rounded-3">
                </div>
                <div class="col-6 middle-banner d-flex align-items-center justify-content-center rounded-3">
                    <img src="img/logo.png" alt="middle-banner" class="img-fluid">
                </div>
                <div class="col-3 right-banner px-3">
                    <img src="img/electronics/electronics001.jpg" alt="right-banner" class="img-fluid banner rounded-3">
                </div>
            </div>
        </div>
    </section>

    <section class="categories-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col d-flex flex-row justify-content-center gap-5 text-center">
                    <div class="mens">
                        <a href="sections/men_section.php">
                            <img src="img/mens/shirts/men_shirt001.jpg" alt="mens"
                                class="img-fluid categories-img rounded-3">
                            <h5>Men</h5>
                        </a>
                    </div>
                    <div class="womens">
                        <a href="sections/women_section.php">
                            <img src="img/womens/shirts/dress001.jpg" alt="womens"
                                class="img-fluid categories-img rounded-3">
                            <h5>Women</h5>
                        </a>
                    </div>
                    <div class="shoes">
                        <a href="#">
                            <img src="img/mens/mens_shoes/shoes001.jpg" alt="shoes"
                                class="img-fluid categories-img rounded-3">
                            <h5>Shoes</h5>
                        </a>
                    </div>
                    <div class="accessories">
                        <a href="#">
                            <img src="img/womens/accessories/accessories001.jpg" alt="accessories"
                                class="img-fluid categories-img rounded-3">
                            <h5>Accessories</h5>
                        </a>
                    </div>
                    <div class="bags">
                        <a href="#">
                            <img src="img/mens/bags/bags001.jpg" alt="bags" class="img-fluid categories-img rounded-3">
                            <h5>Bags</h5>
                        </a>
                    </div>
                    <div class="home">
                        <a href="#">
                            <img src="img/home/home001.jpg" alt="home" class="img-fluid categories-img rounded-3">
                            <h5>Home</h5>
                        </a>
                    </div>
                    <div class="electronics">
                        <a href="#">
                            <img src="img/electronics/electronics001.jpg" alt="electronics"
                                class="img-fluid categories-img rounded-3">
                            <h5>Electronics</h5>
                        </a>
                    </div>
                    <div class="sports">
                        <a href="#">
                            <img src="img/sports/sports001.jpg" alt="sports" class="img-fluid categories-img rounded-3">
                            <h5>Sports</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>