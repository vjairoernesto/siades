<?php require("conexiones/list_menu.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Siades</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/list_menu.js"></script>


    
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script type="text/javascript" src="alertify/alertify.min.js"></script>


    

    
      </head>
<body>
    <div id="wrapper">
                    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="">SIADES 1.0</a> 
                        </div>
              <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> 

            
                            <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown">
                                <i class="ti-timer"></i>
                                Hora Actual: <strong id="timeServer">--:--:--</strong>
                            </a>
                       
            <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
                    </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                
                <?php echo $menu_index; ?>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Bienvenido @Administrador , Love to see you back. </h5>
                    </div>
                </div> 

                <div class="row" id="contenido">
                    
                </div>             
                 <!-- /. ROW  -->
                  
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
     
   
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/typeahead.js"></script>


     <script type="text/javascript">
    var horaServidor = function () {
        // Do stuff
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("timeServer").innerHTML = xhttp.responseText;
            }
        }
        xhttp.open("GET", "conexiones/timetime.php", true);
        xhttp.send();
    };
    setInterval(horaServidor, 1000);
    </script>
    
   
</body>
</html>
<?php
if (empty($_GET['duplicado'])) {
        $duplicado="";
    }
    else
    {   
        $duplicado=$_GET['duplicado'];
        if($duplicado=="si"){

            ?> <script type="text/javascript">alertify.error('Error: el Nickname ingresado ya existe');</script> <?php

        }
    }


    if (empty($_GET['guardado'])) {
        $guardado="";
    }
    else
    {   
        $guardado=$_GET['guardado'];
        if($guardado=="si"){

            ?> <script type="text/javascript">alertify.success('El registro se ha ingresado exitosamente');</script> <?php

        }

        if($guardado == "no")
        {
            ?> <script type="text/javascript">alertify.error('Error: El Usuario no se pudo guardar');</script> <?php
        }
    }
?>