<script>

  </script>

<div class="row">
  <div id="comida" class="col-sm-4 ">
    <div class="card alert-warning">
      <div class="card-body">
        <h4 class="alert-heading">Comidas</h4>
        <p class="card-text">Haz click para desplegar el menu de la comida.</p>
      </div>
    </div>
  </div>
  <div id="vevida" class="col-sm-4">
    <div class="card alert-primary">
      <div class="card-body">
        <h4 class="alert-heading">Vevidas</h4>
        <p class="card-text">Haz click para desplegar el menu de las vevidas.</p>
      </div>
    </div>
  </div>
  <div id="postre" class="col-sm-4">
    <div class="card alert-success">
      <div class="card-body">
        <h4 class="alert-heading">Postres</h4>
        <p class="card-text">Haz click para desplegar el menu de los postres.</p>
      </div>
    </div>
  </div>
</div>
<div id="agregarProducto">
</div>


<?php

/*if (!isset($_POST['mesaId'])) {
  $mesaId = $_POST['mesaId'];
  $pedidosController = new PedidosController();
  $pedido_data = array(
    'estatuspedidoId' =>  1,
    'mesaId' =>  $mesaId,
    'userId' =>  1,
    'total' =>  0,
  );
  $newPedido = $pedidosController->set($pedido_data);
  
  foreach($newPedido as $index => $value){
    $lastId = $value['lastId'];
  }
  
}*/

?>