<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('BD', 'tfg'); 

    class DAO{
        private $conn;

        public function __construct(){
            $this->conn=new mysqli(HOST, USER, PASS,  BD);
        }

        public function read($SQL){
            $res=$this->conn->query($SQL);
            $filas=array();
            while($reg=$res->fetch_assoc()){
                $filas[]=$reg;
            }
            return $filas;
        }

        public function update($SQL){
            $res=$this->conn->query($SQL);
            return $this->conn->affected_rows;
        }

        public function create($SQL){
            $res=$this->conn->query($SQL);
            return $this->conn->insert_id;
        }

        public function delete($SQL){
            $res=$this->conn->query($SQL);
            return $this->conn->delete;
        }
    }

?>