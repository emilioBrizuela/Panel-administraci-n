<?php

    require_once 'Controller.php';
    require_once 'model/M_Player.php';
    require_once 'view/View.php';

    class C_Player extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = new M_Player();
        }

        public function viewPlayer()
        {
            View::render('view/Player/V_Player.php');
        }

        public function listPlayer()
        {
            $palyer = $this->model->getPlayers();
            View::render('view/Player/V_Player_list.php', $palyer);
        }
        public function listTeam()
        {
            return $this->model->getListTeam();
        }

        public function newPlayer()
        {
            $position = $this->model->getPosition();
            View::render('view/Player/V_Player_new.php', $position);
        }
        public function newTeam()
        {
            // $position = $this->model->getPosition();
            View::render('view/Player/V_Team_new.php');
        }
        
        public function savePlayer($datos)
        {
            $messageResp = array(
                'success'=>'Y',
                'message'=> ''
            );
            $id_player = $this->model->createPlayer($datos);
            if ($id_player!='' and is_numeric($id_player)) {
                $messageResp['message']=utf8_encode('Successfully created');
            } else {
                $messageResp['message']=utf8_encode('Could not be created, please try again');
                // $messageResp['message']=$id_player;
                $messageResp['success']='N';
            }
            echo json_encode($messageResp);
        }

        public function saveTeam($datos)
        {
            $messageResp = array(
                'success'=>'Y',
                'message'=> ''
            );
            $id_team = $this->model->getTeam($datos);
            if (count($id_team)!=0) {
                // $messageResp['message']=$id_team;
                $messageResp['message']=utf8_encode('Team already exists, please try again');
                $messageResp['success']='N';
            } else {
                $id_team = $this->model->createTeam($datos);
                if ($id_team!='' and is_numeric($id_team)) {
                    $messageResp['message']=utf8_encode('Successfully created');
                } else {
                    $messageResp['message']=utf8_encode('Could not be created, please try again');
                    $messageResp['success']='N';
                }
            }
            echo json_encode($messageResp);
        }

        public function getPosition($datos)
        {
            return $this->model->getPosition(array('id_position'=>$datos));
        }
        
        public function deletePlayer($datos)
        {
            return $this->model->deletePlayer($datos);
        }
    }
