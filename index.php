<?php

$maincssVersion = filemtime('./assets/css/main.css');
$pagecssVersion = filemtime('./assets/css/index.css');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serking de Orayom | Web Developer</title>

    <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo './assets/css/main.css?v=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './assets/css/index.css?v=' . $pagecssVersion ?>" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png?v=2">
    <link rel="manifest" href="./site.webmanifest?v=2">
    <link rel="mask-icon" href="./safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="./favicon.ico?v=2">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image" content="./assets/img/serking-cartoon.png" />
    <meta property="og:description" content="Hi, I'm Serking. I spent the last 4 years working across different areas of web development: Front-end, Backend and UI/UX design." />
    <meta property="og:url" content="http://www.kingdeorayom.tech" />
    <meta property="og:title" content="Serking de Orayom | Web Developer" />

</head>

<body>

    <main class="container">

        <section class="hero">
            <img src="./assets/img/serking-cartoon.png" id="hero-image" alt="Serking de Orayom" class="img-fluid my-3 hero-image animate__animated animate__jackInTheBox" width="105">
            <h1 class="my-2 hero-name animate__animated animate__fadeInUp"><a href="./index.php" class="content-title my-4 pb-2">Serking de Orayom</a></h1>
            <p class="my-3 hero-subtitle lead animate__animated animate__fadeInUp">Web Developer</p>
        </section>

        <section class="content">
            <h4><a href="./about.php" class="content-title my-4 pb-2 animate__animated animate__fadeInUp">About me</a></h4>
            <h5 class="content-subtitle my-3 lead animate__animated animate__fadeInUp">Background and skills</h5>
            <h4><a href="./works.php" class="content-title my-4 pb-2 animate__animated animate__fadeInUp">Works</a></h4>
            <h5 class="content-subtitle my-3 lead animate__animated animate__fadeInUp">Collection of my projects</h5>
            <h4><a href="./contact.php" class="content-title my-4 pb-2 animate__animated animate__fadeInUp">Contact</a></h4>
            <h5 class="content-subtitle my-3 lead animate__animated animate__fadeInUp">For project opportunities</h5>
        </section>

        <footer class="footer-basic animate__animated animate__fadeInUp">
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

            $('#hero-image').on('click', function() {
                $("#hero-image").attr('class', 'img-fluid my-3 hero-image animate__animated animate__hinge');
            });

        });
    </script>

</body>

</html>