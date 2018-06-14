<!DOCTYPE html>
<html lang = "es">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">
        <title>Sistema</title>

        <base href="http://localhost/proyecto_2018_limpitay_luis/" />
        <link rel="stylesheet" type="text/css" href="lib//bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <script src="lib/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>


    </head>
    <body>
    
        

          <nav class="navbar navbar-inverse">

                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                      <a class="navbar-brand" href="files/index.php">Inicio</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class=""><a href="files/alumnos.php">Alumnos</a></li>

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

              <!--*****************************************************************************-->

            
<main>
              	

            <div class="container-fluid">


                <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>

                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    
                    <p><strong>Tipo de Perfil :</strong></p>
                      <form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">Operador
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">Administrador
                        </label>
                    </br>
                    </br>

                  <form id="" name="" action="" method="post" onsubmit="" class="form-horizontal">
                        
                         
                        <div class="form-group">
                            <label class="control-label" for=""> Apellidos:</label>
                        
                            <input type="text" id="" name="" value="" class="form-control"></input>
                        </div>

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                            <label class="control-label" for=""> Nombres:</label>
                        
                            <input type="text" id="" name="" value="" class="form-control"></input>
                        </div>
                         
                        
                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                            <label class="control-label" for=""> Nombre de la Cuenta de Usuario:</label>
                        
                            <input type="text" id="" name="" value="" class="form-control"></input>
                        </div>
                         
                        
                        <!--////////////////////////////////////////////////////////////////////////-->

                        <div class="form-group">
                              <label class="control-label" for=""> Contraseña:</label>
                        
                              <input type="password" id="" name="" value="" class="form-control"></input>
                        </div> 
                         

                         <!--////////////////////////////////////////////////////////////////////////-->

                        <div class="form-group">
                              <label class="control-label" for=""> Confirmacion de la Contraseña:</label>
                        
                              <input type="password" id="" name="" value="" class="form-control"></input>
                        </div> 
                         

                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                            <label class="control-label" for=""> Correo Electronico:</label>
                        
                            <input type="text" id="" name="" value="" class="form-control"></input>
                        </div>
                         
                        
                        <!--////////////////////////////////////////////////////////////////////////-->
                        
                        <div class="form-group">
                            <label class="control-label" for=""> Confirmacion de Correo Electronico:</label>
                        
                            <input type="text" id="" name="" value="" class="form-control"></input>
                        </div>
                         
                                                                  
                        
                        <!--/////////////////////////////////////////////////////////////////////////////
                        /////////////////////////////////////////////////////////////////////////////-->
                        
                        

                        <!--CONFIGURO BOTONES ABAJO DEL FOMRULAROS-->
                        
                       </br>
            			

            		<div class="btn-group btn-group-justified" role="group" aria-label="...">
					  <div class="btn-group" role="group">
					    <a href="files/usuarios_consulta.php" type="submit" class="btn btn-success">MODIFICAR</a>
					  </div>
					  <!--ACA DEBERIA ELIMINAR TODO EL REGISTRO DEL USUARIO-->
					  <div class="btn-group" role="group">
					    <button type="button" class="btn btn-danger">ELIMINAR</button>
					  </div>
					  <div class="btn-group" role="group">
					    <button type="button" class="btn btn-success">ACEPTAR</button>
					  </div>
					  <!--ACA CANCELA Y VUELVE A LA PAG ANTERIOR-->
					  <div class="btn-group" role="group">
					  	<a href="files/usuarios.php" type="submit" class="btn btn-danger">CANCELAR</a>
					  </div>
					</div>
					</br>
					</br>
				<!--<button type="submit" value="" class="btn btn-success">Enviar Datos</button>-->
                                        <input type="submit" value="Enviar Datos" class="btn btn-success"/>

                                        <input type="reset" value="Resetear formulario" class="btn btn-danger" />
                      
                        
                        </form>
                </div>
     

           

                <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>



            </div>
                        

         

   </main>
       

        <footer class="navbar navbar-inverse ">

            <div class="container-fluid">
            
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

