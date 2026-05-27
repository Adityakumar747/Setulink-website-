<?php
$page_title = 'Contact Us | Setulinks - Get in Touch';
$page_description = 'Contact Setulinks for professional CCTV installation and security solutions. We are based in Ranchi, Jharkhand. Call or email us today for a free consultation.';
$page_keywords = 'contact Setulinks, CCTV company contact Ranchi, security solutions inquiry, get in touch surveillance';
$page_og_image = 'assets/img/Crousel-image/carousel-1.jpg';
require_once 'inc/header.php';
?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Contact -->
<div class="container-fluid bg-light my-5 overflow-hidden px-lg-0">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h2 class="display-5 mb-4 text-primary">Contact Us</h2>
                    </div>
                    <p class="text-muted">Get your doubt clear, only one click away...</p>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 input-tall" id="name"
                                    placeholder="Your Name" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 input-tall" id="email"
                                    placeholder="Your Email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control border-0 input-tall" id="subject"
                                    placeholder="Subject" required>
                                <div class="invalid-feedback">Please provide a subject.</div>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control border-0" placeholder="Leave a message here"
                                    id="message" style="height: 100px" required></textarea>
                                <div class="invalid-feedback">Please enter your message.</div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="<?php echo $company_map_embed; ?>"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/footer.php' ?>