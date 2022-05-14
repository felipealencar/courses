<?php
class UserController extends BaseController{
    /* determinando a ação do endpoint /user/list */
    public function listAction(){
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        if($requestMethod == 'GET'){
            try{
                $userModel = new UserModel();
                $arrayUsers = $userModel->getUsers();

                $responseData = json_encode($arrayUsers);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
        
        $this->sendOutput($responseData, array('Content-Type: application/json'));
    }
}