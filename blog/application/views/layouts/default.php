<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="/blog/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/blog/public/styles/main.css" rel="stylesheet">
        <link href="/blog/public/styles/font-awesome.css" rel="stylesheet">
        <script src="/blog/public/scripts/jquery.js"></script>
        <script src="/blog/public/scripts/form.js"></script>
        <script src="/blog/public/scripts/popper.js"></script>
        <script src="/blog/public/scripts/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/blog">БЛОГ</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/about">Обо мне</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/contact">Обратная связь</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php echo $content; ?>
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <p class="copyright text-muted">&copy;  PHP Блог</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>