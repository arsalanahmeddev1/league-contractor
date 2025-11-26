<header class="header w-100 {{isset($isHome) ? 'position-absolute' : ''}}">
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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('membership') }}">Membership</a></li>
                        <li class="position-relative">
                            <a href="#" class="dropdown-menu-btn">Marketplace <i class="fa-solid fa-chevron-down" style="font-size: 0.7em; margin-left: 5px;"></i></a>
                            <div class="dropdown-menu-wrapper">
                                <ul>
                                    <li><a href="{{ route('marketplace') }}">Browse Contractors</a></li>
                                    <li><a href="{{ route('products') }}">All Products</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('referrals') }}">Referrals</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-8 d-flex gap-20 justify-content-end align-items-center">
                <div class="d-flex align-items-center flex-grow-1 justify-content-between"
                    style="max-width: 310px;">
                    <a href="{{route('cart')}}" class="cart-icon d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="{{route('login')}}" class="bootstrap text-white">Login</a>
                    <div class="v-line-sm"></div>
                    <div class="join-now-btn position-relative">
                        <a href="{{route('join')}}" class="bootstrap header-btn">Join Now </a>
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