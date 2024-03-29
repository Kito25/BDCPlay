<?php include("configuracion.php");?>
<!DOCTYPE html>
<html lang="en">
    <?php include ("componentes/head.php"); ?>  
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">BDCPlay&nbsp;</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio&nbsp;</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Peliculas&nbsp;</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Accion</a></li>
                            
                                <li><a class="dropdown-item" href="#!">Terror</a></li>
                                <li><a class="dropdown-item" href="#!">Comedia</a></li>
                            </ul>
                        </li>
						
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Series&nbsp;</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Netflix</a></li>
                               
                                <li><a class="dropdown-item" href="#!">Amazon</a></li>
                                <li><a class="dropdown-item" href="#!">HBO</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <form class="d-flex">
                    
                        <button class="btn btn-outline-dark" type="submit"  >
                            <a class="dropdown-item" href="index.php">Cerrar sesion</a>
                            
                            
                            
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        
        <!-- Header-->
        <?php include ("componentes/header.php"); ?>
        <!-- Section-->
        <?php include ("componentes/section.php"); ?>
        <!-- Footer-->
       <?php include ("componentes/footer.php"); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
