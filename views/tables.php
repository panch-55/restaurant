<?php

$mesas = new MesasController();

$mesasDatos = $mesas->get();

print_r($mesasDatos);

?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php
        foreach ($mesasDatos as $key) {
        ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <span class="grey">1</span>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $key['numeroMesa'];
                            ?></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>