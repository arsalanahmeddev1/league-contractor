<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders:opsz,wght@10..72,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/utilities.css', 'resources/css/style.css'])
    <title>@yield('title')</title>
</head>

<body>
    <header class="header position-absolute w-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-3">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="col-lg-6 col-1">
                    <nav>
                        <ul class="primary-navs d-flex justify-content-between align-items-center gap-20">
                            <div class="close-icon">
                                <i class="fa-solid fa-xmark menu-toggle"></i>
                            </div>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Marketplace</a></li>
                            <li><a href="#">Referrals</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-8 d-flex gap-20 justify-content-end align-items-center">
                    <div class="d-flex align-items-center flex-grow-1 justify-content-between"
                        style="max-width: 270px;">
                        <a href="" class="bootstrap text-white">Login</a>
                        <div class="v-line-sm"></div>
                        <div class="join-now-btn position-relative">
                            <a href="#" class="bootstrap header-btn">Join Now </a>
                            <div
                                class="circle-md bg-primary-theme join-now-arrow top-50 translate-middle-y position-absolute">
                                <span class="text-white fs-16"><i class="fa-solid fa-arrow-right"></i></span></div>
                        </div>
                    </div>
                    <div class="menu-icon">
                        <i class="fa-solid fa-bars menu-toggle"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer sec-bg-light">
        <div class="container">
            <div class="footer-top sec-gap-y">
                <div class="row row-gap-40">
                    <div class="col-lg-4">
                        <div class="img-wrapper mb-15">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo">
                        </div>
                        <p class="fs-16 text-white">
                            To empower licensed contractors through a verified digital ecosystem that encourages collaboration, trust, and shared growth opportunities.
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-gap-40">
                            <div class="col-lg-4 col-xl-3">
                                <h4 class="secondary-list-title">Quick Links</h4>
                                <ul class="secondary-list">
                                    <li><a href="javascript:;">Home</a></li>
                                    <li><a href="javascript:;">About</a></li>
                                    <li><a href="javascript:;">Membership</a></li>
                                    <li><a href="javascript:;">Marketplace</a></li>
                                    <li><a href="javascript:;">Referrals</a></li>
                                    <li><a href="javascript:;">Resources</a></li>
                                    <li><a href="javascript:;">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h4 class="secondary-list-title">Legal</h4>
                                <ul class="secondary-list">
                                    <li><a href="javascript:;">Terms of Service</a></li>
                                    <li><a href="javascript:;">Privacy Policy</a></li>
                                    <li><a href="javascript:;">Verification Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <h4 class="secondary-list-title">Social Media</h4>
                                <ul class="secondary-list">
                                    <li><a href="javascript:;">LinkedIn</a></li>
                                    <li><a href="javascript:;">Facebook</a></li>
                                    <li><a href="javascript:;">Instagram</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="secondary-list-title">Contact</h4>
                                <span class="contact-sec-card-item d-flex align-items-center"><span class="icon-wrapper me-2 text-primary-theme"><i class="fa-solid fa-envelope"></i></span> <a class="contact-sec-card-item-link" href="mailto:support@leagueofcontractors.com">support@leagueofcontractors.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar sec-dark-bg py-30">
            <p class="fs-16 text-white text-center">
                © 2025 League of Contractors. All Rights Reserved.
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
    @vite('resources/js/app.js')
</body>

</html>
