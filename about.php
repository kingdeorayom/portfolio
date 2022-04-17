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

        <section class="page-control">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php" class="breadcrumb-title pb-2">serkingdeorayom</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about me</li>
                </ol>
            </nav>
        </section>

        <section class="introduction">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="about-image-holder">
                        <img src="./assets/images/kingdeorayom.jpg" alt="" class="img-fluid about-image">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="content-holder-text">
                        <h1 class="about-header-text display-3">hi, i'm <a href="./index.php" class="about-name pb-2">Serking</a>.</h1>
                        <h5 class="about-content-text">i've spent the past 4 years working across different areas of development: desktop application, web application, UI/UX design.</h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="history">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-holder-text">
                        <h1 class="about-header-text display-6">a brief history of king</h1>
                        <h5 class="about-content-text">i was first enthralled by programming back in senior high school when i successfully made a text scroll left to right automatically using <code>&lt;marquee&gt;</code> (i know, i know, HTML is not programming)&#8212;but that paved the way for me to explore a vast new world&#8212;and boy, little did i know that i'll be staying in that world for the years to come.</h5>
                        <h5 class="about-content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nihil veniam quo illo nulla adipisci magni debitis sed nesciunt, non, nisi animi doloribus ex nam? Quis deleniti mollitia consectetur fugiat.</h5>
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