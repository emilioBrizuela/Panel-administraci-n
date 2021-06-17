<?php

    include_once "view/View.php";
    include_once "model/M_Match.php";
    include_once "Controller.php";

class C_Match extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new M_Match();
    }

    public function viewLastMatch()
    {
        return $this->model->getLastMatch();
    }

    public function viewMatches()
    {
        $listMatch = $this->model->getLastMatch();
        View::render('view/match/V_Match.php', $listMatch);
    }
    public function listMatch(){
        $matches = $this->model->getAllMatch();
        View::render('view/Match/V_Match_list.php',$matches);
    }
    public function newMatch($datos)
    {
        $id_match='';
        extract($datos);
        if ($id_match!='') {
            $match = $this->model->getMatch($datos);
            View::render('view/match/V_Match_new.php', $match);
        } else {
            View::render('view/match/V_Match_new.php',);
        }
    }

    public function saveMatch($datos)
    {
        $messageResp = array(
            'success'=>'Y',
            'message'=> ''
        );
        if ($datos['id_article']!='') {
            $cant= $this->model->updateMatch($datos);
            if ($cant>0) {
                $messageResp['message']=utf8_encode('Update success');
            } else {
                $messageResp['message']=utf8_encode('Could not update');
                $messageResp['success']='N';
            }
        } else {
            $id= $this->model->createMatch($datos);
            if ($id!='' && is_numeric($id)) {
                $messageResp['message']=utf8_encode('Successfully created');
            } else {
                // $messageResp['message']=$id;
                $messageResp['message']=utf8_encode('Could not be created, please try again');
                $messageResp['success']='N';
            }
        }
        echo json_encode($messageResp);
    }
    public function deleteMatch($datos)
    {
        $filas = $this->model->delteMatch(array('id_match'=>$datos['id_match']));
    }
}
