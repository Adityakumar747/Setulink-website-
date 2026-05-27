<?php
http_response_code(404);
$page_title       = '404 - Page Not Found | Setulinks';
$page_description = 'The page you are looking for does not exist. Return to the Setulinks homepage for CCTV installation and security solutions.';
$page_keywords    = '404, page not found, Setulinks';
$page_og_image    = 'assets/img/Crousel-image/carousel-1.jpg';
$page_robots      = 'noindex, nofollow';
require_once 'inc/header.php';
?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">404 Error</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
            </ol>
        </nav>
    </div>
</div>

<!-- 404 -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h2 class="display-1 text-primary">404</h2>
                <h2 class="mb-4">Page Not Found</h2>
                <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Go Back To Home</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/footer.php' ?>