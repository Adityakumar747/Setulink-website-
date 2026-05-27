<?php
$page_title = 'Free Quote | CCTV & Security Solutions | Setulinks';
$page_description = 'Get a free quote for CCTV installation and security solutions from Setulinks. Affordable surveillance systems for homes and businesses in Ranchi, Jharkhand.';
$page_keywords = 'free CCTV quote, security system quote, CCTV installation price, get a quote, affordable surveillance';
$page_og_image = 'assets/img/other-images/quote.jpg';
require_once 'inc/header.php';
?>

<div class="container-fluid page-header py-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Free Quote</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Free Quote</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Quote -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="assets/img/other-images/quote.webp" style="object-fit: cover;" alt="Get a Free Quote" loading="lazy" width="800" height="600">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary divider-bar mb-3"></div>
                    <h2 class="display-5 mb-5 text-primary">Free Quote</h2>
                    <p class="mb-4 pb-2">Get a free, no-obligation quote for professional CCTV installation and security
                        solutions tailored to your home or business needs. Our experts will recommend the right
                        surveillance system at an affordable price with guaranteed quality.</p>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control border-0 input-tall"
                                    placeholder="Your Name" required aria-label="Your Name">
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control border-0 input-tall"
                                    placeholder="Your Email" required aria-label="Your Email">
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="mobile" class="form-control border-0 input-tall"
                                    placeholder="Your Mobile" required aria-label="Your Mobile Number">
                                <div class="invalid-feedback">Please enter your mobile number.</div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="service" class="form-select border-0 input-tall" required
                                    aria-label="Select A Service">
                                    <option value="" selected disabled>Select A Service</option>
                                    <option value="commercial-cctv">Commercial CCTV System</option>
                                    <option value="fingerprint-access">Finger Print Access</option>
                                    <option value="fire-detection">Fire Detection and Safety</option>
                                    <option value="smart-home">Smart Home Security</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <div class="col-12">
                                <textarea name="note" class="form-control border-0" placeholder="Special Note"
                                    aria-label="Special Note"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Get A Free Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require_once 'inc/footer.php' ?>