<?php

    class PedidosController
    {
        private $model;

        public function __construct()
        {
            $this->model = new PedidosModel;
        }

      
    
        public function set($pedido_data ) {
            return $this->model->set($pedido_data);
        }

    }
    
?>