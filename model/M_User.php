<?php

    require_once 'DAO.php';

    class M_User
    {
        private $DAO;

        public function __construct()
        {
            $this->DAO=new DAO();
        }

        public function loginUser($filter = array())
        {
            $email = '';
            $user = '';
            $pass = '';
            $type_user=3;
            extract($filter);

            $SQL = "SELECT id_information FROM user WHERE 1=1";
            if($password!=''){
               $SQL.=" and password = '$password'";
            }
            if($user!=''){
               $SQL.=" and email = '$user'";
            }
            if($user!=''){
               $SQL.=" and email = '$user'";
            }
            if($type_user!=''){
               $SQL.=" and type_user = '$type_user'";
            }
            return $this->DAO->read($SQL);
        }
        public function existUser($filter = array())
        {
            $email = '';
            $type_user=3;
            extract($filter);

            $SQL = "SELECT id_information FROM user WHERE 1=1";
            if($email!=''){
               $SQL.=" and email = '$email'";
            }
            if($type_user!=''){
               $SQL.=" and type_user = '$type_user'";
            }
            return $this->DAO->read($SQL);
        }

        public function getName($filter=array())
        {
            $id_information='';
            extract($filter);
            $SQL = "SELECT name,id_information FROM user_information WHERE
                id_information=$id_information";
            return $this->DAO->read($SQL);
        }

        public function createUser($filter=array()){
            $email='';
            $password='';
            $name='';
            $id_information='';
            $type_user = 3;

            extract($filter);

            $SQL="INSERT INTO user_information SET name='$name'";
            $id_information= $this->DAO->create($SQL);
            
            $SQL="INSERT INTO user SET
            email='$email',
            password='$password',
            type_user=$type_user,
            id_information=$id_information";

            return  $this->DAO->create($SQL);
        }
    }
