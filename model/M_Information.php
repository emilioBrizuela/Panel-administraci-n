<?php

require_once 'DAO.php';

class M_Information
{
    private $DAO;

    public function __construct()
    {
        $this->DAO = new DAO;
    }

    public function getInformation(){
        $SQL = "SELECT * FROM information_club";
        $info = $this->DAO->read($SQL);
        return $info;
    }

    public function updateInformation($filter=array()){
        $id_info='';
        $name = '';
        $schedule = '';
        $direction = '';
        $phone='';
        $facebook='';
        $instagram='';
        $id_img='';
        extract($filter);
        $SQL= "UPDATE information_club SET";
        if ($name!='') {
            $SQL.=" name ='$name'";
        }
        if ($schedule!='') {
            $SQL.=", shoulder ='$schedule'";
        }
        if ($direction!='') {
            $SQL.=", direction = '$direction'";
        }
        if ($phone!='') {
            $SQL.=", phone = '$phone'";
        }
        if ($facebook!='') {
            $SQL.=", facebook = '$facebook'";
        }
        if ($instagram!='') {
            $SQL.=", instagram = '$instagram'";
        }
        if ($id_img!='') {
            $SQL.=", id_img ='$id_img'";
        }
        $SQL.=" WHERE id_info=$id_info";
        // return $SQL;
        return $this->DAO->update($SQL);
        
    }
}

?>