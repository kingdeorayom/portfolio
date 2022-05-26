<?php

$maincssVersion = filemtime('./styles/custom/main.css');
$pagecssVersion = filemtime('./styles/custom/index.css');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serkingdeorayom | web developer</title>
    <?php include_once './assets/fonts/google-fonts.php' ?>

    <link rel="stylesheet" href="./styles/animate/animate.min.css">
    
    <link rel="stylesheet" href="./styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo './styles/custom/main.css?id=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './styles/custom/index.css?id=' . $pagecssVersion ?>" type="text/css">

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

        <section class="hero">
            <a href="./assets/images/serkingdeorayom.jpg" target="_blank"><img src="./assets/images/serking-cartoon.png" alt="Serking de Orayom" class="img-fluid my-3 hero-image animate__animated animate__jackInTheBox" width="105"></a>
            <h1 class="my-2 hero-name animate__animated animate__fadeInUp"><a href="./index.php" class="content-title my-4 pb-2">serkingdeorayom</a></h1>
            <p class="my-3 hero-subtitle lead animate__animated animate__fadeInUp">web developer</p>
        </section>

        <section class="content">
            <h4><a href="./about.php" class="content-title my-4 pb-2 animate__animated animate__fadeInUp">about me</a></h4>
            <h5 class="content-subtitle my-3 lead animate__animated animate__fadeInUp">background and skills</h5>
            <h4><a href="./works.php" class="content-title my-4 pb-2 animate__animated animate__fadeInUp">works</a></h4>
            <h5 class="content-subtitle my-3 lead animate__animated animate__fadeInUp">collection of my projects</h5>
            <h4><a href="./contact.php" class="content-title my-4 pb-2 animate__animated animate__fadeInUp">contact</a></h4>
            <h5 class="content-subtitle my-3 lead animate__animated animate__fadeInUp">for project opportunities</h5>
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