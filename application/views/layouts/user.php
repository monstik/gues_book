<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?>></title>

    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/user.css" rel="stylesheet">
    <link href="/public/styles/main.css" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>
    <script src="/public/styles/bootstrap.min.css"></script>

</head>

<body>
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
                            <a class="nav-link"  href="/login">Профиль</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Выход</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
    <?php echo $content;?>

</body>
</html>