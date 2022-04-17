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
    <title>serkingdeorayom</title>
    <?php include_once './assets/fonts/google-fonts.php' ?>

    <link rel="stylesheet" href="./styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo './styles/custom/main.css?id=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './styles/custom/index.css?id=' . $pagecssVersion ?>" type="text/css">

</head>

<body>

    <main class="container">

        <section class="hero">
            <a href="./assets/images/serkingdeorayom.jpg" target="_blank"><img src="./assets/images/serkingdeorayom.jpg" alt="Serking de Orayom" class="img-fluid my-3 hero-image" width="105"></a>
            <h1 class="my-2 hero-name"><a href="./index.php" class="content-title my-4 pb-2">serkingdeorayom</a></h1>
            <p class="my-3 hero-subtitle lead">software developer</p>
        </section>

        <section class="content">
            <h4><a href="./about.php" class="content-title my-4 pb-2">about me</a></h4>
            <h5 class="content-subtitle my-3 lead">skills, goals and recreation</h5>
            <h4><a href="./projects.php" class="content-title my-4 pb-2">projects</a></h4>
            <h5 class="content-subtitle my-3 lead">collection of my projects</h5>
            <h4><a href="./contact.php" class="content-title my-4 pb-2">contact</a></h4>
            <h5 class="content-subtitle my-3 lead">for project opportunities</h5>
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