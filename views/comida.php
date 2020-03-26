<?php

if (isset($_POST['json'])) {
  //$data = json_decode($_POST['json']);
  $data = $_POST['json'];
  //var_dump($data);
  echo $data;
}else {
  echo "no se a declarado el arreglo";
}

?>
<form >
<div class="form-row">
<div class="form-group col-md-6">
   <label for="material">Tipo</label>
  <select class="form-control" id="material" name="materiales" required>

        <option value="" id="">Selecciona el tipo</option>
        <option value="">Comida</option>
        <option value="">Bevida</option>
        <option value="">Postre</option>
    </select>
</div>
<div class="form-group col-md-6">
<label for="tipo">Tipo</label>
  <select class="form-control" id="tipo" name="tipos" required>

        <option value="" id="">Selecciona el tipo</option>
        <option value="">tacos</option>
        <option value="">refresco</option>
        <option value="">ice cream</option>
    </select>
</div>
<div class="form-group col-md-6">
<label for="tipo">Tipo</label>
  <select class="form-control" id="tipo" name="tipos" required>

        <option value="" id="">Selecciona el tipo</option>
        <option value="">coca cola</option>
        <option value="">bisteck</option>
        <option value="">camaron</option>
    </select>
</div>
</div>
<div class="form-group">
  <label for="cantidad">Cantidad</label>
  <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="" required>
</div>

<div class="row mt-5">
<input type="hidden" name="registro" value=1>

    <button class="btn btn-info" id="btn_e" name="entrada">Agregar</button>

</div>
</div>
</form>



<div class="row" >
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

</div>

