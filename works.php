<?php

$maincssVersion = filemtime('./styles/custom/main.css');
$pagecssVersion = filemtime('./styles/custom/works.css');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about me</title>
    <?php include_once './assets/fonts/google-fonts.php' ?>

    <link rel="stylesheet" href="./styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo './styles/custom/main.css?id=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './styles/custom/works.css?id=' . $pagecssVersion ?>" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png?v=2">
    <link rel="manifest" href="./site.webmanifest?v=2">
    <link rel="mask-icon" href="./safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="./favicon.ico?v=2">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <main class="container">

        <section class="page-control">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php" class="breadcrumb-title pb-2">serkingdeorayom</a></li>
                    <li class="breadcrumb-item active" aria-current="page">works</li>
                </ol>
            </nav>
        </section>

        <section class="projects">
            <!-- <div class="row mx-auto">
                <h3 class="projects-content-text">below are the projects i have created</h3>
            </div> -->
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex align-items-center">

                    <div class="projects-holder-text">
                        <h1 class="projects-header-text display-4">SALIKSIK: UPHSL Research Repository</h1>
                        <h5 class="projects-content-text">A web-based Institutional Repository for disseminating, archiving and preserving digital copies of academic papers of University of Perpetual Help System Laguna - Biñan Campus</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="projects-image-holder">
                        <img src="./assets/images/kingdeorayom.jpg" alt="" class="img-fluid projects-image">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="./scripts/custom/font-awesome/dab8986b00.js" crossorigin="anonymous"></script>
    <script src="./scripts/custom/popper/popper.min.js"></script>
    <script src="./scripts/bootstrap/bootstrap.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>