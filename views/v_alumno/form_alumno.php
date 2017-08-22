<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <link rel="stylesheet" href="../css/font-awesome.min.css">
<script type="text/javascript" src="../js/funciones.js"></script>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
//JQUERY AQUI
</script>


</head>
<body>

	<div class="container">
	<div class="row">
	<fieldset class="col-md-8">
	
	<legend align="center">Datos de Alumno</legend>
	<form class="form-horizontal" action="controllers/m_alumno/m_alumno.php" id="regAlumno"  method="POST">

			<input type="hidden" name="opc" id="opc" value="new">
		<div class="form-group">
	    <label for="foto" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Foto :</label>
	    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
	                               
	     </div>
	     </div>	
                       	
                        <?php
			
			include_once('../../conexiones/conexion.php');
			$sqlCiclo="select * from persona";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
		<div class="form-group">
				<label for="" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Persona : </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<select name="idpersona" id="persona" class="form-control">
					<option  value="null"  selected>Seleccione una persona</option>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
			</div>
          </div>
      
	<div class="form-group">
			<label for="NIE" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">NIE : </label>
			<div class="class=col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<input class="form-control" type="text" name="nie" id="nie" placeholder="0000000-000" >
         	</div>
			</div>

			<div class="form-group">
				<label for=""  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Estado : </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<select name="estado" id="estado" class="form-control">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<option  value="0" >Inactivo</option>
					<option value="1" selected="true">Activo</option>
					</div>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
			</div>
			</div>
          <?php
			
			include('../../conexiones/conexion.php');
			$sqlCiclo="select * from discapacidad";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
		<div class="form-group">
				<label for=""  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Discapacidad : </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<select name="iddiscapacidad" id="discapacidad" class="form-control">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<option  value=""  selected>Seleccione una opcion</option>
					</div>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
			</div>
			</div>
          
      <?php
			
			include_once('../../conexiones/conexion.php');
			$sqlCiclo="select * from religion";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
		<div class="form-group">
				<label for=""  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Religión : </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<select name="idreligion" id="religion" class="form-control">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<option  value="" >Seleccione una opcion</option>                               
				</div>
					
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
       </div>
       </div>
      
         <div class="form-group">
         <label for="medicado" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Medicado :</label>
          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <select name="medicado">
          <option value="si">Si</option>
          <option value="no">No</option>
                                              
           </select> 
          </div>
          </div>


            <div class="form-group">
                            <div class="col-xs-12 col-sm-2 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Registrar Alumno</button>
                         
                            </div>
                            </div>
	</form>
	</fieldset>
	</div>
	</div>

</div>
</body>
</html>