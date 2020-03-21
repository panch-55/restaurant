<?php

    class MesasController
    {
        private $model;

        public function __construct()
        {
            $this->model = new MesasModel;
        }

      
    
        public function get($mesa = '' ) {
            return $this->model->get($mesa);
        }

    }
