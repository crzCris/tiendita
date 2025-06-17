<?php
$conex=mysqli_connect("localhost","root","","miselaneasalvador");
//if(isset($_post['miselaneasalvador'])){
$idNumerodeprovedor=$_POST['numero'];
$provedor=$_POST['provedor'];
$Nombredelacompania=$_POST['compania'];
$mensaje=$_POST['mensaje'];
$consulta="INSERT INTO 'botanas'('idNumerodeprovedor','provedor','Nombredelacompania','mensaje')VALUES('$idNumerodeprovedor', '$provedor', '$Nombredelacompania', '$mensaje')";

     $resultado=mysqli_query($conex,$consulta);
     if($resultado){
      ?>
     <h3 class="ok"> Pedido exitoso  </h3>
     <?php
  }else{
        ?>
        <h3 class="bad"> error</h3>
        <?php
    }
    


//}
?>