<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="shadow">
        <div class="container p-3 position-sticky top-0 z-1 text-black">
            <div class="row d-flex justify-content-between">
                <div class="col-6 gap-3 d-flex align-items-center position-relative">
                    <div class="mesy-brand ps-4">MESY</div>
                    <!-- Desktop search bar -->
                    <input type="text" class="form-control rounded-pill d-none d-md-block" id="searchInput"
                        placeholder="Search...">
                    <!-- Mobile search icon -->
                    <ion-icon id="searchIconMobile" class="d-block d-md-none" name="search-outline"
                        style="font-size:2rem; cursor:pointer;"></ion-icon>
                    <!-- Mobile search bar overlay (should be last child) -->
                    <div class="mobile-search-wrapper d-none d-md-none">
                        <input type="text" class="form-control rounded-pill" id="searchInputMobile"
                            placeholder="Search...">
                    </div>
                </div>
                <div class="col-6 controls d-flex justify-content-end gap-2 gap-md-4">
                    <!-- Menu button for mobile -->
                    <div class="d-block d-md-none">
                        <button class="btn btn-outline-secondary d-flex justify-content-center" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                            <!-- Custom hamburger icon with three black lines -->
                            <span style="display:inline-block; width:24px; height:24px;">
                                <span
                                    style="display:block; height:3px; background:#000; margin:4px 0; border-radius:2px;"></span>
                                <span
                                    style="display:block; height:3px; background:#000; margin:4px 0; border-radius:2px;"></span>
                                <span
                                    style="display:block; height:3px; background:#000; margin:4px 0; border-radius:2px;"></span>
                            </span>
                        </button>
                    </div>
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <ion-icon name="notifications-outline"></ion-icon>
                    <ion-icon name="person-outline"></ion-icon>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container px-5 py-3">
            <div class="row">
                <!-- Sidebar: hidden on mobile, visible on md+ -->
                <div class="col-3 mx-2 d-none d-md-block">
                    <!-- Sidebar content here -->
                    <div class="my-5 d-flex flex-row gap-2">
                        <a class="icons text-decoration-none text-dark" tabindex="0">
                            <div class="icon d-flex flex-row px-2 py-1">
                                <ion-icon name="home-outline"></ion-icon>
                                <h4 class="py-1 m-0">Home</h4>
                            </div>
                        </a>
                    </div>
                    <div class="my-5 d-flex flex-row gap-2">
                        <a class="icons text-decoration-none text-dark" tabindex="0">
                            <div class="icon d-flex flex-row px-2 py-1">
                                <ion-icon name="search-outline"></ion-icon>
                                <h4 class="py-1 m-0">Search</h4>
                            </div>
                        </a>
                    </div>
                    <div class="my-5 d-flex flex-row gap-2">
                        <a class="icons text-decoration-none text-dark" tabindex="0">
                            <div class="icon d-flex flex-row px-2 py-1">
                                <ion-icon name="people-outline"></ion-icon>
                                <h4 class="py-1 m-0">Friends</h4>
                            </div>
                        </a>
                    </div>
                    <div class="my-5 d-flex flex-row gap-2">
                        <a class="icons text-decoration-none text-dark" tabindex="0">
                            <div class="icon d-flex flex-row px-2 py-1">
                                <ion-icon name="bookmark-outline"></ion-icon>
                                <h4 class="py-1 m-0">Bookmark</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Offcanvas sidebar for mobile -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="my-3 d-flex flex-row gap-2">
                            <a class="icons text-decoration-none text-dark" tabindex="0">
                                <div class="icon d-flex flex-row px-2 py-1">
                                    <ion-icon name="home-outline"></ion-icon>
                                    <h4 class="py-1 m-0">Home</h4>
                                </div>
                            </a>
                        </div>
                        <div class="my-3 d-flex flex-row gap-2">
                            <a class="icons text-decoration-none text-dark" tabindex="0">
                                <div class="icon d-flex flex-row px-2 py-1">
                                    <ion-icon name="search-outline"></ion-icon>
                                    <h4 class="py-1 m-0">Search</h4>
                                </div>
                            </a>
                        </div>
                        <div class="my-3 d-flex flex-row gap-2">
                            <a class="icons text-decoration-none text-dark" tabindex="0">
                                <div class="icon d-flex flex-row px-2 py-1">
                                    <ion-icon name="people-outline"></ion-icon>
                                    <h4 class="py-1 m-0">Friends</h4>
                                </div>
                            </a>
                        </div>
                        <div class="my-3 d-flex flex-row gap-2">
                            <a class="icons text-decoration-none text-dark" tabindex="0">
                                <div class="icon d-flex flex-row px-2 py-1">
                                    <ion-icon name="bookmark-outline"></ion-icon>
                                    <h4 class="py-1 m-0">Bookmark</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Main content: always visible, full width on mobile -->
                <div class="col-12 col-md-6 my-5">
                    <div class="row">
                        <div class="card rounded-4 p-2">
                            <div class="card-body">
                                <div class="px-2 d-flex">
                                    <div class="d-flex flex-row gap-3">
                                        <ion-icon class="rounded-circle border" name="person-outline"></ion-icon>
                                        <h6 class="d-flex align-items-center justify-content-center m-0">David Ortiz
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="container-fluid">
        <div class="row>
            <div class="col-3">
                <div class="card mb-3 vh-100">
                    <div class="h2">
                        notifications
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>