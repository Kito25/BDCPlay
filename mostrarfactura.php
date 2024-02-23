<?php include("configuracion.php");?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ("componentes/head.php"); ?>  
    <body>
        <!-- Navigation-->
        <?php include ("componentes/navegacion.php"); ?>
        <!-- Header-->
        
        <!-- Section-->
        <?php
$filepath='infocompra.ini';
    //parse the ini file using default parse_ini_file() PHP function
    $parsed_ini = parse_ini_file($filepath, true);
    //read the array and print
    foreach($parsed_ini as $section=>$values){
        echo "<h3>$section</h3>";
        foreach($values as $key=>$value){
            echo $key."=".$value."<br>";
        }
        echo "<br>";
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>


        <!-- Footer-->
       <?php include ("componentes/footer.php"); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
