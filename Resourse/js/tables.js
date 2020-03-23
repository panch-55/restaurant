$(document).ready(function() {

    loadtables();

    $(".mesa").click(function() {
        var mesaId = $(this).attr("id");
        alert(mesaId);
        getExport();

        /* param = {
            "medaId": mesaId
        };

        $.ajax({
            data: param,
            url: "pedidos",
            type: "post",
        });

        document.location.href = "pedidos"; */

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
        } else {
            $(status[index]).parent().parent().css("background-color", "rgba(255, 255, 0, 0.5)");
        }
    }
}