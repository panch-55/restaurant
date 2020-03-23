<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comidas</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vevidas</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Postres</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>


<?php

if (isset($_POST['mesaId'])) {
  $mesaId = $_POST['mesaId'];
  $pedidosController = new PedidosController();
  $pedido_data = array(
    'estatuspedidoId' =>  1,
    'mesaId' =>  $mesaId,
    'userId' =>  1,
    'total' =>  0,
  );
  $newPedido = $pedidosController->set($pedido_data);

  print_r($newPedido);
}
?>