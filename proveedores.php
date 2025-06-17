<?php
$conex=mysqli_connect("localhost","root","","miselaneasalvador");
//if(isset($_post['miselaneasalvador'])){
$provedor=$_POST['provedor'];
$Nombredelacompania=$_POST['compania'];
$msg=$_POST['usermessaje'];
$numeroProvedor=$_POST['numero'];
$consulta="INSERT INTO `pan`(`provedor`, `Nombredelacompania`, `msg`, `numero`) VALUES ('$provedor','$Nombredelacompania','$msg','$numeroProverdor')";
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