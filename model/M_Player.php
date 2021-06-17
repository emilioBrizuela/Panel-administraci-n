<?php

    require_once 'DAO.php';

    class M_Player
    {
        private $DAO;

        public function __construct()
        {
            $this->DAO = new DAO();
        }

        public function getPosition($filter=array())
        {
            $id_position='';
            extract($filter);

            $SQL = 'SELECT * FROM position_player';
            if ($id_position!='') {
                $SQL.=' WHERE id_position='.$id_position;
            }
            $positions = $this->DAO->read($SQL);
            return $positions;
        }

        public function getPlayers()
        {
            $SQL='SELECT * FROM players';
            return $this->DAO->read($SQL);
        }

        public function deletePlayer($filter = array())
        {
            $id_player='';
            extract($filter);
            $SQL = "DELETE FROM players WHERE id_player ='$id_player'";
            return $this->DAO->delete($SQL);
        }

        public function createPlayer($filter = array())
        {
            $name = '';
            $surname_1='';
            $surname_2='';
            $age='';
            $height='';
            $weight='';
            $position='';
            $id_img='';
            $img ='';
            extract($filter);
            if ($img!='') {
                $SQL = "INSERT INTO image SET
                url_img = '$img',
                desc_img = '',
                date_img = NOW()";
                $id_img = $this->DAO->create($SQL);
            }
            
            $SQL= "INSERT INTO players SET
            players.name = '$name',
            surname_1='$surname_1',
            surname_2='$surname_2',
            age='$age',
            height='$height',
            players.weight='$weight',
            position='$position'";
            if ($id_img != '') {
                $SQL.="id_img='$id_img'";
            }
            // return  1;
            // return $SQL;
            return $this->DAO->create($SQL);
        }

        public function createTeam($filter = array())
        {
            $name = '';
            extract($filter);
            $SQL= "INSERT INTO team SET
                name_team = '$name'";
            // return $SQL;
            return $this->DAO->create($SQL);
        }

        public function getTeam($filter = array()){
            $name = '';
            extract($filter);
            $SQL = "SELECT id_team FROM team WHERE name_team = '$name' ";
            return $this->DAO->read($SQL);
        }

        public function getListTeam(){
            $SQL = "SELECT * FROM team";
            return $this->DAO->read($SQL);
        }
    }
