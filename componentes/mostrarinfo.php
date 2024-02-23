
<section class="py-5">
<?php


// Variables de configuracion necesarias.
$config_file = "infocompra.ini";
$alquiler = $_GET['alquiler'];
$compra = $_GET['compra'];


// Carga
$config_data = config_read("infocompra.ini");
// Setea los multiples valores
config_set($config_data, "Detalles del alquiler $alquiler", "alquiler", $alquiler);
config_set($config_data, "Detalles de la compra $compra", "compra", $compra);

config_write($config_data, $config_file);

?>
<form class="d-flex">
                    
                    <button class="btn btn-outline-dark" type="submit"  >
                        <a class="dropdown-item" href="mostrarfactura.php">Mostrar facturacion</a>
                        
                        
                        
                    </button>
                </form>


        </section>
        <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>