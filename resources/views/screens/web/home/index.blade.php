@extends('layouts.web.master')
@section('title', 'Home')
@section('content')

    <section class="hero-banner">
        <div class="container">
            <div class="row align-items-center row-gap-40">
                <div class="col-lg-6">
                    <div class="mb-25">
                        <span class="glass tagline mb-12">League Of Contractors</span>
                    </div>
                    <h1 class="hd-lg mb-20">
                        The Digital Network for Licensed Contractors
                    </h1>
                    <p class="para mb-20">Join a verified community where contractors refer, earn, and grow.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start align-items-center gap-20">
                        <a href="" class="bootstrap btn btn-primary">Join the League</a>
                        <a href="" class="bootstrap btn btn-outline d-flex align-items-center gap-10">Explore Members
                            <span class="text-white fs-16"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="glass form-wrapper">
                        <form action="">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="hd-lg hd-md mb-20" style="max-width: 540px">Find the Right Contractor for the
                                        Job</h4>
                                    <div class="field-wrapper mb-20">
                                        <input type="text" class="glass input-field"
                                            placeholder="What do you looking for?">
                                    </div>
                                    <div class="field-wrapper mb-20">
                                        <input type="text" class="glass input-field"
                                            placeholder="What do you looking for?">
                                    </div>
                                    <button class="bootstrap btn btn-secondary w-100 submit-btn">Search Now</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hiw-sec sec-dark-bg sec-gap">
        <div class="container">
            <div class="row row-gap-40">
                <div class="col-12">
                    <h2 class="hd-lg text-center">How It Works</h2>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hiw-card">
                        <div class="glass circle-md circle-lg mb-40">
                            <img src="{{ asset('images/icons/join.svg') }}" alt="">
                        </div>
                        <h4 class="hd-lg hd-md mb-20">Join</h4>
                        <p class="para ">
                            Register as a licensed contractor, submit your credentials, and get verified by our admin team.
                        </p>
                        <h1 class="outline-heading">01</h1>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hiw-card">
                        <div class="glass circle-md circle-lg mb-40">
                            <img src="{{ asset('images/icons/refer.svg') }}" alt="">
                        </div>
                        <h4 class="hd-lg hd-md mb-20">Refer & Earn</h4>
                        <p class="para ">
                            Connect with trusted contractors across counties. Share leads, refer jobs, and form strategic
                            partnerships.
                        </p>
                        <h1 class="outline-heading">02</h1>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hiw-card">
                        <div class="glass circle-md circle-lg mb-40">
                            <img src="{{ asset('images/icons/build.svg') }}" alt="">
                        </div>
                        <h4 class="hd-lg hd-md mb-20">Build Partnerships</h4>
                        <p class="para ">
                            Receive rebates on successful referrals and expand your business visibility through verified
                            membership.
                        </p>
                        <h1 class="outline-heading">03</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-sec sec-dark-bg sec-gap">
        <div class="container">
            <div class="row row-gap-40 mb-40 text-center text-md-start align-items-center">
                <div class="col-lg-6">
                    <h2 class="hd-lg">Featured Contractors</h2>
                </div>
                <div class="col-lg-6">
                    <div class="arrows-wrapper d-flex align-items-center justify-content-center justify-md-content-end gap-20">
                        <button class="prev-arrow circle-md featured-prev-arrow">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="next-arrow circle-md featured-next-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-slider-wrapper">
            <div class="featured-slider">
                <div class="featured-card">
                    <div class="featured-img-wrapper position-relative mb-20">
                        <img src="{{ asset('images/featured-01.png') }}" alt="featured-image">
                        <div class="position-absolute verified-badge-wrapper">
                            <img src="{{ asset('images/icons/verified-badge.svg') }}" alt="featured-verified-badge">
                        </div>
                    </div>
                    <div class="featured-content-wrapper">
                        <div class="rating-wrapper mb-10 d-flex align-items-center gap-10">
                            <div class="star-icon text-secondry-theme fw-300"><i class="fa-solid fa-star"></i></div>
                            <div>
                                <h5 class="text-white fs-16 fw-300">4.9/5 Rating</h5>
                            </div>
                        </div>
                        <h4 class="text-white fs-14 fw-300 mb-10">General Contractor | Fairfax County</h4>
                        <h1 class="hd-lg hd-sm mb-10">John Doe</h1>
                        <a href="" class="bootstrap btn btn-outline">View Profile</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-img-wrapper position-relative mb-20">
                        <img src="{{ asset('images/featured-02.png') }}" alt="featured-image">
                        <div class="position-absolute verified-badge-wrapper">
                            <img src="{{ asset('images/icons/verified-badge.svg') }}" alt="featured-verified-badge">
                        </div>
                    </div>
                    <div class="featured-content-wrapper">
                        <div class="rating-wrapper mb-10 d-flex align-items-center gap-10">
                            <div class="star-icon text-secondry-theme fw-300"><i class="fa-solid fa-star"></i></div>
                            <div>
                                <h5 class="text-white fs-16 fw-300">4.9/5 Rating</h5>
                            </div>
                        </div>
                        <h4 class="text-white fs-14 fw-300 mb-10">General Contractor | Fairfax County</h4>
                        <h1 class="hd-lg hd-sm mb-10">Michael Torres</h1>
                        <a href="" class="bootstrap btn btn-outline">View Profile</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-img-wrapper position-relative mb-20">
                        <img src="{{ asset('images/featured-03.png') }}" alt="featured-image">
                        <div class="position-absolute verified-badge-wrapper">
                            <img src="{{ asset('images/icons/verified-badge.svg') }}" alt="featured-verified-badge">
                        </div>
                    </div>
                    <div class="featured-content-wrapper">
                        <div class="rating-wrapper mb-10 d-flex align-items-center gap-10">
                            <div class="star-icon text-secondry-theme fw-300"><i class="fa-solid fa-star"></i></div>
                            <div>
                                <h5 class="text-white fs-16 fw-300">4.9/5 Rating</h5>
                            </div>
                        </div>
                        <h4 class="text-white fs-14 fw-300 mb-10">Plumbing & Drainage | Prince William County</h4>
                        <h1 class="hd-lg hd-sm mb-10">David Kim</h1>
                        <a href="" class="bootstrap btn btn-outline">View Profile</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-img-wrapper position-relative mb-20">
                        <img src="{{ asset('images/featured-04.png') }}" alt="featured-image">
                        <div class="position-absolute verified-badge-wrapper">
                            <img src="{{ asset('images/icons/verified-badge.svg') }}" alt="featured-verified-badge">
                        </div>
                    </div>
                    <div class="featured-content-wrapper">
                        <div class="rating-wrapper mb-10 d-flex align-items-center gap-10">
                            <div class="star-icon text-secondry-theme fw-300"><i class="fa-solid fa-star"></i></div>
                            <div>
                                <h5 class="text-white fs-16 fw-300">4.9/5 Rating</h5>
                            </div>
                        </div>
                        <h4 class="text-white fs-14 fw-300 mb-10">HVAC & Refrigeration | Alexandria County</h4>
                        <h1 class="hd-lg hd-sm mb-10">Anthony Carter</h1>
                        <a href="" class="bootstrap btn btn-outline">View Profile</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-img-wrapper position-relative mb-20">
                        <img src="{{ asset('images/featured-02.png') }}" alt="featured-image">
                        <div class="position-absolute verified-badge-wrapper">
                            <img src="{{ asset('images/icons/verified-badge.svg') }}" alt="featured-verified-badge">
                        </div>
                    </div>
                    <div class="featured-content-wrapper">
                        <div class="rating-wrapper mb-10 d-flex align-items-center gap-10">
                            <div class="star-icon text-secondry-theme fw-300"><i class="fa-solid fa-star"></i></div>
                            <div>
                                <h5 class="text-white fs-16 fw-300">4.9/5 Rating</h5>
                            </div>
                        </div>
                        <h4 class="text-white fs-14 fw-300 mb-10">General Contractor | Fairfax County</h4>
                        <h1 class="hd-lg hd-sm mb-10">Michael Torres</h1>
                        <a href="" class="bootstrap btn btn-outline">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container sec-gap">
            <div class="theme-border"></div>
        </div>
    </section>
    <section class="service-cat-sec sec-dark-bg sec-gap-y">
        <div class="container">
            <div class="row row-gap-40 align-items-center text-center text-md-start">
                <div class="col-lg-6">
                    <div class="mb-20">
                        <span class="glass tagline tagline-sm ">Top Rated Services</span>
                    </div>
                    <h2 class="hd-lg">Service Categories</h2>
                </div>
                <div class="col-lg-6">
                    <div class="arrows-wrapper d-flex align-items-center justify-content-center justify-md-content-end gap-20">
                        <button class="prev-arrow circle-md service-cat-prev-arrow">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="next-arrow circle-md service-cat-next-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="service-cat-slider">
                    <div class="service-cat-card">
                        <div class="service-cat-img-wrapper position-relative mb-20">
                            <img src="{{ asset('images/service-cat-01.png') }}" alt="service-cat-image">
                        </div>
                        <div class="service-cat-content-wrapper">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">General Contracting</h4>
                            <a href="" class="bootstrap btn btn-outline">Find a Contractor Near You</a>
                        </div>
                    </div>
                    <div class="service-cat-card">
                        <div class="service-cat-img-wrapper position-relative mb-20">
                            <img src="{{ asset('images/service-cat-02.png') }}" alt="service-cat-image">
                        </div>
                        <div class="service-cat-content-wrapper">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">Electrical Services</h4>
                            <a href="" class="bootstrap btn btn-outline">Find a Contractor Near You</a>
                        </div>
                    </div>
                    <div class="service-cat-card">
                        <div class="service-cat-img-wrapper position-relative mb-20">
                            <img src="{{ asset('images/service-cat-01.png') }}" alt="service-cat-image">
                        </div>
                        <div class="service-cat-content-wrapper">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">General Contracting</h4>
                            <a href="" class="bootstrap btn btn-outline">Find a Contractor Near You</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-join-league-sec sec-bg-light sec-gap-120">
        <div class="container">
            <div class="row text-center text-md-start row-gap-40">
                <div class="col-lg-4">
                    <div class="why-join-league-img-wrapper position-relative">
                        <img src="{{ asset('images/wjl-01.png') }}" alt="why-join-league-image">
                        <img src="{{ asset('images/logo-02.png') }}" alt="why-join-league-icon"
                            class="position-absolute wjl-icon-01">
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="hd-lg mb-40">Why Join the League</h2>
                    <div class="row row-gap-40">
                        <div class="col-lg-6">
                            <div class="d-flex wjl-item align-items-center justify-content-center justify-content-md-start mb-20 gap-20">
                                <div class="circle-md bg-secondry-theme">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h4 class="hd-lg hd-sm hd-45">Verified Network</h4>
                            </div>
                            <p class="para">
                                Every member is a licensed professional, ensuring quality, trust, and accountability.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex wjl-item align-items-center justify-content-center justify-content-md-start mb-20 gap-20">
                                <div class="circle-md bg-secondry-theme">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h4 class="hd-lg hd-sm hd-45">Referral & Rebate System</h4>
                            </div>
                            <p class="para">
                                Earn rewards and rebates for every successful referral through our transparent tracking system.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex wjl-item align-items-center justify-content-center justify-content-md-start mb-20 gap-20">
                                <div class="circle-md bg-secondry-theme">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h4 class="hd-lg hd-sm hd-45">Marketplace Access</h4>
                            </div>
                            <p class="para">
                                Buy and sell products or services within a secure, members-only environment.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex wjl-item align-items-center justify-content-center justify-content-md-start mb-20 gap-20">
                                <div class="circle-md bg-secondry-theme">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h4 class="hd-lg hd-sm hd-45">County-Based Exclusivity</h4>
                            </div>
                            <p class="para">
                                Stand out in your trade with exclusive visibility within your registered county.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-sections.packages />
    <section class="join-league-sec sec-dark-bg">
        <div class="container">
            <div class="jl-lg-card position-relative">
                <div class="row row-gap-40 justify-content-center justify-content-md-start text-center text-md-start">
                    <div class="col-9">
                        <h2 class="hd-lg mb-10">Join the League and Start Earning Rebates Today.</h2>
                        <a href="" class="btn btn-black">Join the League</a>
                    </div>
                </div>
                <div class="jl-lg-card-img-wrapper position-absolute bottom-0 d-none d-md-block">
                    <img src="{{ asset('images/jl-right.png') }}" alt="jl-lg-card-image">
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-sec sec-dark-bg sec-gap-y">
        <div class="container">

            <div class="row text-center text-md-start row-gap-40 flex-column-reverse flex-md-row">
                <div class="col-lg-6">
                    <h2 class="hd-lg mb-20">
                        ABOUT US
                    </h2>
                    <ul class="about-us-list d-flex row-gap-40 flex-column">
                        <li class="about-us-list-item">
                            <span class="about-us-list-item-title hd-sm mb-10">Mission</span>
                            <p class="about-us-list-item-description para">
                                To empower licensed contractors through a verified digital ecosystem that encourages
                                collaboration, trust, and shared growth opportunities.
                            </p>
                        </li>
                        <li class="about-us-list-item">
                            <span class="about-us-list-item-title hd-sm mb-10">Vision</span>
                            <p class="about-us-list-item-description para">
                                To revolutionize the traditional “word-of-mouth” contractor network into a modern,
                                structured platform where professional relationships thrive.
                            </p>
                        </li>
                        <li class="about-us-list-item">
                            <span class="about-us-list-item-title hd-sm mb-10">Story</span>
                            <p class="about-us-list-item-description para">
                                The League of Contractors was created to bridge the gap between trusted tradespeople and
                                verified opportunities. We recognized that most contractor relationships were built on trust
                                and referrals so we designed a platform that digitizes this process, making it transparent,
                                scalable, and profitable.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="img-wrapper">
                        <img src="{{ asset('images/about-us-right.png') }}" alt="about-us-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contractor-marketplace-sec sec-bg-light sec-gap-y">
        <div class="container">
            <div class="row mb-40">
                <div class="col-8 text-center mx-auto">
                    <h2 class="hd-lg mb-20">
                        The Contractor Marketplace
                    </h2>
                    <p class="para">
                        Welcome to the League Marketplace — a trusted space where verified contractors can buy, sell, and
                        trade products and services within the professional community.
                    </p>
                </div>
            </div>
            <div class="row text-center text-md-start row-gap-40">
                <div class="col-lg-3 col-md-6">
                    <div class="con-place-card-wrapper">
                        <div class="img-wrapper">
                            <img class="" src="{{ asset('images/con-place-01.png') }}"
                                alt="Contractor Marketplace Image">
                        </div>
                        <div class="content-wrapper">
                            <h4 class="hd-lg hd-sm mb-20">Tools & Equipment</h4>
                            <p class="text-white mb-20">Power tools, safety gear, rentals, and
                                accessories</p>
                            <a href="" class="btn btn-outline">Explore Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="con-place-card-wrapper">
                        <div class="img-wrapper">
                            <img class="" src="{{ asset('images/con-place-02.png') }}"
                                alt="Contractor Marketplace Image">
                        </div>
                        <div class="content-wrapper">
                            <h4 class="hd-lg hd-sm mb-20">Building Materials</h4>
                            <p class="text-white mb-20">Lumber, concrete, paint, sealants, insulation</p>
                            <a href="" class="btn btn-outline">Explore Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="con-place-card-wrapper">
                        <div class="img-wrapper">
                            <img class="" src="{{ asset('images/con-place-03.png') }}"
                                alt="Contractor Marketplace Image">
                        </div>
                        <div class="content-wrapper">
                            <h4 class="hd-lg hd-sm mb-20">Professional Services</h4>
                            <p class="text-white mb-20">Accounting, insurance, marketing, and design</p>
                            <a href="" class="btn btn-outline">Explore Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="con-place-card-wrapper">
                        <div class="img-wrapper">
                            <img class="" src="{{ asset('images/con-place-04.png') }}"
                                alt="Contractor Marketplace Image">
                        </div>
                        <div class="content-wrapper">
                            <h4 class="hd-lg hd-sm mb-20">Technology & Software</h4>
                            <p class="text-white mb-20">Project management apps, invoicing tools, CRM systems</p>
                            <a href="" class="btn btn-outline">Explore Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners-sec sec-dark-bg sec-gap-y">
        <div class="container">
            <div class="row mb-40 align-items-center row-gap-40 justify-content-between text-center text-md-start">
                <div class="col-lg-4">
                    <h2 class="hd-lg mb-10">PARTNERSHIPS</h2>
                    <p class="para">
                        Strategic Partners - Empowering Contractors with Expert Support.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="para">
                        We collaborate with leading service providers who specialize in helping contractors succeed - from
                        accountants to insurance brokers, marketers, and beyond.
                    </p>
                </div>
            </div>
            <div class="row row-gap-40 align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="row row-gap-20 align-items-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/01.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/02.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/03.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/04.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/01.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/02.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/03.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="partners-card-wrapper">
                                <div class="img-wrapp text-center">
                                    <img src="{{ asset('images/partners/04.png') }}" alt="Partners Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h4 class="hd-lg hd-sm hd-45 mb-10">Join The Partners Network</h4>
                        <a href="" class="btn btn-secondary">Become a Partner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="resources-sec sec-bg-light sec-gap-y">
        <div class="container">
            <div class="row row-gap-40 align-items-center justify-content-between">
                <div class="col-lg-6">
                    <h2 class="hd-lg text-center text-md-start">RESOURCES</h2>
                </div>
                <div class="col-lg-6 text-center text-md-end">
                    <a href="" class="btn btn-secondary">View All Resources</a>
                </div>
                <div class="col-lg-6">
                    <div
                        class="resources-card-wrapper d-flex row-gap-20 align-items-center flex-column flex-md-row text-center text-md-start justify-content-between gap-20">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/con-place-01.png') }}" alt="Resources Image">
                        </div>
                        <div class="resources-card-content">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">Business Guides</h4>
                            <p class="para mb-10">
                                Estimating, invoicing, project management tips.
                            </p>
                            <a href="javascript:;" class="read-more-btn">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="resources-card-wrapper d-flex row-gap-20 align-items-center flex-column flex-md-row text-center text-md-start justify-content-between gap-20">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/con-place-02.png') }}" alt="Resources Image">
                        </div>
                        <div class="resources-card-content">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">Legal & Compliance</h4>
                            <p class="para mb-10">
                                Licensing rules and safety regulations by county.
                            </p>
                            <a href="javascript:;" class="read-more-btn">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="resources-card-wrapper d-flex row-gap-20 align-items-center flex-column flex-md-row text-center text-md-start justify-content-between gap-20">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/con-place-03.png') }}" alt="Resources Image">
                        </div>
                        <div class="resources-card-content">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">Training & Education</h4>
                            <p class="para mb-10">
                                Webinars, certification courses, and partner programs.
                            </p>
                            <a href="javascript:;" class="read-more-btn">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="resources-card-wrapper d-flex row-gap-20 align-items-center flex-column flex-md-row text-center text-md-start justify-content-between gap-20">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/con-place-01.png') }}" alt="Resources Image">
                        </div>
                        <div class="resources-card-content">
                            <h4 class="hd-lg hd-sm hd-45 mb-20">Member Stories</h4>
                            <p class="para mb-10">
                                Success cases from within the League.
                            </p>
                            <a href="javascript:;" class="read-more-btn">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us-sec sec-dark-bg sec-gap-y">
        <div class="container">
            <div class="row mb-40">
                <div class="col-6 mx-auto text-center">
                    <h2 class="hd-lg mb-20">CONTACT US</h2>
                    <p class="para">
                        Have questions about membership, verification, or your account? Reach out to our team — we’re happy
                        to help.
                    </p>
                </div>
            </div>
            <div class="row row-gap-40">
                <div class="col-lg-7 position-relative">
                    <div class="d-flex flex-column flex-md-row row-gap-20 align-items-center justify-content-between conact-sec-card glass mb-40">
                        <div>
                            <span class="contact-sec-card-item"><span class="icon-wrapper me-2"><i
                                        class="fa-solid fa-envelope"></i></span> <a class="contact-sec-card-item-link"
                                    href="mailto:support@leagueofcontractors.com">support@leagueofcontractors.com</a></span>
                        </div>
                        <div>
                            <span class="contact-sec-card-item"><span class="icon-wrapper me-2"><i
                                        class="fa-solid fa-clock"></i></span> Monday – Friday, 9AM – 5PM EST</span>
                        </div>
                    </div>
                    <div class="img-wrapper position-absolute contact-sec-left-img d-none d-md-block">
                        <img src="{{ asset('images/contact-sec-left.png') }}" alt="Contact Us Image">

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-wrapper glass">
                        <form action="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-between mb-20">
                                        <div>
                                            <h4 class="secondry-font fs-60 text-white fw-700">Get In Touch</h4>
                                            <p class="para">
                                                We’re Here to Help.
                                            </p>
                                        </div>
                                        <div>
                                            <div class="img-wrapper">
                                                <img src="{{ asset('images/logo-02.png') }}" style="max-width: 40px;"
                                                    alt="Contact Us Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field-wrapper mb-20">
                                        <input type="text" class="glass input-field" placeholder="Name">
                                    </div>
                                    <div class="field-wrapper mb-20">
                                        <input type="text" class="glass input-field" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="field-wrapper mb-20">
                                        <input type="text" class="glass input-field" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="field-wrapper mb-20">
                                        <input type="text" class="glass input-field" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="field-wrapper mb-20">
                                        <textarea class="glass input-field" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="bootstrap btn btn-secondary w-100 submit-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection