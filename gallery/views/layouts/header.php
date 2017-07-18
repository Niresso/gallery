<!doctype html>
<html lang="ru" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="#" />
    <meta name="description" content="#" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online gallery</title>
    <link rel="stylesheet" href="/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/template/style/main.css">
    <script type="text/javascript" src="/template/script/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/template/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/template/script/common.js"></script>

</head>
<body>
<div class="jumbotron" >
    <div class="container">
        <h1>Онлайн галерея:</h1>
    </div>
</div>

<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Меню</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#" id="btn-sort">Сортировка по дате</a></li>
                    <li><a href="#">Сортировка по размеру</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="btn-close">
                    <li><a href="#" id="btn-add-picture">Добавить изображение</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>