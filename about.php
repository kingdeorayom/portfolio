<?php

$maincssVersion = filemtime('./styles/custom/main.css');
$pagecssVersion = filemtime('./styles/custom/about.css');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about me | serkingdeorayom</title>
    <?php include_once './assets/fonts/google-fonts.php' ?>

    <link rel="stylesheet" href="./styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo './styles/custom/main.css?id=' . $maincssVersion ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo './styles/custom/about.css?id=' . $pagecssVersion ?>" type="text/css">

</head>

<body>

    <main class="container">

        <section class="page-control my-5 mx-2">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php" class="content-title pb-2">serkingdeorayom</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about me</li>
                </ol>
            </nav>

        </section>

        <section class="serkingdeorayom my-5">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="about-image-holder">
                        <img src="./assets/images/kingdeorayom.jpg" alt="" class="img-fluid about-image">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="content-holder">
                        <h1 class="about-header-text display-3">hi, i'm <a href="./index.php" class="content-title pb-2">Serking</a></h1>
                        <h5 class="about-content-text">I've spent the past 5 years working across different areas of development: desktop application, web application, UI/UX design</h5>
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