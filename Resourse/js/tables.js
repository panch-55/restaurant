$(document).ready(function() {

    loadtables();

    setInterval('cargarTiempo()', 1000);

    $(".mesa").click(function() {
        var mesaId = $(this).attr("id");
        mesaId = mesaId.substr(6);



        getExport();

        function getExport() {
            var body = document.body;
            form = document.createElement('form');
            form.method = 'POST';
            form.action = window.location.href = 'pedidos';
            form.name = 'jsform';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'mesaId';
            input.value = mesaId;
            form.appendChild(input);
            body.appendChild(form);
            form.submit();
        }
    });

});

function loadtables() {

    var status = $(".status");

    for (let index = 0; index < status.length; index++) {
        if (status[index].innerText == "Libre") {
            $(status[index]).css("color", "green");
            $(status[index]).parent().parent().css("background-color", "rgba(0, 255, 0, 0.5)");
        } else if (status[index].innerText == "Ocupado") {
            $(status[index]).css("color", "red");
            $(status[index]).parent().parent().css("background-color", "rgba(255, 0, 0, 0.5)");
            $(status[index]).parent().siblings("span.cirle-notification").css("display", "inline-block");
        } else {
            $(status[index]).parent().parent().css("background-color", "rgba(255, 255, 0, 0.5)");
            $(status[index]).parent().siblings("span.cirle-notification").css("display", "inline-block");
        }
    }
}

function cargarTiempo() {
    var data = new FormData();
    data.append("dato", "dato");

    $.ajax({
        url: "views/ajax/MesasAjax.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            var array = JSON.parse(respuesta);

            for (let index = 0; index < array.length; index++) {
                var mesaId = "mesaId" + array[index]["mesaId"];
                $("#" + mesaId + " span.cirle-notification").
                html(array[index]["fechaPedido"]["h"] + "hr" + " : " + array[index]["fechaPedido"]["i"] + "min");
            }
        }
    });
}