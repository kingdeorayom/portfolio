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

    <script src="https://www.google.com/recaptcha/api.js"></script>

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

        <section class="contact">
            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <div class="contact-image-holder animate__animated animate__fadeInUp">
                        <img src="<?php echo './assets/img/kingdeorayom.jpg?v=' . $aboutPhotoVersion ?>" alt="" class="img-fluid contact-image">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 my-5">
                    <div class="contact-holder-text animate__animated animate__fadeInUp">
                        <h1 class="contact-header-text display-4">Contact <span class="contact-name">me</span>.</h1>

                        <form onsubmit="submitContactForm(event)" name="contact-form">

                            <div class="my-3">
                                <input type="text" class="form-control" id="textFieldName" name="textFieldName" placeholder="Name" required>
                            </div>
                            <div class="my-3">
                                <input type="email" class="form-control" id="textFieldEmail" name="textFieldEmail" placeholder="Email" required>
                            </div>
                            <div class="my-3">
                                <textarea class="form-control" id="textFieldMessageContent" required name="textFieldMessageContent" rows="3" placeholder="Tell me about you, your business or the project you want to start with me"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="g-recaptcha" data-sitekey="6LcHs9ogAAAAAP75IoPzhI8ZdWSEJTp3LiiA_rci" data-callback='onSubmit' data-action='submit'>Submit</div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn" name="button-send-message" id="button-send-message">Send message</button>
                            </div>

                        </form>

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
    <script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <script>
        function submitContactForm(event) {
            event.preventDefault();
            var contactForm = document.forms.namedItem('contact-form');
            var contactData = new FormData(contactForm)
            postContactForm(contactData).then(data => checkContactFormResponse(JSON.parse(data)));
        }

        function postContactForm(data) {
            return new Promise((resolve, reject) => {
                var http = new XMLHttpRequest();
                http.open("POST", "./process/sendmail.php");
                http.onload = () => http.status == 200 ? resolve(http.response) : reject(Error(http.statusText));
                http.onerror = (e) => reject(Error(`Networking error: ${e}`));
                http.send(data)
            })
        }

        function checkContactFormResponse(data) {
            console.log(data)
            if (data.response === "success") {
                Swal.fire(
                    'Message successfully sent!',
                    'I\'ll get back to you as soon as I can.',
                    'success'
                )
            }
            if (data.response === "empty_fields") {
                Swal.fire(
                    'Your message was not sent.',
                    'Please fill up all the fields.',
                    'error'
                )
            }
            if (data.response === "invalid_email") {
                Swal.fire(
                    'Your message was not sent.',
                    'Please enter a valid email.',
                    'error'
                )
            }
        }
    </script>

    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>

</body>

</html>