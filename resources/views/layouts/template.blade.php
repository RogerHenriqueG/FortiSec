@extends('layouts.app')

@section('content')

<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="position-relative bg-dark overflow-hidden">
        <div class="container position-relative z-index-2 space-top-3 space-top-md-4 space-bottom-3 space-bottom-md-4">
            <div class="w-md-80 w-xl-60 text-center mx-md-auto">
                <div class="mb-7">
                    <h1 class="display-4 text-white mb-4">Collaborative tools to design user experience</h1>
                    <p class="lead text-white mb-4">For everyone, from beginners to experts.</p>
                </div>
                <a class="btn btn-light btn-wide transition-3d-hover" href="#">Start Now</a>
                <a class="btn text-white" href="#">Get in Touch <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
        </div>

        <!-- SVG Shapes -->
        <figure class="position-absolute top-0 left-0 w-60">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
                <g opacity=".4">
                    <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078" y1="1.7251" x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
                        <stop offset="0.4976" style="stop-color:#559bff" />
                        <stop offset="1" style="stop-color:#377DFF" />
                    </linearGradient>
                    <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   " />
                    <linearGradient id="doubleEllipseTopLeftID2" gradientUnits="userSpaceOnUse" x1="1717.1648" y1="3.779560e-05" x2="1717.1648" y2="644.0417" gradientTransform="matrix(-1 0 0 1 2600 0)">
                        <stop offset="1.577052e-06" style="stop-color:#559bff" />
                        <stop offset="1" style="stop-color:#377DFF" />
                    </linearGradient>
                    <polygon fill="url(#doubleEllipseTopLeftID2)" points="519.7,0 1039.4,0.6 1246,639.1 725.2,644   " />
                </g>
            </svg>
        </figure>
        <figure class="position-absolute right-0 bottom-0 left-0 mb-n1">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
            </svg>
        </figure>
        <!-- End SVG Shapes -->
    </div>
    <!-- End Hero Section -->

    <!-- Clients Section -->
    <div class="border-bottom">
        <div class="container space-1 space-top-md-0">
            <div class="w-lg-80 mx-lg-auto">
                <div class="row justify-content-center">
                    <div class="col-4 col-sm-3 col-md my-2">
                        <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/airbnb.svg" alt="Image Description">
                    </div>
                    <div class="col-4 col-sm-3 col-md my-2">
                        <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/slack.svg" alt="Image Description">
                    </div>
                    <div class="col-4 col-sm-3 col-md my-2">
                        <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/fitbit.svg" alt="Image Description">
                    </div>
                    <div class="col-4 col-sm-3 col-md my-2">
                        <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/hubspot.svg" alt="Image Description">
                    </div>
                    <div class="col-4 col-sm-3 col-md my-2">
                        <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/weebly.svg" alt="Image Description">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Section -->

    <!-- Features Section -->
    <div id="featuresSection" class="container space-2 space-lg-3">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-9 mb-lg-0">
                <div class="mb-3">
                    <h2 class="h1">Whatever work you do, use our design</h2>
                </div>

                <p>After brainstorming about insights, get the power to create something real. Bring your ideas to life and share your vision with concrete elements. Make collaboration and communication easier with your team or your client.</p>

                <p>Use our tools to explore your ideas and make your vision come true. Then share your work easily.</p>

                <div class="mt-4">
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="#">Start Now</a>
                </div>
            </div>

            <div class="col-lg-6 col-xl-5">
                <!-- SVG Element -->
                <div class="position-relative min-h-500rem mx-auto" style="max-width: 28rem;">
                    <figure class="position-absolute top-0 right-0 z-index-2 mr-11" data-aos="fade-up">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 450 450" width="165" height="165">
                            <g>
                                <defs>
                                    <path id="circleImgID2" d="M225,448.7L225,448.7C101.4,448.7,1.3,348.5,1.3,225l0,0C1.2,101.4,101.4,1.3,225,1.3l0,0
                      c123.6,0,223.7,100.2,223.7,223.7l0,0C448.7,348.6,348.5,448.7,225,448.7z" />
                                </defs>
                                <clipPath id="circleImgID1">
                                    <use xlink:href="#circleImgID2" />
                                </clipPath>
                                <g clip-path="url(#circleImgID1)">
                                    <image width="450" height="450" xlink:href="./assets/img/450x450/img1.jpg"></image>
                                </g>
                            </g>
                        </svg>
                    </figure>

                    <figure class="position-absolute top-0 left-0" data-aos="fade-up" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120" height="120">
                            <circle fill="none" stroke="#377DFF" stroke-width="75" cx="167.6" cy="167.6" r="130.1" />
                        </svg>
                    </figure>

                    <figure class="d-none d-sm-block position-absolute top-0 left-0 mt-11" data-aos="fade-up" data-aos-delay="200">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 515 515" width="200" height="200">
                            <g>
                                <defs>
                                    <path id="circleImgID4" d="M260,515h-5C114.2,515,0,400.8,0,260v-5C0,114.2,114.2,0,255,0h5c140.8,0,255,114.2,255,255v5
                      C515,400.9,400.8,515,260,515z" />
                                </defs>
                                <clipPath id="circleImgID3">
                                    <use xlink:href="#circleImgID4" />
                                </clipPath>
                                <g clip-path="url(#circleImgID3)">
                                    <image width="515" height="515" xlink:href="./assets/img/515x515/img1.jpg" transform="matrix(1 0 0 1 1.639390e-02 2.880859e-02)"></image>
                                </g>
                            </g>
                        </svg>
                    </figure>

                    <figure class="position-absolute top-0 right-0" style="margin-top: 11rem; margin-right: 13rem;" data-aos="fade-up" data-aos-delay="250">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 67 67" width="25" height="25">
                            <circle fill="#00C9A7" cx="33.5" cy="33.5" r="33.5" />
                        </svg>
                    </figure>

                    <figure class="position-absolute top-0 right-0 mr-3" style="margin-top: 8rem;" data-aos="fade-up" data-aos-delay="350">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 141 141" width="50" height="50">
                            <circle fill="#FFC107" cx="70.5" cy="70.5" r="70.5" />
                        </svg>
                    </figure>

                    <figure class="position-absolute bottom-0 right-0" data-aos="fade-up" data-aos-delay="400">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 770.4 770.4" width="280" height="280">
                            <g>
                                <defs>
                                    <path id="circleImgID6" d="M385.2,770.4L385.2,770.4c212.7,0,385.2-172.5,385.2-385.2l0,0C770.4,172.5,597.9,0,385.2,0l0,0
                      C172.5,0,0,172.5,0,385.2l0,0C0,597.9,172.4,770.4,385.2,770.4z" />
                                </defs>
                                <clipPath id="circleImgID5">
                                    <use xlink:href="#circleImgID6" />
                                </clipPath>
                                <g clip-path="url(#circleImgID5)">
                                    <image width="900" height="900" xlink:href="./assets/img/900x900/img2.jpg" transform="matrix(1 0 0 1 -64.8123 -64.8055)"></image>
                                </g>
                            </g>
                        </svg>
                    </figure>
                </div>
                <!-- End SVG Element -->
            </div>
        </div>
    </div>
    <!-- End Features Section -->

    <!-- Pricing Section -->
    <div class="overflow-hidden">
        <div class="container pb-4">
            <!-- Title -->
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                <h2 class="h1">Flexible and transparent pricing</h2>
                <p>Whatever your status, our offers evolve according to your needs.</p>
            </div>
            <!-- End Title -->

            <!-- Toggle Switch -->
            <div class="d-flex justify-content-center align-items-center mb-11">
                <span class="font-size-1 text-muted">Monthly</span>
                <label class="toggle-switch mx-2" for="customSwitch">
                    <input type="checkbox" class="js-toggle-switch toggle-switch-input" id="customSwitch" data-hs-toggle-switch-options='{
                     "targetSelector": "#pricingCount1, #pricingCount2, #pricingCount3"
                   }'>
                    <span class="toggle-switch-label">
                        <span class="toggle-switch-indicator"></span>
                    </span>
                </label>
                <div class="position-relative">
                    <span class="font-size-1 text-muted">Annual</span>

                    <!-- Arrow -->
                    <figure class="position-absolute top-0 text-nowrap mt-n5 ml-3 ml-md-7">
                        <svg class="d-block position-absolute mt-n2 ml-n4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 99.3 57" width="48">
                            <path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M2,39.5l7.7,14.8c0.4,0.7,1.3,0.9,2,0.4L27.9,42" />
                            <path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M11,54.3c0,0,10.3-65.2,86.3-50" />
                        </svg>
                        <span class="badge badge-primary badge-pill py-sm-2 px-sm-3">Save up to 10%</span>
                    </figure>
                    <!-- End Arrow -->
                </div>
            </div>
            <!-- End Toggle Switch -->

            <div class="row mx-lg-5">
                <div class="col-sm-6 col-lg-4 px-lg-5 mb-5">
                    <!-- Pricing -->
                    <div class="card shadow-none h-100">
                        <!-- Header -->
                        <div class="card-header border-0 text-center">
                            <span class="d-block h3 mb-0">Starter</span>
                            <span class="d-block">
                                <span class="font-size-4 text-primary font-weight-bold">
                                    <span class="mr-n2">$</span>
                                    <span id="pricingCount1" data-hs-toggle-switch-item-options='{
                             "min": 22,
                             "max": 12
                           }'>22</span>
                                </span>
                                <span class="font-size-1">/ mon</span>
                            </span>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    1 User
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    Front plan features
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    1 app
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    Integrations
                                </div>
                            </div>
                        </div>
                        <!-- End Body -->

                        <div class="card-footer border-0">
                            <button type="button" class="btn btn-soft-primary btn-block transition-3d-hover">Get Started</button>
                        </div>
                    </div>
                    <!-- End Pricing -->
                </div>

                <div class="col-sm-6 col-lg-4 px-lg-5 mb-5">
                    <!-- Pricing -->
                    <div class="position-relative">
                        <div class="card shadow-lg h-100">
                            <!-- Header -->
                            <div class="card-header border-0 text-center">
                                <span class="d-block h3 mb-0">Pro</span>
                                <span class="d-block">
                                    <span class="font-size-4 text-primary font-weight-bold">
                                        <span class="mr-n2">$</span>
                                        <span id="pricingCount2" data-hs-toggle-switch-item-options='{
                               "min": 44,
                               "max": 34
                             }'>44</span>
                                    </span>
                                    <span class="font-size-1">/ mon</span>
                                </span>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body">
                                <div class="media font-size-1 mb-3">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body">
                                        3 User
                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body">
                                        Front plan features
                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body">
                                        3 apps
                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body">
                                        Integrations
                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body">
                                        Product Support
                                    </div>
                                </div>
                            </div>
                            <!-- End Body -->

                            <div class="card-footer border-0">
                                <button type="button" class="btn btn-soft-primary btn-block transition-3d-hover">Get Started</button>
                            </div>
                        </div>

                        <!-- SVG Elements -->
                        <figure class="max-w-19rem w-100 position-absolute bottom-0 left-0 z-index-n1">
                            <div class="mb-n7 ml-n7">
                                <img class="img-fluid" src="./assets/svg/components/dots-2.svg" alt="Image Description">
                            </div>
                        </figure>
                        <figure class="max-w-15rem w-100 position-absolute top-0 right-0 z-index-n1">
                            <div class="mt-n7 mr-n7">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 260" xml:space="preserve">
                                    <circle fill="#ffc107" cx="130" cy="130" r="130" />
                                </svg>
                            </div>
                        </figure>
                        <!-- End SVG Elements -->
                    </div>
                    <!-- End Pricing -->
                </div>

                <div class="col-sm-6 col-lg-4 px-lg-5 mb-5">
                    <!-- Pricing -->
                    <div class="card shadow-none h-100">
                        <!-- Header -->
                        <div class="card-header border-0 text-center">
                            <span class="d-block h3 mb-0">Enterprise</span>
                            <span class="d-block">
                                <span class="font-size-4 text-primary font-weight-bold">
                                    <span class="mr-n2">$</span>
                                    <span id="pricingCount3" data-hs-toggle-switch-item-options='{
                             "min": 69,
                             "max": 59
                           }'>69</span>
                                </span>
                                <span class="font-size-1">/ mon</span>
                            </span>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    5 User
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    Front plan features
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    All apps
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    Integrations
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                <div class="media-body">
                                    Product Support
                                </div>
                            </div>
                        </div>
                        <!-- End Body -->

                        <div class="card-footer border-0">
                            <button type="button" class="btn btn-soft-primary btn-block transition-3d-hover">Get Started</button>
                        </div>
                    </div>
                    <!-- End Pricing -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Section -->

    <!-- Icon Blocks Section -->
    <div class="container space-top-2 space-top-lg-3">
        <div class="row justify-content-lg-center">
            <div class="col-md-6 col-lg-5 mb-3 mb-md-7">
                <!-- Icon Blocks -->
                <div class="media pr-lg-5" data-aos="fade-up">
                    <figure class="w-100 max-w-8rem mr-4">
                        <img class="img-fluid" src="./assets/svg/icons/icon-9.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4>Responsive</h4>
                        <p>Front is an incredibly beautiful, fully responsive, and mobile-first projects on the web.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-7">
                <!-- Icon Blocks -->
                <div class="media pl-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <figure class="w-100 max-w-8rem mr-4">
                        <img class="img-fluid" src="./assets/svg/icons/icon-3.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4>Customizable</h4>
                        <p>Front template can be easily customized with its cutting-edge components and features.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-7 mb-lg-0">
                <!-- Icon Blocks -->
                <div class="media pr-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <figure class="w-100 max-w-8rem mr-4">
                        <img class="img-fluid" src="./assets/svg/icons/icon-5.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4>Premium</h4>
                        <p>Front is not only for developers but also for designers, and includes a Sketch file.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5">
                <!-- Icon Blocks -->
                <div class="media pl-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <figure class="w-100 max-w-8rem mr-4">
                        <img class="img-fluid" src="./assets/svg/icons/icon-2.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4>Documentation</h4>
                        <p>Every component and plugin is well documented with live examples.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </div>
    <!-- End Icon Blocks Section -->

    <!-- Articles Section -->
    <div class="container space-top-2 space-top-lg-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">Read our latest news</h2>
            <p>We've helped some great companies brand, design and get to market.</p>
        </div>
        <!-- End Title -->

        <div class="row mx-n2 mb-5 mb-md-9">
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="#">
                    <img class="card-img-top" src="./assets/img/500x280/img9.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">Product</span>
                        <h5 class="mb-0">Better is when everything works together</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="#">
                    <img class="card-img-top" src="./assets/img/500x280/img10.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">Business</span>
                        <h5 class="mb-0">What CFR really is about</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-sm-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="#">
                    <img class="card-img-top" src="./assets/img/500x280/img11.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">Business</span>
                        <h5 class="mb-0">Should Product Owners think like entrepreneurs?</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="#">
                    <img class="card-img-top" src="./assets/img/500x280/img12.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">Facilitate</span>
                        <h5 class="mb-0">Announcing Front Strategies: Ready-to-use rules</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>

        <!-- Info -->
        <div class="position-relative z-index-2 text-center">
            <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                Want to read more? <a class="font-weight-bold ml-3" href="#">Go here <span class="fas fa-angle-right ml-1"></span></a>
            </div>
        </div>
        <!-- End Info -->
    </div>
    <!-- End Articles Section -->

    <!-- Subscription Section -->
    <div class="overflow-hidden space-top-lg-3 space-bottom-lg-1">
        <div class="position-relative">
            <div class="container-fluid space-2 space-lg-0">
                <div class="row justify-content-sm-center align-items-lg-center text-center">
                    <div class="col-lg-4 d-none d-lg-block">
                        <div data-aos="fade-up">
                            <!-- Device Mockup -->
                            <div class="transform-rotate-3">
                                <div class="device device-ipad">
                                    <img class="device-ipad-frame" src="./assets/svg/components/ipad.svg" alt="Image Description">
                                    <img class="device-ipad-screen" src="./assets/img/533x711/img1.jpg" alt="Image Description">
                                </div>

                                <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1 mr-n8 mb-n5">
                                    <img class="img-fluid" src="./assets/svg/components/dots-2.svg" alt="Image Description">
                                </figure>
                            </div>
                            <!-- End Device Mockup -->
                        </div>
                    </div>

                    <div class="col-sm-8 col-lg-4">
                        <!-- Title -->
                        <div class="mb-5">
                            <h2 class="h1">Ready to growth your business?</h2>
                            <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Form -->
                        <form class="js-validate">
                            <label class="sr-only" for="signupSrEmail">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="signupSrEmail" placeholder="Email" aria-label="Email" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-block btn-primary">Get Started</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div data-aos="fade-up" data-aos-delay="200">
                            <!-- Device Mockup -->
                            <div class="max-w-33rem w-100 transform-rotate-2 ml-auto">
                                <div class="device device-iphone-x">
                                    <img class="device-iphone-x-frame" src="./assets/svg/components/iphone-x.svg" alt="Image Description">
                                    <img class="device-iphone-x-screen" src="./assets/img/407x867/img5.jpg" alt="Image Description">
                                </div>

                                <figure class="max-w-19rem w-100 position-absolute top-0 left-0 z-index-n1 mt-n5 ml-n5">
                                    <img class="img-fluid" src="./assets/svg/components/dots-2.svg" alt="Image Description">
                                </figure>
                            </div>
                            <!-- End Device Mockup -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-block bg-light content-centered-y w-100 h-75 z-index-n1"></div>
        </div>
    </div>
    <!-- End Subscription Section -->

    <!-- Clients Section -->
    <div class="container space-bottom-2 space-bottom-lg-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-6">
            <h2>Trusted by Open Source, enterprise, and more than 33,000 of you</h2>
        </div>
        <!-- End Title -->

        <!-- Clients -->
        <div class="row justify-content-sm-center text-center">
            <div class="col-4 col-sm-2 mb-7">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/slack.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/stripe.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/airbnb.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/weebly.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/spotify.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/uber.svg" alt="Image Description">
            </div>
            <div class="d-none d-sm-block w-100"></div>
            <div class="col-4 col-sm-2 mb-7 mb-sm-0">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/shopify.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7 mb-sm-0">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/fitbit.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2 mb-7 mb-sm-0">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/hubspot.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/kaplan.svg" alt="Image Description">
            </div>
            <div class="col-4 col-sm-2">
                <img class="max-w-11rem max-w-md-13rem mx-auto" src="./assets/svg/clients-logo/paypal.svg" alt="Image Description">
            </div>
        </div>
        <!-- End Clients -->
    </div>
    <!-- End Clients Section -->
</main>
<!-- ========== END MAIN ========== -->

@endsection
