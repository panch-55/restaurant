
<div id="Respuesta" >
    <form>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="material">Tipo</label>
      <select class="form-control" id="material" name="materiales" required>

            <option value="" id="">Selecciona el tipo</option>
            <option value="1">Comida</option>
            <option value="2">Bevida</option>
            <option value="3">Postre</option>
        </select>
    </div>
    <div class="form-group col-md-6">
    <label for="tipo">Tipo</label>
      <select class="form-control" id="tipo" name="tipos" required>

            <option value="" id="">Selecciona el tipo</option>
            <option value="1">tacos</option>
            <option value="2">refresco</option>
            <option value="3">ice cream</option>
        </select>
    </div>
    <div class="form-group col-md-6">
    <label for="tipo">Tipo</label>
      <select class="form-control" id="tipo" name="tipos" required>

            <option value="" id="">Selecciona el tipo</option>
            <option value="1">coca cola</option>
            <option value="2">bisteck</option>
            <option value="3">camaron</option>
        </select>
    </div>
    </div>
    <div class="form-group">
      <label for="cantidad">Cantidad</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="" required>
    </div>

    <div class="row mt-5">

        <input type="hidden" name="registro" value=1>
        <input class="btn btn-info" id="btn_e" name="entrada" value="Agregar">

    </div>
    </div>
    </form>
    <?php

if (isset($_POST['json'])) {
  //$data = json_decode($_POST['json']);
  

  //$data = json_decode($_POST['json']);
  $data = $_POST['json'];
  //var_dump($data);
  
  session_start([
    'use_only_cookies' => 1,
    'read_and_close' => true
]);

  session_start();

  unset($_SESSION['pedido']);

  $_SESSION['pedido'] = $data;

  $pedido = $_SESSION['pedido'];

  var_dump($_SESSION['pedido']);
  
 /* echo $pedido[3];
  print_r($pedido);
for($i=0;$i<count($pedido);$i++)
{
    echo $pedido[$i];
}
foreach($pedido as $value){
  echo $value."<br>";
  }
*/

  }else {
    print('<div class="row" >
    <table id="tablaEntradas" class="table table-sm table-dark">
      <thead class="">
      <tr>
      <th>#</th>
      <th hidden="">idmaterial</th>
      <th>Material</th>
      <th>tipo</th>
      <th>Cantidad</th>
      <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
  </div>
  <div class="row">
      <div class="col">
      <button class="btn btn-outline-primary" id="guardar">Guardar</button>
      </div>
      <div class="col">
      <button class="btn btn-outline-danger float-right" id="deleteTodo">Eliminar Todo</button>
      </div>
    </div>
    </div>');
  }

  ?>

  </div>