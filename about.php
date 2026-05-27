<?php
$page_title = 'About Us | Setulinks - CCTV & Security Solutions';
$page_description = 'Learn about Setulinks – your trusted provider of professional CCTV installation, access control, and 24/7 security solutions in Ranchi, Jharkhand.';
$page_keywords = 'about Setulinks, CCTV company Ranchi, security solutions provider, trusted surveillance company, Jharkhand';
$page_og_image = 'assets/img/other-images/about.jpg';
require_once 'inc/header.php';
?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Facts -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 bg-primary p-4 p-xl-5 rounded">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle bg-dark icon-circle">
                            <i class="fas fa-home fa-2x text-light"></i>
                        </div>
                        <span class="h2 display-1 mb-0" style="color:#efefef10;">01</span>
                    </div>
                    <h3 class="h5 text-white">Home Security</h3>
                    <hr class="w-25">
                    <span>We provide reliable home security solutions including CCTV cameras and monitoring systems to
                        keep your family and property safe 24/7.</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100 bg-primary p-4 p-xl-5 rounded">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle bg-dark icon-circle">
                            <i class="fas fa-key fa-2x text-light"></i>
                        </div>
                        <span class="h2 display-1 mb-0" style="color:#efefef10;">02</span>
                    </div>
                    <h3 class="h5 text-white">Access Control</h3>
                    <hr class="w-25">
                    <span>Our access control systems help you manage and restrict entry, ensuring only authorized people
                        can access your premises.</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 bg-primary p-4 p-xl-5 rounded">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle bg-dark icon-circle">
                            <i class="fas fa-headset fa-2x text-light"></i>
                        </div>
                        <span class="h2 display-1 mb-0" style="color:#efefef10;">03</span>
                    </div>
                    <h3 class="h5 text-white">24/7 Support</h3>
                    <hr class="w-25">
                    <span>We offer round-the-clock support to ensure your security systems are always working properly
                        and efficiently.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="assets/img/other-images/about.webp" style="object-fit: cover;" alt="About Setulinks" loading="lazy" width="800" height="600">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary divider-bar mb-3"></div>
                    <h2 class="display-5 mb-4 text-primary">About Us</h2>
                    <p class="mb-4 pb-2">We provide trusted CCTV installation and security solutions for homes and
                        businesses. Our focus is on delivering reliable surveillance systems, professional service, and
                        long-term support to ensure complete safety and peace of mind.
                    </p>
                    <div class="row g-4 mb-4 pb-3">

                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle icon-circle">
                                    <i class="fas fa-smile-beam fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <span class="h2 mb-1 d-block js-counter" data-target="3671">0</span>
                                    <p class="fw-medium text-primary mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle icon-circle">
                                    <i class="fas fa-clipboard-check fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <span class="h2 mb-1 d-block js-counter" data-target="3671">0</span>
                                    <p class="fw-medium text-primary mb-0">Projects Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="services.php" class="btn btn-primary rounded-pill py-3 px-5">Explore More<span
                            class="visually-hidden"> Security Options</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/team-section.php'; ?>




<?php require_once 'inc/footer.php' ?>