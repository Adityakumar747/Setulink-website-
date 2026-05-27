<?php
require_once 'data.php';
// Security Headers
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");

// SEO variables â€” individual pages can set these before including this file
$page_title = isset($page_title) ? $page_title : 'CCTV Installation & Security Solutions | Setulinks';
$page_description = isset($page_description) ? $page_description : 'Professional CCTV installation and security solutions for homes and businesses with advanced surveillance systems and 24/7 monitoring.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'CCTV installation, security systems, surveillance cameras, home security, business security India';
$page_og_image = isset($page_og_image) ? $page_og_image : 'assets/img/Crousel-image/carousel-1.jpg';
$page_robots = isset($page_robots) ? $page_robots : 'index, follow';

// Auto-generate canonical URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$page_canonical = isset($page_canonical) ? $page_canonical : $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($page_robots); ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>">

    <!-- Open Graph / Social SEO -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>">
    <meta property="og:site_name" content="Setulinks">
    <meta property="og:image" content="<?php echo htmlspecialchars($page_og_image); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($page_og_image); ?>">

    <!-- DNS Prefetch & Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- Preload Hero Images -->
    <link rel="preload" as="image" href="assets/img/Crousel-image/carousel-1-mobile.webp" media="(max-width: 768px)"
        fetchpriority="high" type="image/webp">
    <link rel="preload" as="image" href="assets/img/Crousel-image/carousel-1.webp" media="(min-width: 769px)" fetchpriority="high"
        type="image/webp">

    <link href="assets/img/other-images/favicon.ico" rel="icon">

    <!-- Critical CSS: minimal inline for first paint -->
    <style>
        /* Mobile: disable animations before stylesheet loads */
        @media (max-width: 991px) {
            .animated, .wow { animation: none !important; transition: none !important; transform: none !important; visibility: visible !important; }
        }
        /* Box-sizing + body baseline */
        *, *::before, *::after { box-sizing: border-box }
        html { font-size: 16px; -webkit-text-size-adjust: 100% }
        body { margin: 0; font-family: 'Open Sans', Arial, sans-serif; font-size: 1rem; line-height: 1.5; color: #212529; background: #fff }
        img { max-width: 100%; height: auto; vertical-align: middle }
        /* Spinner overlay (visible before main.css loads) */
        #spinner { opacity: 0; visibility: hidden; transition: opacity .5s ease-out, visibility 0s linear .5s; z-index: 99999 }
        #spinner.show { transition: opacity .5s ease-out, visibility 0s linear 0s; visibility: visible; opacity: 1 }
    </style>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- All site styles: single file -->
    <link rel="stylesheet" href="assets/css/main.css">


    <!-- JSON-LD Local Business Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Setulinks",
            "description": "Professional CCTV installation and security solutions for homes and businesses in Ranchi, Jharkhand.",
            "url": "<?php echo $protocol . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>",
            "telephone": "+91 91234 56789",
            "email": "info@setulinks.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Ranchi",
                "addressLocality": "Ranchi",
                "addressRegion": "Jharkhand",
                "postalCode": "834001",
                "addressCountry": "IN"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "21:00"
            },
            "sameAs": [
                "https://facebook.com",
                "https://twitter.com",
                "https://linkedin.com",
                "https://instagram.com"
            ]
        }
    </script>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Topbar -->
    <div class="container-fluid bg-primary px-5">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <small><?php echo $company_address; ?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-2">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small><?php echo $company_email; ?></small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small><?php echo $company_phone; ?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-2">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small>Mon - Fri : 9AM - 9PM</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5" aria-label="Main navigation">
        <a href="index.php" class="navbar-brand d-flex align-items-center" aria-label="Setulinks - Home">
            <h2 class="m-0 text-primary"><?php echo $company_name; ?></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);
                function isActive($page_name, $current_page) {
                    return ($page_name === $current_page) ? 'active' : '';
                }
                ?>
                <a href="index.php" class="nav-item nav-link <?= isActive('index.php', $current_page) ?> px-2 px-sm-3 px-lg-0">Home</a>
                <a href="about.php" class="nav-item nav-link <?= isActive('about.php', $current_page) ?>">About</a>
                <a href="services.php" class="nav-item nav-link <?= isActive('services.php', $current_page) ?>">Service</a>
                <a href="project.php" class="nav-item nav-link <?= isActive('project.php', $current_page) ?>">Project</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?= ($current_page == 'quote.php' || $current_page == 'team.php') ? 'active' : '' ?>" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="quote.php" class="dropdown-item py-2 <?= isActive('quote.php', $current_page) ?>">Free Quote</a>
                        <a href="team.php" class="dropdown-item py-2 <?= isActive('team.php', $current_page) ?>">Our Team</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link <?= isActive('contact.php', $current_page) ?>">Contact</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="<?php echo $social_links['facebook']; ?>"
                    target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="<?php echo $social_links['twitter']; ?>"
                    target="_blank" rel="noopener noreferrer" aria-label="Follow us on Twitter"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="<?php echo $social_links['linkedin']; ?>"
                    target="_blank" rel="noopener noreferrer" aria-label="Follow us on LinkedIn"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="<?php echo $social_links['instagram']; ?>"
                    target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main id="main-content">