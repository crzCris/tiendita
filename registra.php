<?php
$conn=mysqli_connect("localhost","root","","tienda");
if(!$conn)
{       
  die("No hay conexion:".mysqli_conect_error());
}
     
 //Inicio
if(isset($_POST["btnIngresar"]))
{
    $usuario=$_POST["usuario"];
     $pass=$_POST["pass"];

    $usuario=$_POST["usuario"];
    $_pass= $_POST["pass"];
    $consulta="SELECT * FROM `registros` WHERE Usuario = '$usuario' AND clave='$pass'";
    $query = mysqli_query($conn,$consulta);
    $nr= mysqli_num_rows($query);

    if($nr==1)
    {
        echo"<script> alert('Bienvenido $usuario'); window.location='tienda.html'</script>";
    }else
    {
      echo"<script> alert('usuario no existente'); window.location='iniciar.html'</script>";
    }
}

 //Registra
if(isset($_POST["btnRegistrar"]))
{
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usuario"];
    $_pass=$_POST["pass"];
    $sqlgrabar= "INSERT INTO `registros`(`Nombre`, `Usuario`, `clave`) VALUES ('$nombre','$usuario','$pass')";

    if(mysqli_query($conn,$sqlgrabar))
    {
        echo"<script> alert('Usuario registrado con exito: $nombre'); window.location ='principio.html' </script>";
    }else
    {
        echo"error:".$sqlgrabar."<br>".mysql_error($conn);
    }
}
?>
