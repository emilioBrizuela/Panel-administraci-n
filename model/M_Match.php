<?php

    include_once "DAO.php";

    class M_Match
    {
        private $DAO;

        public function __construct()
        {
            $this->DAO = new DAO();
        }

        public function getAllMatch()
        {
            $SQL='SELECT * FROM matches ORDER BY date DESC';
            return $this->DAO->read($SQL);
        }
        public function getMatch($filter = array())
        {
            $id_match='';
            extract($filter);
            $SQL='SELECT * FROM matches WHERE id_match='.$id_match;
            return $this->DAO->read($SQL);
        }
        public function createMatch($filter=array())
        {
            $title='';
            $urlVideo='';
            $nameLocal='';
            $nameVisit='';
            $pointLocal='';
            $pointVisit='';
            $resumeMatch='';
            $date='';
            $img='';
            $id_img='';
            extract($filter);
            if ($img!='') {
                $SQL = "INSERT INTO image SET
                url_img = '$img',
                desc_img = '',
                date_img = NOW()";
                $id_img = $this->DAO->create($SQL);
            }
            $SQL="INSERT INTO matches SET
            title = '$title',
            urlVideo='$urlVideo',
            nameLocal='$nameLocal',
            nameVisit='$nameVisit',
            pointLocal='$pointLocal',
            pointVisit='$pointVisit',
            resumeMatch='$resumeMatch',
            date='$date'";
            if ($id_img != '') {
                $SQL.=",id_img=$id_img";
            }
            // return $SQL;
            return $this->DAO->create($SQL);
        }
        
        public function delteMatch($filter=array())
        {
            $id_match='';
            extract($filter);
            $SQL='DELETE FROM matches WHERE id_match='.$id_match;
            $this->DAO->delete($SQL);
        }

        public function updateMatch($filter=array())
        {
            $id_match='';
            $title='';
            $urlVideo='';
            $nameLocal='';
            $nameVisit='';
            $pointLocal='';
            $pointVisit='';
            $resumeMatch='';
            $date='';
            $id_img='';

            extract($filter);

            $SQL= "UPDATE matches SET";
            if ($title!='') {
                $SQL.=" title ='$title'";
            }
            if ($urlVideo!='') {
                $SQL.=", urlVideo = '$urlVideo'";
            }
            if ($nameLocal!='') {
                $SQL.=", nameLocal = '$nameLocal'";
            }
            if ($nameVisit!='') {
                $SQL.=", nameVisit = '$nameVisit'";
            }
            if ($pointLocal!='') {
                $SQL.=", pointLocal = '$pointLocal'";
            }
            if ($pointVisit!='') {
                $SQL.=", pointVisit = '$pointVisit'";
            }
            if ($resumeMatch!='') {
                $SQL.=", pointVisit = '$resumeMatch'";
            }
            if ($date!='') {
                $SQL.=", date = '$date'";
            }
            if ($id_img!='') {
                $SQL.=", id_img ='$id_img'";
            }
            $SQL.=" WHERE id_match=$id_match";

            return $this->DAO->update($SQL);
        }

        /**
         * Get the last 3 games.
         */
        public function getLastMatch()
        {
            $SQL = "SELECT DATE,nameLocal,nameVisit,pointLocal,pointVisit FROM matches ORDER BY date DESC LIMIT 3";
            return $this->DAO->read($SQL);
        }
    }
