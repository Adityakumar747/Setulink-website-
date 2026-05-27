</main>
<!-- Footer -->
<div class="container-fluid text-secondary footer footer-background mt-5 pb-5 pt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="h5 text-primary mb-4">Address</h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $company_address; ?></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $company_phone; ?></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $company_email; ?></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="<?php echo $social_links['twitter']; ?>"
                        target="_blank" rel="noopener noreferrer" aria-label="Follow us on Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="<?php echo $social_links['facebook']; ?>"
                        target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="<?php echo $social_links['youtube']; ?>"
                        target="_blank" rel="noopener noreferrer" aria-label="Follow us on YouTube"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="<?php echo $social_links['linkedin']; ?>"
                        target="_blank" rel="noopener noreferrer" aria-label="Follow us on LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="h5 text-primary mb-4">Services</h3>
                <a class="btn btn-link" href="services.php#business-security">Business Security</a>
                <a class="btn btn-link" href="services.php#fire-detection">Fire Detection</a>
                <a class="btn btn-link" href="services.php#alarm-systems">Alarm Systems</a>
                <a class="btn btn-link" href="services.php#cctv-video">CCTV &amp; Video</a>
                <a class="btn btn-link" href="services.php#smart-home">Smart Home</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="h5 text-primary mb-4">Quick Links</h3>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact Us</a>
                <a class="btn btn-link" href="services.php">Our Services</a>
                <a class="btn btn-link" href="term.php#terms-of-use">Terms &amp; Condition</a>
                <a class="btn btn-link" href="term.php#privacy-policy">Privacy Policy</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="h5 text-primary mb-4">Newsletter</h3>
                <p>Subscribe to get updates on CCTV installation, security systems, and smart surveillance solutions for
                    your home and business.</p>
                <div class="position-relative w-100 newsletter-section">
                    <label for="newsletter-email" class="visually-hidden">Your email address</label>
                    <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="email"
                        id="newsletter-email" name="newsletter-email" placeholder="Your email"
                        aria-label="Enter your email for newsletter">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                        aria-label="Subscribe to newsletter">SignUp</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyright -->
<div class="container-fluid py-3" style="background: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="text-light" href="index.php"><?php echo $company_name; ?></a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Developed By <a class="text-light" href="http://sysrootsolution.com" target="_blank"
                    rel="noopener noreferrer">Sysroot Solution</a>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<button class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style="display: none;" aria-label="Back to top"><i
        class="bi bi-arrow-up"></i></button>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- App logic (zero external JS dependencies) -->
<script src="assets/js/main.js?v=5.2" defer></script>
</body>

</html>