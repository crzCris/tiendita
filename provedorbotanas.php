<?php
 $conex=mysqli_connect("localhost","root","","tienda salvador");
 if(isset($_POST['registrar'])){

    $idNumerodelProvedor= $_POST['idNumerodelProvedor'];
    $NombredelProvedor= $_POST['provedor'];
    $NombredelaCompania= $_POST['compania'];
    $Mensaje= $_POST['user_messaje'];
    $consulta="INSERT INTO 'provedordebotanas'('idNumerodelProvedor','NombredelProvedor','NombredelaCompania','Mensaje')VALUES ('$idNumerodelProvedor','$NombredelProvedor','$NombredelaCompania','$Mensaje')";
    $resultado= mysqli_query($conex,$consulta);
    if($resultado){
        ?>
        <h3 class="ok"> Se ha registrado tu pedido correctamente</h3>
        <?php
    }else{
        ?>
        <h3 class="bad"> No se puede realizar el pedido </h3>
    <?php
    }
 }
 ?>