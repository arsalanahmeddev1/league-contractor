@extends('layouts.web.master')
@section('title', 'Services')
@section('content')

<!-- About Us Section -->
<section class="inner-banner about-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hd-lg">Services</h1>
            </div>
        </div>
    </div>
</section>
<section class="services-sec sec-dark-bg sec-gap-y">
    <div class="container">
        <div class="row row-gap-40">
            <div class="col-lg-4">
                <div class="services-filters-wrapper sec-bg-light py-20 px-20 radius-10">
                    <div class="services-filters-title mb-20 d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-white hd-lg hd-sm">Service Filter</span>
                        </div>
                        <div>
                            <button class="bootstrap btn btn-primary btn-sm">Service Filter</button>
                        </div>
                    </div>
                    <div class="bootstrap accordion" id="accordionExample">
                        <div class="bootstrap accordion-item">
                          <h2 class="bootstrap accordion-header">
                            <button class="bootstrap accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Search By text
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="bootstrap accordion-body">
                                <div class="field-wrapper">
                                    <input type="text" class="glass input-field field-sm" placeholder="What are you looking for?">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Search By Location
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <div class="field-wrapper mb-10">
                                 <label for="location" class="mb-10">Location</label>
                                  <input type="text" class="glass input-field field-sm" placeholder="Enter Location">
                               </div>
                               <div class="field-wrapper mb-10">
                                 <label for="location" class="mb-10">Distance</label>
                                 <input type="range" class="form-range" id="range1">
                               </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Search By Category
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="field-wrapper">
                                    <select name="category" id="category" class="glass input-field selct-field field-sm">
                                        <option value="">Select Category</option>
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                Search By Sub-Category
                            </button>
                          </h2>
                          <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="field-wrapper">
                                    <select name="category" id="category" class="glass input-field selct-field field-sm">
                                        <option value="">Select Category</option>
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                                Sort-by
                            </button>
                          </h2>
                          <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="field-wrapper">
                                    <select name="category" id="category" class="glass input-field selct-field field-sm">
                                        <option value="">Select Category</option>
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row row-gap-40">
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-list-wrapper">
                            <div class="services-card-wrapper sec-bg-light radius-10">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/hero-bg.png') }}" alt="service-image">
                                </div>
                                <div class="services-content py-20 px-20">
                                    <div class="services-content-top">
                                        <div class="d-flex align-items-center mb-20 gap-20">
                                            <div class="services-profile-img position-relative">
                                                <img src="{{ asset('images/resources-04.png') }}" alt="profile picture">
                                                <div class="online-badge-wrapper position-absolute">
                                                </div>
                                            </div>
                                            <div class="services-content-top-right">
                                                <h4 class="text-white secondry-font">contractor name</h4>
                                            </div>
                                        </div>
                                        <h4 class="fs-14 fw-300 text-secondry-theme mb-20">MASONRY</h4>
                                        <h4 class="fs-14 fw-300 text-white mb-20"><span><i class="fa-solid fa-location-dot"></i></span> Midland,Texas-79701</h4>
                                        <div class="d-flex align-items-center gap-10">
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                            <a href="" class="bootstrap btn btn-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection