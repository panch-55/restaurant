
    <?php

    $mesas = new MesasController();

    $mesasDatos = $mesas->get();

    printf($mesasDatos);

    ?>
    