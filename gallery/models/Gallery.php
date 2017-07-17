
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.07.2017
 * Time: 14:10
 */
class Gallery
{
    public $name;
    public $size = 1000000000;
    public $format  = array('image/jpg', 'image/png', 'image/jpeg');
    public $comment;
    public $type;
    public $path = 'template/images/';

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->comment = $_POST['comment'];
        $this->size = $_FILES['picture']['size'];
    }


    public function checkTypePicture(){

        if (in_array($_FILES['picture']['type'], $this->format)){
            return true;
        }
        return false;
    }
    public function checkSizePicture(){

        if ($_FILES['film']['size'] <= $this->size){
            return true;
        }
        return false;
    }

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
    public function getTotalID(){

        $db = Db::getConnection();
        $TotalID = array();
        $result = $db->query('SELECT id FROM pictures ORDER BY id DESC LIMIT  1 ');
        $i = 0;
        while($row = $result->fetch( )) {
            $TotalID[$i]['id'] = $row['id'];
            $i++;
        }
        return $TotalID[0]['id'];
    }

    public function checkPathImages(){
        $tmp_name = 'pic'.$this->getTotalID().'.'.$this->type;
        if (@copy($_FILES['picture']['tmp_name'], $this->path . $_FILES['name'].$tmp_name)){
            return true;
        }
        return false;
    }

    public function addPictures(){

        $db = Db::getConnection();
            $result = $db->prepare('INSERT INTO pictures (name,format,size,comment) VALUE (?,?,?,?)');
        $result->bindParam(1,$this->name);
        $result->bindParam(2,$this->type);
        $result->bindParam(3,$this->size);
        $result->bindParam(4,$this->comment);
        $result->execute();
    }

    /**
     * @param mixed $format
     * @return Gallery
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

}