<?php

$mesas = new MesasController();

$mesasDatos = $mesas->get();

?>

<!-- START MODULE TABLES -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php
        foreach ($mesasDatos as $key) {
        ?>
            <div class="col mb-4 mesa" id="<?php echo $key['mesaId']; ?>">
                <div class="card h-100">
                    <span class="cirle-notification">00:10</span>
                    <h4 class="card-title">
                        <?php
                        echo 'Mesa ' . $key['numeroMesa'];
                        ?>
                    </h4>
                    <div class="card-body">
                        <h5 class="status">
                            <?php
                            echo $key['statusMesa'];
                            ?>
                        </h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!-- END MODULE TABLES -->