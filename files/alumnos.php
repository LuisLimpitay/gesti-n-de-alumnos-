<!DOCTYPE html>
<html lang = "es">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">
        <title>Alumnos</title>

        <base href="http://localhost/proyecto_2018_limpitay_luis/" />
        <link rel="stylesheet" type="text/css" href="lib//bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <script src="lib/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>


    </head>
    <body>
    <header>


                <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      
                    </button>
                      <a class="navbar-brand" href="files/index.php">Inicio</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="active"><a href="files/alumnos.php">Alumnos</a></li>

                        <li><a href="files/usuarios.php">Usuarios</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php">Cerrar Sesion</a></li>

                        </ul>
                      </li>

                    </ul>

                  </div>
                  
                  <!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                
                
              </nav>
        
        <button type="button" class="btn btn-outline btn-outline" onclick="history.go(-1); return false;"><span class="glyphicon glyphicon-chevron-left"></span> Volver </button>

    </header>
       

        <footer class="navbar navbar-inverse navbar-fixed-bottom"> 
        

            <div class="container">
            
            <address>
                
            <small><p>Gestion de Alumnos VERSION 1.0.0 </p>
                <p>Autor: Limpitay Luis Gabriel</p>
                <p>Correo : luchinaje@gmail.com </p> 
                <p>Laboratorio de Programacion UNPA - UACO 2018 </p></small>
            
            </address>
        
            </div>
        
        
        </footer>
                 
        </body>
        
</html>
