<?php

    require_once 'model/M_User.php';
    require_once 'Controller.php';
    require_once 'view/View.php';

    class C_User extends Controller
    {
        private $modelo;

        public function __construct()
        {
            parent::__construct();
            $this->model= new M_User();
        }

        public function loginUser($data)
        {
            $infoUser = $this->model->loginUser($data);
            $name = $this->model->getName($infoUser[0]);
            View::render('index.php', $name[0]);
        }
        public function newUser()
        {
            View::render('view/User/V_User_new.php');
        }

        public function saveUser($data)
        {
            $messageResp = array(
                'success'=>'Y',
                'message'=> ''
            );
            $a = $this->model->existUser($data);
            if (count($a)!=0) {
                // $messageResp['message']=$id_team;
                $messageResp['message']=utf8_encode('User already exists, please try again');
                $messageResp['success']='N';
            } else {
                $id= $this->model->createUser($data);
                if ($id!='' && is_numeric($id)) {
                    $messageResp['message']=utf8_encode('Successfully created');
                } else {
                    $messageResp['message']=utf8_encode('Could not be created, please try again');
                    // $messageResp['message']=$id;
                    $messageResp['success']='N';
                }
            }
            echo json_encode($messageResp);
        }
    }
