<?php

$maincssVersion = filemtime('./assets/css/main.css');
$pagecssVersion = filemtime('./assets/css/works.css');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works | Serking | Web Developer</title>

    <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo './assets/css/main.css?v=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './assets/css/works.css?v=' . $pagecssVersion ?>" type="text/css">

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
                    <li class="breadcrumb-item"><a href="./index.php" class="breadcrumb-title pb-2">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Works</li>
                </ol>
            </nav>
        </section>

        <section class="projects">

            <section class="saliksik">
                <div class="row">

                    <div class="col-sm-12 col-md-6 animate__animated animate__fadeInUp animate__faster">
                        <div class="projects-holder-text">
                            <h1 class="projects-header-text display-4">SALIKSIK: UPHSL Research Repository</h1>
                            <h5 class="projects-content-text">A web-based Institutional Repository for disseminating, archiving and preserving digital copies of academic papers of University of Perpetual Help System Laguna - Biñan Campus.</h5>
                            <div class="badges">
                                <span class="badge rounded-pill badge-html my-2">HTML</span>
                                <span class="badge rounded-pill badge-css my-2">CSS</span>
                                <span class="badge rounded-pill badge-js my-2">JavaScript</span>
                                <span class="badge rounded-pill badge-bootstrap my-2">Bootstrap</span>
                                <span class="badge rounded-pill badge-php my-2">PHP</span>
                                <span class="badge rounded-pill badge-mysql my-2">MySQL</span>
                            </div>
                            <h5 class="projects-content-text"><a href="https://saliksik-uphsl.com/" target="_blank" class="download-link">Visit website</a></h5>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 animate__animated animate__fadeInUp animate__delay-1s animate__faster">
                        <div class="projects-holder-text">
                            <h1 class="projects-header-text display-4">Account Manager (Web)</h1>
                            <h5 class="projects-content-text">A web-based application for storing and managing social accounts all in one place.</h5>
                            <div class="badges">
                                <span class="badge rounded-pill badge-html my-2">HTML</span>
                                <span class="badge rounded-pill badge-css my-2">CSS</span>
                                <span class="badge rounded-pill badge-js my-2">JavaScript</span>
                                <span class="badge rounded-pill badge-bootstrap my-2">Bootstrap</span>
                                <span class="badge rounded-pill badge-php my-2">PHP</span>
                                <span class="badge rounded-pill badge-mysql my-2">MySQL</span>
                            </div>
                            <h5 class="projects-content-text"><a href="https://account-manager.online" target="_blank" class="download-link">Visit website</a></h5>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 animate__animated animate__fadeInUp animate__delay-2s animate__faster">
                        <div class="projects-holder-text">
                            <h1 class="projects-header-text display-4">Account Manager (Desktop)</h1>
                            <h5 class="projects-content-text">A desktop-based application for storing and managing social accounts all in one place.</h5>
                            <div class="badges">
                                <span class="badge rounded-pill badge-c-sharp my-2">C#</span>
                                <span class="badge rounded-pill badge-dotnet my-2">.NET</span>
                                <span class="badge rounded-pill badge-sqlite my-2">SQLite</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 animate__animated animate__fadeInUp animate__delay-3s animate__faster">
                        <div class="projects-holder-text">
                            <h1 class="projects-header-text display-4">Barangay Malaban Resident Information Management System</h1>
                            <h5 class="projects-content-text">A desktop application for storing and managing resident information of Barangay Malaban in Biñan City, Laguna.</h5>
                            <!-- <h5 class="projects-content-text"><a href="https://saliksik-uphsl.com/" target="_blank" class="download-link">Visit website</a></h5> -->
                            <div class="badges">
                                <span class="badge rounded-pill badge-c-sharp my-2">C#</span>
                                <span class="badge rounded-pill badge-dotnet my-2">.NET</span>
                                <span class="badge rounded-pill badge-sqlite my-2">Microsoft SQL Server</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 animate__animated animate__fadeInUp animate__delay-4s animate__faster">
                        <div class="projects-holder-text">
                            <h1 class="projects-header-text display-4">Shutdown Timer</h1>
                            <h5 class="projects-content-text">A simple shutdown scheduler application for Windows.</h5>
                            <div class="badges">
                                <span class="badge rounded-pill badge-c-sharp my-2">C#</span>
                                <span class="badge rounded-pill badge-dotnet my-2">.NET</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </section>

        <footer class="footer-basic my-5 animate__animated animate__fadeInUp">
            <div class="social">
                <a href="https://www.facebook.com/kingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/kingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/kingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.github.com/kingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/serking-de-orayom-599927218/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            </div>
            <p class="copyright">Serking de Orayom © 2022</p>
        </footer>

    </main>

    <script src="./node_modules/fontawesome/fontawesome.js" crossorigin="anonymous"></script>
    <script src="./node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>