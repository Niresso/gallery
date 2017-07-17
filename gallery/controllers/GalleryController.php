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

    require_once(ROOT . '/views/index.php');
    return true;
}
}