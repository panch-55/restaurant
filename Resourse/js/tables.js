$(document).ready(function() {
    loadtables();

    $(".mesa").click(function() {
        var mesaId = $(this).attr("id");
        alert(id);

        $.ajax({
            type: "POST",
            url: "pedidos.php",
            data: mesaId,
            dataType: "String"
        });

        window.location.href = "pedidos";



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