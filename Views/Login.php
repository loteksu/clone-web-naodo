<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>JobBoard &mdash; Website Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="shortcut icon" href="ftco-32x32.png">
<link rel="stylesheet" type="text/css" href="/php/Assets/css/custom-bs.css">
<link rel="stylesheet" type="text/css" href="/php/Assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" type="text/css" href="/php/Assets/css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="/php/Assets/fonts/icomoon/style.css">
<link rel="stylesheet" type="text/css" href="/php/Assets/fonts/line-icons/style.css">
<link rel="stylesheet" type="text/css" href="/php/Assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="/php/Assets/css/animate.min.css">
<link rel="stylesheet" href="/php/Assets/css/style.css">
<link rel="stylesheet" href="/php/Assets/css/Mycss.css">

<div class="auth row">
    <div class="col-lg-6 auth-form">
        <div class="header">
            <div class="logo">
                <a href="https://www.topcv.vn/">
                    <img src="./Đăng nhập tài khoản CV Online - TopCV.vn_files/topcv-logo-4.webp">
                </a>
            </div>
            <h2 class="title">Chào mừng bạn trở lại,</h2>
            <div class="text-muted caption">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp lý tưởng
            </div>
        </div>
        <div class="login">
            <form action="#" method="post" id="form-login">
                <input type="hidden" name="_token" value="CizS9tnAJAe0tW0ifMbtCJLOQGYQLtiDPJDs3Ycn">
                <div class="form-group mb-3">
                    <label for="email" class="mb-1">Email</label>
                    <div class="input-group ">
                        <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn"
                            aria-label="Nhập email của bạn" value="">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="mb-1">Password</label>
                    <div class="input-group ">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Nhập mật khẩu" aria-label="Nhập mật khẩu">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-sign input-block-level w-100 h-40 mb-3 btn-primary-hover">Đăng
                        nhập</button>
                    <p class="or text-center mb-0 fz-12px">Hoặc</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="javascript:loginWithFacebook();"
                        class="btn btn-signin btn-primary input-block-level mx-1 h-40 my-3">
                        <i class="fa-brands fa-facebook-square"></i>
                        <span class="ml-2">Facebook</span>
                    </a>
                    <a id="login-width-google" class="btn btn-default btn-signin input-block-level mx-1 h-40 my-3">
                        <i class="fa-brands fa-google"></i>
                        <span class="ml-2">Google</span>
                    </a>
                    <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&amp;client_id=86umgx5hytpk2k&amp;redirect_uri=https%3A%2F%2Fwww.topcv.vn%2Fcallback-linkedin&amp;scope=r_liteprofile+r_emailaddress"
                        class="btn btn-default btn-signin btn-signin-linkedin input-block-level mx-1 h-40 my-3">
                        <i class="fa-brands fa-linkedin"></i>
                        <span class="ml-2">Linkedin</span>
                    </a>
                </div>
            </form>
            <div class="mt-3 d-flex justify-content-between option-auth">
                <div>
                    <span>Bạn chưa có tài khoản?</span>
                    <a class="text-success font-weight-bold" href="https://www.topcv.vn/sign-up">
                        Đăng ký ngay
                    </a>
                </div>
                <a class="text-success font-weight-bold" href="https://www.topcv.vn/forgot-password">
                    Quên mật khẩu
                </a>
            </div>
            <div class="mt-4 support fz-12px">
                <p class="fw-bold mb-0">
                    Bạn gặp khó khăn khi tạo tài khoản?
                </p>
                <p class="mb-0">
                    Vui lòng gọi tới số (024) 6680 5588 (giờ hành chính).
                </p>
            </div>
        </div>
    </div>
    <div id="login-slider" class="px-0 col-6 carousel slide d-none d-lg-block" data-ride="carousel">
        <div id="carouselLogin" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselLogin" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselLogin" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#carouselLogin" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-top">
                        <img src="./Đăng nhập tài khoản CV Online - TopCV.vn_files/tool-cv.webp" class="w-100"
                            alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="title">Công cụ viết CV đẹp Miễn phí</h4>
                        <p class="caption">Nhiều mẫu CV đẹp, phù hợp nhu cầu ứng tuyển các vị trí khác nhau.
                            Dễ dàng chỉnh sửa thông tin, tạo CV online nhanh chóng trong vòng 5 phút.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img-top">
                        <img src="./Đăng nhập tài khoản CV Online - TopCV.vn_files/sec-safe.webp" class="w-100"
                            alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="title">Bảo mật &amp; An toàn tuyệt đối</h4>
                        <p class="caption">Bạn có thể chủ động bật / tắt trạng thái tìm việc. Nếu trạng thái
                            tắt, không ai có thể xem được CV của bạn.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img-top">
                        <img src="./Đăng nhập tài khoản CV Online - TopCV.vn_files/support.webp" class="w-100"
                            alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="title">Hỗ trợ Người tìm việc</h4>
                        <p class="caption">Nhà tuyển dụng chủ động tìm kiếm và liên hệ với bạn qua hệ thống
                            kết nối ứng viên thông minh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>