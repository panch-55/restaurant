<?php

class MesasController
{
    private $model;

    public function __construct()
    {
        $this->model = new MesasModel;
    }



    public function get($mesa = '')
    {
        return $this->model->get($mesa);
    }

    public function getHoraUso()
    {
        $respuesta = $this->model->getHoraUso();

        $enviarDatos = array();

        foreach ($respuesta as $item) {
            $now = new DateTime();
            $fechaPedido = new DateTime($item["fechaPedido"]);
            $intervalo = $fechaPedido->diff($now);
            $intervalo->format('%d días');

            array_push($enviarDatos, array(
                "fechaPedido" => $intervalo,
                "mesaId" => $item["mesaId"],
            ));
        }

        return json_encode($enviarDatos);

        //echo json_encode(MesasModel::getHoraUso());
    }
}
