
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.07.2017
 * Time: 14:10
 */
class Gallery
{

    /**
     * @return array
     */
    public function getPictures(){

        $db = Db::getConnection();
        $gallery = array();
        $sql = 'SELECT * FROM pictures ORDER BY id DESC';
        @$result = $db->query($sql);

        $i = 0;
        while($row = $result->fetch( )) {
            $gallery[$i] = $row;
            $i++;
        }
        return  $gallery;
    }

}