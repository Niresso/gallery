<?php include ROOT.'/views/layouts/header.php'; ?>

    <div class="jumbotron" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <h1>Онлайн галерея:</h1>
        </div>
    </div>

    <div class="container">
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
                            <li class=" "><a href="#">Сортировка по дате</a></li>
                            <li class=" "><a href="#">Сортировка по размеру</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class=" "><a href="#" id="btn-add-picture">Добавить изображение</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <div id="add-pictures"></div>

        </div>

        <div class="container">
            <div id="gallery"></div>
            <pre><? print_r($gallery); ?>'</pre>'
        </div>

        <script>
            $(document).ready(function () {
                $('#btn-add-picture').click(function () {
                    $("#add-pictures").empty()
                        .append("<form  method='post' class='form-add-pictures' enctype='multipart/form-data'></form>");
                    $(".form-add-pictures").append("<div class='form-group' id='f1'></div>")
                        .append("<div class='form-group' id='f3'></div>")
                        .append("<div class='form-group' id='f2'></div>")
                        .append(" <input type='submit' class='btn btn-default' name='submit'>");
                    $("#f1").append("<label for='exampleInputEmail1'>Название картинки:</label>")
                        .append("<input type='text' class='form-control' id='exampleInputEmail1' name='name' placeholder='Enter name'>");
                    $("#f3").append(" <label for='exampleInputFile'>Файл:</label>")
                        .append("<input type='file' id='exampleInputFile' name='picture'>");
                    $("#f2").append("<label for='exampleInputPassword1'>Коментарий:</label>")
                        .append("<textarea name='comment' class='form-control' rows='3'  maxlength='200'></textarea>");
                })
            })
        </script>
        <script>
            $(document).ready(function () {

            })
        </script>
    </div>

<?php include ROOT.'/views/layouts/footer.php'; ?>