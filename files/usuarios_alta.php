<!DOCTYPE html>

<html lang = "es">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">
        <title>Registracion</title>

        <base href="http://localhost/proyecto_2018_limpitay_luis/" />
        <link rel="stylesheet" type="text/css" href="lib//bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        
        <script src="lib/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!--se agrega este ultimo script para validar aca llamo al usuario.js-->
        <script type="text/javascript" src="js/usuarios.js"></script>

    </head>
    
    <body>
        <main>


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

                        <li><a href="files/alumnos.php">Alumnos</a></li>

                        <li class="active"><a href="files/usuarios.php">Usuarios</a></li>

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

        </main>
        
        <header><h1>Formulario para Registrarse</h1></header>
        
        <main>
            
            <div class="container-fluid">
         
                <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>

                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    
                <div id="divAlerta" class="alert alert-danger" style="display: none">
                    <strong>Mensaje</strong>
                    Mensaje de Prueba
                </div>
                
                <form id="form-usuario" action="files/usuarios_alta.php" method="post" onsubmit="return validacion();" class="form-horizontal  ">
                        
                        <!--SR ONLY OCULTA LOS LABEL EN CLASS SR ONLY EN LABEL
                            ACA EMPIEZA EL LABEL CON LA CAJA DE TEXTO-->
                        
                        <div class="form-group">
                            <label for="textApellido" > Apellidos:</label>
                            <input id="textApellido" name="textApellido" type="text" class="form-control" placeholder="Apellidos" />
                        </div>

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                            <label for="textNombre" > Nombres:</label>
                            <input id="textNombre" name="textNombre" type="text" class="form-control" placeholder="Nombres" />
                        </div>
                        
                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                            <label for="textUsuario"> Nombre de la Cuenta de Usuario:</label>
                            <input id="textUsuario" name="textUsuario" type="text"  class="form-control" placeholder="Cuenta de Usuario" />
                        </div>

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                              <label for="contraseña"> Contraseña:</label>
                              <input id="contraseña" name="contraseña" type="password" class="form-control" placeholder="debe contener entre 8 y 15 caracteres" />
                        </div> 

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                              <label for="contraseña2"> Confirmacion de la Contraseña:</label>
                              <input id="contraseña2" name="contraseña2" type="password" class="form-control" placeholder="debe contener entre 8 y 15 caracteres"/>
                        </div> 

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                              <label for="correo"> Correo electronico:</label>
                              <input id="correo" name="correo" type="email" class="form-control" placeholder="ejemplo@hotmail.com" />
                        </div> 

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                              <label for="correo2"> Confirmacion Correo electronico:</label>
                              <input id="correo2" name="correo2" type="email" class="form-control" placeholder="ejemplo@hotmail.com" />
                        </div>

                        <!--/////////////////////////////////////////// /////////////////////////////-->


                    
                    <p>Seleccione el Tipo de Perfil :</p>
                      <form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">Operador
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">Administrador
                        </label>
                        </br>
                        </br>
                        <button type="submit" class="btn btn-success "> Enviar </button>
                        </br>
                        </br>
                        <input type="reset" class="btn btn-warning" value="Resetear formulario"/>

                          </div >     
                          </div >       
            </form>
              
                    
                </div>
                    
            </div>
            
        </main>          
           
        <footer class="navbar navbar-inverse">

            <div class="container-fluid">
            
            <address>
                
            <p>Gestion de Alumnos VERSION 1.0.0 </p>
                <p>Autor: Limpitay Luis Gabriel</p>
                <p>Correo : luchinaje@gmail.com </p> 
                <p>Laboratorio de Programacion UNPA - UACO 2018 </p>
            
            </address>
        
            </div>
            
        </footer>
                  
    </body>

</html>
