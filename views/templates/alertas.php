<?php
    //vamos a iterar sobre la clave - valor | hey -> error | alerta -> valor
    foreach($alertas as $key => $alerta):
        //vamos a saber el mensaje/ valor
        foreach($alerta as $mensaje):
?>
    <div class="alerta <?php echo $key; ?>">
        <?php echo $mensaje; ?>
    </div>
<?php
        endforeach;
    endforeach;
?>