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
    <title>about me</title>
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
                        <h5 class="introduction-content-text">i've spent the past 4 years working across different areas of web development: front-end, backend and UI/UX design</h5>
                        <h5 class="introduction-content-text d-sm-block d-md-none d-lg-block">you may view or download my CV by clicking <a href="./assets/files/resume.pdf" target="_blank" class="download-link">here</a></h5>
                    </div>
                </div>
            </div>
            <div class="row mx-auto d-none d-sm-none d-md-block d-lg-none">
                <h5 class="introduction-content-text">you may view or download my CV by clicking <a href="./assets/files/resume.pdf" target="_blank" class="download-link">here</a></h5>
            </div>
        </section>

        <section class="skills">
            <div class="row">
                <div class="col-sm-12">

                    <div class="skills-holder-text">

                        <h1 class="skills-header-text display-6">i'm not as skilled as you think i am, but</h1>
                        <h5 class="skills-content-text">i know <span class="introduction-name">how</span> and <span class="introduction-name">when</span> to use the following technologies below ... efficiently &#128521;</h5>
                        <div class="skills-holder-main">
                            <div class="row text-center">
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/html.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">HTML5</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/css.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">CSS3</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/js.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">JavaScript ES6</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/bootstrap.svg" width="100" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">Bootstrap 5</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/php.svg" width="125" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">PHP</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/mysql.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">MySQL</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/react.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">ReactJS</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="skills-image-holder">
                                        <img src="./assets/images/git.svg" width="75" alt="" class="img-fluid skills-image">
                                        <h5 class="skills-content-text">Git</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="skills-content-text">you may view the projects i have created using the technologies above by clicking <a href="./works.php" class="download-link">here</a></h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="philosophy">
            <div class="row">
                <div class="col-sm-12">

                    <div class="philosophy-holder-text">

                        <h1 class="philosophy-header-text display-6">a brief showcase of my personality</h1>

                        <figure class="philosophy-content">
                            <blockquote class="blockquote philosophy-header-text">
                                <h5>&ldquo;If you can't make it good, at least make it look good.&rdquo;</h5>
                            </blockquote>
                            <blockquote class="blockquote philosophy-content-text">
                                <h5>&#8211; Bill Gates on <em>Windows Vista</em>&#8482;</h5>
                            </blockquote>
                        </figure>

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
                                    <img src="./assets/images/sherlock.png" alt="" class="img-fluid hobbies-image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hobbies-holder-text">
                                    <h1 class="hobbies-header-text display-5">read books</h1>
                                    <h5 class="hobbies-content-text">i'm currently reading <a href="https://sherlock-holm.es/" target="_blank" class="hobbies-link"><em>Sherlock Holmes</em></a> novels and short stories</h5>
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
        </section> -->

        <section class="opportunities">
            <div class="row">
                <div class="col-sm-12">

                    <div class="opportunities-holder-text">

                        <h1 class="opportunities-header-text display-4">i occasionally take on freelance opportunities</h1>
                        <h1 class="opportunities-content-text h5">have an exciting project where you need some help? send me over a message and <a href="./contact.php" class="download-link">let's chat</a></h1>

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