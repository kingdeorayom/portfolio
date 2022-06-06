<?php

$maincssVersion = filemtime('./assets/css/main.css');
$pagecssVersion = filemtime('./assets/css/about.css');
$aboutPhotoVersion = filemtime('./assets/img/kingdeorayom.jpg');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serking | About | Web Developer</title>

    <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo './assets/css/main.css?v=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './assets/css/about.css?v=' . $pagecssVersion ?>" type="text/css">

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
                    <li class="breadcrumb-item active" aria-current="page">About me</li>
                </ol>
            </nav>
        </section>

        <section class="introduction">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="introduction-image-holder animate__animated animate__fadeInUp">
                        <img src="<?php echo './assets/img/kingdeorayom.jpg?v=' . $aboutPhotoVersion ?>" alt="" class="img-fluid introduction-image">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex align-items-center">
                    <div class="introduction-holder-text animate__animated animate__fadeInUp">
                        <h1 class="introduction-header-text display-4">Hi, I'm <a href="./index.php" class="introduction-name pb-2"><span class="serking">Serking</span></a>.</h1>
                        <h5 class="introduction-content-text">I spent the last 4 years working across different areas of web development: Front-end, Backend and UI/UX design.</h5>
                        <h5 class="introduction-content-text d-sm-block d-md-none d-lg-block">You may view or download my resume by clicking <a href="./assets/docs/resume.pdf" target="_blank" class="download-link">here</a>.</h5>
                    </div>
                </div>
            </div>
            <div class="row mx-auto d-none d-sm-none d-md-block d-lg-none">
                <h5 class="introduction-content-text">You may view or download my resume by clicking <a href="./assets/files/resume.pdf" target="_blank" class="download-link">here</a>.</h5>
            </div>
        </section>

        <section class="skills animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-sm-12">

                    <div class="skills-holder-text">

                        <h1 class="skills-header-text h2">I know when and how to efficiently use the following technologies:</h1>
                        <div class="skills-holder-main">
                            <div class="row text-center">
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/html.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">HTML5</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/css.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">CSS3</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/js.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">JavaScript</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/bootstrap.svg" width="100" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">Bootstrap 5</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/php.svg" width="125" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">PHP</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/mysql.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">MySQL</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/react.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">ReactJS</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/img/git.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">Git</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="opportunities animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-sm-12">

                    <div class="opportunities-holder-text">

                        <h1 class="opportunities-header-text display-2">I occasionally take on <span class="introduction-name">freelance</span> opportunities.</h1>
                        <h1 class="opportunities-content-text h4">Have an exciting project where you need some help? Send me over a message and <a href="./contact.php" class="download-link">let's chat</a>.</h1>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-basic">
            <div class="social">
                <a href="https://www.facebook.com/kingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/kingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/serkingdeorayom" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
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

    <script>
        $(document).ready(function() {

            $('.introduction-image-holder').on('mouseenter', function() {
                $(".introduction-image-holder").attr('class', 'introduction-image-holder animate__animated animate__tada');
            });

            $('.introduction-image-holder').on('mouseleave', function() {
                $(".introduction-image-holder").attr('class', 'introduction-image-holder');
            });

        });
    </script>

</body>

</html>