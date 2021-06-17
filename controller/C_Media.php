<?php 

require_once 'Controller.php';
require_once 'model/M_Media.php';
require_once 'view/View.php';

class C_Media extends Controller{

    private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new M_Media();
    }

    public function newImage(){
        View::render('view/Images/V_Image_New.php');
    }

    public function saveImage($datos){
        $path = 'img';
        $image='';

        $respuesta = array(
            'success'=>'Y',
            'message'=> ''
        );
        extract($datos);
        $path .= '/'.$image;
        move_uploaded_file($image,$path);
        $id_img = $this->model->saveMedia($datos);

        if($id_img!='' and is_numeric($id_img)){
            $respuesta['message']=utf8_encode('successfully created');
        }else{
            $respuesta['message']=utf8_encode('could not be created, please try again');
            $respuesta['success']='N';
        }
        echo json_encode($respuesta);
    }


    public function LoadImage(){}


}