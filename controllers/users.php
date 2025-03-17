<?php
    require_once('./models/users.php');

    class UsersController{
        private $model;

        function __construct(){
            $this->model = new UserModel();
        }

        public function getUserById($id){
            $resultData = $this->model->getUserById($id);
        }
?>