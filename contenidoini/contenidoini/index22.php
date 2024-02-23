<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Formulario de registro</title>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">
        <form id="form" class="form" method="POST" action="registrarusuario.php">
            <h2>Registrate en este formulario</h2>
            <br>
            
            <div class="form-control">
                <label for="Correo">Correo</label>
                <input type="text" name="Correo" id="Correo" placeholder="ejemplo@gmail.com">
            </div>
            <div class="form-control">
                <label for="Contrasenia">Contrasenia</label>
                <input type="password" name="Contrasenia" id="Contrasenia" placeholder="Ingresa una Contrasenia">
            </div>
            <button>Enviar</button>
        </form>
    </div>

</body>
</html>

