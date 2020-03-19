<?php

        class SessionController
    {
        private $session;

        public function __construct()
        {
            # code...
            $this->session = new UserModel;

        }
        public function login($user, $pass)
        {
          return $this->session->validaUsuario($user,$pass);
        }

        public function logOut()
        {   
            session_start();
            session_destroy();
            header('Location: ./');
        }
    }
    

?>