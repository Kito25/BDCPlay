<?php include("configuracion.php");?>
<?php 
$Nombre= $_POST['Nombre'];
echo $Nombre;
echo "<br>";
$Apellido = $_POST['Apellido'];
echo $Apellido;
echo "<br>";
$Correo = $_POST['Correo'];
echo $Correo;
echo "<br>";
$Direccion = $_POST['Direccion'];
echo $Direccion;
echo "<br>";

    
if(empty($Nombre)){
    echo "<script>";
    echo "alert('el campo nombre no puede estar vacio');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
if(empty($Apellido)){
    echo "<script>";
    echo "alert('el campo Apellido');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
if(empty($Correo)){
    echo "<script>";
    echo "alert('el campo Correo');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
    if(empty($Direccion)){
        echo "<script>";
        echo "alert('el campo Direccion no puede estar vacio');";
        echo "window.history.go(-1)";
        echo "</script>";
        die();
    }
?>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
  