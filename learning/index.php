<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header id="header" class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" style="width: 200px; height: 100px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimaryMenu" aria-controls="navbarPrimaryMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarPrimaryMenu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php
        include 'particals/slider.php';
        ?>
        <?php
        include 'particals/home-products.php';
        ?>



    </main>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <ul class="menu-footer">
                        <li><a href="">Tích điểm</a></li>
                        <li><a href="">Quà tặng</a></li>
                        <li><a href="">Lịch sử mua hàng</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Xem thêm</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                        <li><a href="">Tích điểm</a></li>
                        <li><a href="">Quà tặng</a></li>
                        <li><a href="">Lịch sử mua hàng</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Xem thêm</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                        <li><a href="">Giới thiệu công ty</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Góp ý, khiếu nại</a></li>
                        <li><a href="">Tìm cửa hàng</a></li>
                        <li><a href="">Xem thêm</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                        <li><a href="">Liên hệ</a></li>
                        <li><a href="">Quà tặng</a></li>
                        <li><a href="">Lịch sử mua hàng</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Xem thêm</a></li>
                    </ul>
                </div>
            </div>


    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>