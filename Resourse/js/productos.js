$(document).ready(function () {
    
    $('#comida').click(function () {
        $("#agregarProducto").load('./views/comida.php');
    });

    $('#postre').click(function () {
        $("#agregarProducto").load('./views/postre.php');
    });
  
    var arr = new Array();
  
    $('#comida').click(function () {
        $("#agregarProducto").load('./views/comida.php');
    });

    $(document).on("click", '#btn_e', function() { 
     //obtenemos los valores de los inputs
     var materialId = $('#material').val(); 
     var tipoId = $('#tipo').val();
     var cantidad = $('#cantidad').val();
     var descripcionComida = $('#material option:selected').text();
     var descripcionTipo = $('#tipo option:selected').text();
  
       //unset($_SESSION['counter']);
             
              // Obtenemos el total de renglones (tr) del id "tabla"
              var trs=$("#tablaEntradas tr").length;
  
             // var buttonWarning = '<input class="btn btn-warning" type="button" value="Editar" id="editarMaterial"/>';
              var buttonDanger = '<input class="btn btn-warning btn-sm" type="button" value="Eliminar" id="deleteMaterial"/>';
  
              var nuevaFila= '<tr>'+'<td>'+trs+'</td>'+'<td hidden="">'+materialId+'</td>'
              +'<td hidden="">'+tipoId+'</td>'+'<td>'+descripcionComida+'</td>'
              +'<td>'+descripcionTipo+'</td>'+'<td>'+cantidad+'</td>'+'<td>'+buttonDanger+'</td>'+'</tr>';
              
              //agregamos a la tabla una nueva fila
              $("#tablaEntradas").append(nuevaFila);
            
             /* arr.push( 
                arr.materialId = materialId
                ,arr.tipoId = tipoId
                ,arr.cantidad = cantidad
                ,arr.descripcionComida = descripcionComida
                ,arr.descripcionTipo  = descripcionComida
                );*/    

                console.log(arr);
                
                var myJSON = {"materialId": materialId, "tipoId": tipoId
                ,"cantidad":cantidad,"descripcionComida":descripcionComida
                ,"descripcionTipo":descripcionTipo};
                
              var detPedido = {
                json: myJSON
              };
  
           $.ajax({
               type: 'POST',
               data: detPedido,
               url: './views/comida.php',
               beforeSend: function () {
                $("#Respuesta").html("Validando datos, espere por favor...");
                },
                success:  function (response) {
                $("#Respuesta").html(response);
                   }
           });
    
    });
    $(document).on("click", '#deleteTodo', function() {
              // Obtenemos el total de columnas (tr) del id "tabla"
              var trs = $("#tablaEntradas tbody tr").length;
  
              //si hay mas de un tr en la tabla se ejecuta lo que esta dentro del if
              if(trs >= 1)
              {
              swal({
              title: "¿Estas seguro que deceas borrar todos los registros?",
              text: "Una ves borrados, No podras recuperarlos",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
  
                //cilo para limpiar la tabla
                  for (var i = trs; i >= 1; i--) {
                  // Eliminamos la ultima columna
                  $("#tablaEntradas tr:last").remove();
                  //$("#tablaEntradas tr").remove();
                  }
              
                swal("Los registros han sido borrados", {
                  icon: "success",
                });
  
              } 
              
          });
  
          }
  
      });
    
    });