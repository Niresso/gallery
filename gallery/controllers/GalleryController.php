<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.07.2017
 * Time: 13:25
 */
class GalleryController
{
    public function actionIndex(){

        $user = new Gallery;
        @$gallery = $user->getPictures();
        @$id = $user->getTotalID();

        @$user->type = array_pop(explode(".",@$_FILES['picture']['name']));

        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

            $errors =false;
            if (@$user->checkTypePicture()){
            }else{
                $errors[]= 'Не правильный тип фильма';
            }

            if (@$user->checkSizePicture()){
            }else{
                $errors[]= 'Обем файла не должен привышать 1 мб';
            }

            if ($errors == false){

                if($user->addPictures() == true)
                    header("Location: /");

            }else{
                $errors[]= 'Ваш фильм не добавлен';
            }
        }
        require_once(ROOT . '/views/index.php');
        return true;
    }
}