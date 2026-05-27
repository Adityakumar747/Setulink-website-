<?php
$page_title       = 'Our Projects | Setulinks Security Solutions';
$page_description = 'View completed and ongoing CCTV and security projects by Setulinks including business surveillance, fire detection, and access control installations.';
$page_keywords    = 'CCTV projects, security installations, surveillance portfolio, access control projects, fire detection projects';
$page_og_image    = 'assets/img/Portfolio_image/portfolio-1.jpg';
require_once 'inc/header.php';
?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Projects</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>

<?php require_once 'inc/project-section.php'; ?>


<?php require_once 'inc/footer.php' ?>