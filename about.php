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
                    <div class="introduction-image-holder">
                        <img src="./assets/images/kingdeorayom.jpg" alt="" class="img-fluid introduction-image">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="introduction-holder-text">
                        <h1 class="introduction-header-text display-3">hi, i'm <a href="./index.php" class="introduction-name pb-2">Serking</a>.</h1>
                        <h5 class="introduction-content-text">i've spent the past 4 years working across different areas of development: desktop application, web application, UI/UX design</h5>
                        <h5 class="introduction-content-text d-sm-block d-md-none d-lg-block">you may view or download my CV by clicking <a href="./assets/files/resume.pdf" target="_blank" class="download-link">here</a></h5>
                    </div>
                </div>
            </div>
            <div class="row mx-auto d-none d-sm-none d-md-block d-lg-none">
                <h5 class="introduction-content-text">you may view or download my CV by clicking <a href="./assets/files/resume.pdf" target="_blank" class="download-link">here</a></h5>
            </div>
        </section>

        <section class="philosophy">
            <div class="row">
                <div class="col-sm-12">
                    <div class="philosophy-holder-text">
                        <h1 class="philosophy-header-text display-6">this is who i am</h1>
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quos voluptatem, dicta repudiandae suscipit, maiores ipsum enim laudantium et earum molestias nam reiciendis illum. Aperiam tenetur suscipit quas assumenda temporibus.&ldquo;</p>
                                    <footer class="blockquote-footer">lorem ipsum in <cite title="Source Title">lorem ipsum</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hobbies">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hobbies-holder-text">
                        <h1 class="hobbies-header-text display-6">what i do during my free time</h1>
                        <h5 class="hobbies-content-text">i spend most of my free time doing either of the following:</h5>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-image-holder">
                                    <img src="./assets/images/programming.png" alt="" class="img-fluid hobbies-image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-holder-text">
                                    <h1 class="hobbies-header-text display-5">programming</h1>
                                    <h5 class="hobbies-content-text">when not working on a project, i try to learn new programming and development concepts. currently, i'm learning <a href="https://reactjs.org/" target="_blank" class="hobbies-link"><em>React JS</em></a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-image-holder">
                                    <img src="./assets/images/beatles.jpg" alt="The Beatles" class="img-fluid hobbies-image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-holder-text">
                                    <h1 class="hobbies-header-text display-5">listen to music</h1>
                                    <h5 class="hobbies-content-text">it's <a href="https://www.thebeatles.com/" target="_blank" class="hobbies-link"><em>The Beatles</em></a> for me. sometimes <a href="https://www.queenonline.com/" target="_blank" class="hobbies-link"><em>Queen</em></a>, sometimes <a href="https://www.ledzeppelin.com/" target="_blank" class="hobbies-link"><em>Led Zeppelin</em></a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-image-holder">
                                    <img src="./assets/images/books.jpg" alt="" class="img-fluid hobbies-image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-holder-text">
                                    <h1 class="hobbies-header-text display-5">read books</h1>
                                    <h5 class="hobbies-content-text">i'm currently reading <em class="hobbies-link">Ang Tundo Man May Langit Din by Andres Cristobal Cruz</em></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-image-holder">
                                    <img src="./assets/images/chess.jpg" alt="" class="img-fluid hobbies-image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-holder-text">
                                    <h1 class="hobbies-header-text display-5">chess</h1>
                                    <h5 class="hobbies-content-text">i've been playing chess since i was a kid. lately, i mostly play on <a href="https://www.chess.com" target="_blank" class="hobbies-link"><em>Chess.com</em></a> if my friends aren't around</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-image-holder">
                                    <img src="./assets/images/witcher.jpg" alt="" class="img-fluid hobbies-image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-holder-text">
                                    <h1 class="hobbies-header-text display-5">video games</h1>
                                    <h5 class="hobbies-content-text">i'm currently playing <a href="https://www.thewitcher.com/en/witcher3" target="_blank" class="hobbies-link"><em>The Witcher 3: Wild Hunt</em></a>, <a href="https://www.stardewvalley.net/" target="_blank" class="hobbies-link"><em>Stardew Valley</em></a> and <a href="https://www.rockstargames.com/gta-v" target="_blank" class="hobbies-link"><em>Grand Theft Auto V</em></a></h5>
                                </div>
                            </div>
                        </div>
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