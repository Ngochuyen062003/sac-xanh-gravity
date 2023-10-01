<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SẮC XANH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="views/img/logo-sac-xanh-shecodes.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="views/lib/animate/animate.min.css" rel="stylesheet">
    <link href="views/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="views/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid justify-content-center" src="views/img/logo-sac-xanh-shecodes.png" alt="Logo"><br>
                    <p class="fs-5 fw-medium text-primary text-center">Trao nhân ái <br> Nhận nụ cười xinh</p>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php?act=home" class="nav-item nav-link">trang chủ</a>
                        <a href="index.php?act=tin-tuc" class="nav-item nav-link">tin tức</a>
                        <a href="index.php?act=tich-la" class="nav-item nav-link">tích lá</a>
                        <a href="index.php?act=doi-diem" class="nav-item nav-link">đổi điểm</a>
                        <a href="index.php?act=hanh-trinh-nhan-ai" class="nav-item nav-link">hành trình nhân ái</a>
                        <?php
                            if (isset($_SESSION['username'])) {
                                extract($_SESSION['username']);
                                if ($role == 1) { ?>
                                    <a href="" class="nav-item nav-link">Vào trang quản trị</a>
                            <?php } 
                                else { ?>
                                    <div class="nav-item dropdown">
                                    <a href="index.php?act=dang-nhap" class="nav-item nav-link"><img src="<?php if($user_img != ""){ echo $user_img;}else{echo "views/img/user/example.png";} ?>" width="50%"></a>
                                        <div class="dropdown-menu bg-light rounded-0 m-0">
                                            <a href="feature.html" class="dropdown-item">Thông tin tài khoản</a>
                                            <a href="blog.html" class="dropdown-item">Bảng tích lá</a>
                                            <a href="testimonial.html" class="dropdown-item">Đăng xuất</a>
                                        </div>
                                    </div>
                            <?php } 
                            }
                                else {
                            ?>
                                <a href="index.php?act=dang-ky" class="nav-item nav-link">đăng nhập / đăng ký</a>
                            <?php } ?>
                    </div>
                    <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
