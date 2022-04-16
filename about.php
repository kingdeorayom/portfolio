<?php

$cssVersion = filemtime('./styles/custom/style.css');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about | serkingdeorayom</title>
    <?php include_once './assets/fonts/google-fonts.php' ?>

    <link rel="stylesheet" href="./styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo './styles/custom/style.css?id=' . $cssVersion ?>" type="text/css">

</head>

<body>

    <main class="container">

        <section class=" my-5">
            <img src="./assets/images/serkingdeorayom.jpg" alt="Serking de Orayom" class="img-fluid my-3 hero-image" width="100">
            <h1 class="my-2 hero-name"><a href="./index.php" class="content-title my-4 pb-2">serkingdeorayom</a></h1>
            <p class="my-3 hero-subtitle lead">software developer</p>
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