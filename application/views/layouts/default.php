<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/main.css" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>
    <script src="/public/styles/bootstrap.min.css"></script>
</head>
<body>


<header>
    <div class="container my-5">
        <div class="row" >

                <nav class="navbar navbar-expand-lg  fixed-top"
                     id="mainNav">
                    <div class="container">
                        <a class="navbar-brand" href="/">Гостевая книга</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link"  href="/account/login">Вход</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/account/register">Регистрация</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
    </div>

</header>

<?php echo $content; ?>
<?php if ($this->route['action'] != 'login' or $this->route['action'] != 'register'): ?>

<hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://vk.com/id205545099" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/monstik" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>2019, учу =) PHP</small>
        </div>
    </div>
</footer>
</body>
</html>