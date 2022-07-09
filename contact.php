<?php

$maincssVersion = filemtime('./assets/css/main.css');
$pagecssVersion = filemtime('./assets/css/contact.css');
$aboutPhotoVersion = filemtime('./assets/img/kingdeorayom.jpg');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Serking | Web Developer</title>

    <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo './assets/css/main.css?v=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './assets/css/contact.css?v=' . $pagecssVersion ?>" type="text/css">

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
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </section>

        <!-- <section class="opportunities animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-sm-12">
                    <div class="opportunities-holder-text">
                        <h1 class="opportunities-header-text display-3">Contact me</h1>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="introduction">
            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <div class="introduction-image-holder animate__animated animate__fadeInUp">
                        <img src="<?php echo './assets/img/kingdeorayom.jpg?v=' . $aboutPhotoVersion ?>" alt="" class="img-fluid introduction-image">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="introduction-holder-text animate__animated animate__fadeInUp">
                        <h1 class="introduction-header-text display-4">Contact me.</h1>

                        <div class="my-3">
                            <input type="text" class="form-control" id="textFieldName" name="textFieldName" placeholder="Full name">
                        </div>
                        <div class="my-3">
                            <input type="email" class="form-control" id="textFieldEmail" name="textFieldEmail" placeholder="Email address">
                        </div>
                        <div class="my-3">
                            <textarea class="form-control" id="textFieldMessageContent" name="textFieldMessageContent" rows="4" placeholder="Tell me about you, your business and requirements of a new project you want to start with me"></textarea>
                        </div>
                        <div class="text-end">
                            <button class="btn" id="button-send-message">Send message</button>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-basic animate__animated animate__fadeInUp animate__delay-1s">
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