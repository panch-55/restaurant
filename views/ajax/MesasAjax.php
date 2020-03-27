<?php
/* require_once "../../controllers/MesasController.php";
require_once "../../models/MesasModel.php"; */

require_once "/wamp64/www/restaurant/controllers/autoload.php";

$autoload = new autoload();

class MesasAjax
{
    public function getHoraUso()
    {
        $controller = new MesasController();
        $respuesta = $controller->getHoraUso();

        echo json_encode($respuesta);
    }
}

if (isset($_POST["dato"])) {
    $MesasAjaxA = new MesasAjax;
    $MesasAjaxA->getHoraUso();
}
