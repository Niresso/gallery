<?php include ROOT.'/views/layouts/header.php'; ?>

    <div class="jumbotron" xmlns="http://www.w3.org/1999/html">
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

        <div class="container">
            <div id="add-pictures"></div>
        </div>

        <div class="container">
            <div id="gallery" >
                <? foreach ($gallery as $items):?>
                    <div class="col-lg-6" id="helped">
                        <div ><?= $items['name'] ;?></div>
                        <p><img src="/template/images/pic<?php echo $items['id'] ;?>.<?php echo $items['format'] ;?>" width="85%" height="55%" alt="" /></p>
                        <div ><p><?= $items['comment'] ;?> </p></div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>

<?php include ROOT.'/views/layouts/footer.php'; ?>