<?php

require_once 'Controller.php';
require_once 'model/M_Article.php';
require_once 'view/View.php';

class C_Article extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new M_Article();
    }

    public function viewLastArticle()
    {
        return $this->model->getLastArticles();
    }

    public function viewArticle()
    {
        View::render('view/Article/V_Article.php');
    }
    
    public function listArticles(){
        $articles = $this->model->getAllArticle();
        View::render('view/Article/V_Article_list.php',$articles);
    }
    
    public function newArticle($datos)
    {
        $id_article = '';
        extract($datos);
        if ($id_article !='') {
            $article = $this->model->getArticle($datos);
            View::render('view/Article/V_Article_new.php', $article);
        } else {
            View::render('view/Article/V_Article_new.php');
        }
    }
    
    public function saveArticle($datos)
    {
        $messageResp = array(
            'success'=>'Y',
            'message'=> ''
        );
        // echo json_encode($datos);
        if ($datos['id_article']!='') {
            $cant= $this->model->updateArticle($datos);
            if ($cant>0) {
                $messageResp['message']=utf8_encode('Update success');
            } else {
                $messageResp['message']=utf8_encode('Could not update');
                $messageResp['success']='N';
            }
        } else {
            $id= $this->model->createArticle($datos);
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
    
    public function deleteArticle($datos)
    {
        $filas = $this->model->deleteArticle(array('id_article'=>$datos['id_article']));
    }

    public function changeState($datos)
    {
        $this->model->updateState($datos);
    }
}
