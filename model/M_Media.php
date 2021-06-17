<?php

require_once 'DAO.php';

class M_Media{

    private $DAO;

    public function __construct(){
        $this->DAO = new DAO;
    }

    public function saveMedia($filtros=array()){
        $img = '';
        $description = '';
        extract($filtros);
        $SQL = "INSERT INTO image SET
        url_img = '$img',
        desc_img = '$description',
        date_img = NOW()";
        $image=$this->DAO->create($SQL);
        return $image;
    }

    public function getMedia(){}
    public function deleteMEdia(){}
}

?>