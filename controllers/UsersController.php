<?php

    class UsersController
    {
        private $model;

        public function __construct()
        {
            $this->model = new UserModel;
        }

        public function set(array $user_data) {
            return $this->model->set($user_data);
        }
    
        public function get( $user = '' ) {
            return $this->model->get($user);
        }
    
        public function del( $user = '' ) {
            return $this->model->del($user);
        }
    }
    
?>