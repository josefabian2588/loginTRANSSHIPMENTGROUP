<?php 

//=============================================================================
//
// Prototipo base del login extra Skydata
//  Fabian Araya 
// Creado 08-09-2015
// 
//=============================================================================

$estadoError = isset($_GET['loginError']) ? $_GET['loginError'] : null ;

	 $idcliente="150"


 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plataforma de rastreo GPS</title>

	  <link href="estilo.css" rel="stylesheet">
	   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"  rel="stylesheet">

</head>
<body>
	
<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row">                
            <div class="logo">
         		<img src="logo-min.png" alt="PTG Logo" class="img-responsive">
            </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center"><strong>Acceso Plataforma Web</strong></div>
            </div>     






            <div class="panel-body" >

                <form action="http://si.startrackllc.com//login.php"name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <input class="loginput" type="hidden" name="client" id="client" size="5" value=<?php echo $idcliente ?> >

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" size="20" name="username" required="" autofocus="" value="" placeholder="Usuario">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>         

                   	
					
		
				    <input type="hidden" name="rememberMe" value="1">  
			
			
		
	                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" name="Submit" value="login" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-triangle-right"></i> Ingresar</button>                          
                        </div>
                    </div>


			       	 <h3 class="bg-danger" id="error"><?php echo "$estadoError"; ?></h3>
			
                </form>     

            </div>                     
        </div>  





<div class="container-fluid">

		       <div class="row">
                <div class="col-sm-6">
                  <a href="https://itunes.apple.com/us/app/startrack-gps/id711676966?mt=8" >
                    
                      <img src="appleColor-min.png" alt="mac" class="img-responsive">

                   
                  </a>
                </div>
                  <div class="col-sm-6">
                  <a href="https://play.google.com/store/apps/details?id=info.stsa.aui.pan" >
                    
                      <img src="playColor-min.png" alt="android" class="img-responsive">

                 
                  </a>
                </div>
               
              </div>
</div>


    </div>
</div>

<div id="particles"></div>


<footer class="footer">
      <div class="footer-copyright">
        <span>
           SKYDATA Panamá :: Ave. Fernandez de Cordoba, Plaza Agora, Planta Baja Of. #26A :: Tel: +507 2781886  </span>
      </div>
    </footer>
    <!-- .footer -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="funcion.js"></script>   

</body>
</html>