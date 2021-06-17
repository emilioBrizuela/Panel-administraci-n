<?php 

require_once 'Controller.php';
require_once 'model/M_Information.php';
require_once 'view/View.php';

class C_Information extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new M_Information();
    }

    public function viewInformation(){
        $info = $this->model->getInformation();
        View::render('view/Information/V_Information.php',$info);
    }

    public function saveInformation($datos)
    {
        $messageResp = array(
            'success'=>'Y',
            'message'=> ''
        );
        $cant= $this->model->updateInformation($datos);
        if ($cant>0) {
            $messageResp['message']=utf8_encode('Update success');
        } else {
            $messageResp['message']=utf8_encode('Could not update');
            // $messageResp['message']=$cant;
            $messageResp['success']='N';
        }
        echo json_encode($messageResp);
    }
}


?>