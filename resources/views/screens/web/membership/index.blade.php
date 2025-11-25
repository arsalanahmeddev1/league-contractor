@extends('layouts.web.master')
@section('title', 'Membership')
@section('content')

<!-- About Us Section -->
<section class="inner-banner about-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hd-lg">Membership</h1>
            </div>
        </div>
    </div>
</section>
<section class="membership-sec sec-dark-bg sec-gap-y">
    <div class="container">
        <div class="row row-gap-40">
            <div class="col-12 text-center mb-60">
                <h2 class="hd-lg mb-20">Choose Your Membership Plan</h2>
                <p class="para">Select the perfect plan that fits your needs</p>
            </div>
            <!-- Bootstrap Tabs -->
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center mb-40" id="membershipTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true">
                            Monthly
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false">
                            Yearly
                        </button>
                    </li>
                </ul>
                
                <div class="tab-content" id="membershipTabsContent">
                    <!-- Monthly Plans -->
                    <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row row-gap-40">
                            <div class="col-lg-4 col-md-6">
                                <div class="pkg-wrapper glass">
                                    <h4 class="hd-lg hd-sm mb-20">Basic Member</h4>
                                    <h4 class="hd-lg price-text mb-30">$0<span class="fs-30">/month</span></h4>
                                    <ul class="pkg-list position-relative">
                                        <li class="pkg-list-item">Create a limited profile</li>
                                        <li class="pkg-list-item">Browse verified members</li>
                                        <li class="pkg-list-item">Receive occasional public leads</li>
                                        <li class="pkg-list-item">Basic support</li>
                                    </ul>
                                    <a href="" class="btn btn-secondary w-100">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pkg-wrapper glass">
                                    <div class="popular-badge">
                                        <span class="badge-text">Most Popular</span>
                                    </div>
                                    <h4 class="hd-lg hd-sm mb-20">Pro Member</h4>
                                    <h4 class="hd-lg price-text mb-30">$49<span class="fs-30">/month</span></h4>
                                    <ul class="pkg-list position-relative">
                                        <li class="pkg-list-item">Verified contractor listing</li>
                                        <li class="pkg-list-item">Access referral & rebate system</li>
                                        <li class="pkg-list-item">Add products/services in the marketplace</li>
                                        <li class="pkg-list-item">Participate in county exclusivity</li>
                                        <li class="pkg-list-item">Priority support</li>
                                    </ul>
                                    <a href="" class="btn btn-secondary w-100">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pkg-wrapper glass">
                                    <h4 class="hd-lg hd-sm mb-20">Elite Member</h4>
                                    <h4 class="hd-lg price-text mb-30">$99<span class="fs-30">/month</span></h4>
                                    <ul class="pkg-list position-relative">
                                        <li class="pkg-list-item">Top-tier visibility</li>
                                        <li class="pkg-list-item">Featured listing in your county</li>
                                        <li class="pkg-list-item">Increased referral commission rates</li>
                                        <li class="pkg-list-item">Direct access to strategic partner perks</li>
                                        <li class="pkg-list-item">24/7 dedicated support</li>
                                        <li class="pkg-list-item">Advanced analytics</li>
                                    </ul>
                                    <a href="" class="btn btn-secondary w-100">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Yearly Plans -->
                    <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                        <div class="row row-gap-40">
                            <div class="col-lg-4 col-md-6">
                                <div class="pkg-wrapper glass">
                                    <h4 class="hd-lg hd-sm mb-20">Basic Member</h4>
                                    <h4 class="hd-lg price-text mb-30">$0<span class="fs-30">/year</span></h4>
                                    <p class="para mb-20 text-secondry-theme">Save $0 annually</p>
                                    <ul class="pkg-list position-relative">
                                        <li class="pkg-list-item">Create a limited profile</li>
                                        <li class="pkg-list-item">Browse verified members</li>
                                        <li class="pkg-list-item">Receive occasional public leads</li>
                                        <li class="pkg-list-item">Basic support</li>
                                    </ul>
                                    <a href="" class="btn btn-secondary w-100">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pkg-wrapper glass">
                                    <div class="popular-badge">
                                        <span class="badge-text">Most Popular</span>
                                    </div>
                                    <h4 class="hd-lg hd-sm mb-20">Pro Member</h4>
                                    <h4 class="hd-lg price-text mb-30">$490<span class="fs-30">/year</span></h4>
                                    <p class="para mb-20 text-secondry-theme">Save $98 annually</p>
                                    <ul class="pkg-list position-relative">
                                        <li class="pkg-list-item">Verified contractor listing</li>
                                        <li class="pkg-list-item">Access referral & rebate system</li>
                                        <li class="pkg-list-item">Add products/services in the marketplace</li>
                                        <li class="pkg-list-item">Participate in county exclusivity</li>
                                        <li class="pkg-list-item">Priority support</li>
                                    </ul>
                                    <a href="" class="btn btn-secondary w-100">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pkg-wrapper glass">
                                    <h4 class="hd-lg hd-sm mb-20">Elite Member</h4>
                                    <h4 class="hd-lg price-text mb-30">$990<span class="fs-30">/year</span></h4>
                                    <p class="para mb-20 text-secondry-theme">Save $198 annually</p>
                                    <ul class="pkg-list position-relative">
                                        <li class="pkg-list-item">Top-tier visibility</li>
                                        <li class="pkg-list-item">Featured listing in your county</li>
                                        <li class="pkg-list-item">Increased referral commission rates</li>
                                        <li class="pkg-list-item">Direct access to strategic partner perks</li>
                                        <li class="pkg-list-item">24/7 dedicated support</li>
                                        <li class="pkg-list-item">Advanced analytics</li>
                                    </ul>
                                    <a href="" class="btn btn-secondary w-100">Join Now</a>
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