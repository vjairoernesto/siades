<!DOCTYPE html>
<html>
<head>
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
	
	<legend align="center">Datos de Persona</legend>
	<form class="form-horizontal" action="controllers/m_persona/m_persona.php" id="regPersona"  method="POST">

			<input type="hidden" name="opc" id="opc" value="new">
				
	
			<label for=""  >Nombre: </label>
			<input class="form-control " type="text" name="nombre" id="nombre" placeholder="Esciba su nombre" onkeypress="return validar(event)">
          <br>

			
	   
			<label for="">Apellidos:</label>
			<input class="form-control" type="text" name="apellido" id="apellido" placeholder="Ejemplo: Lara Guardado " onkeypress="return validar(event)">
           
            <br>
            
			
            
            <label for="exampleInputName2" >Sexo: </label>
			<select id="sexo" name="sexo" class="form-control" onkeypress="return validar(event)">
				<option selected disabled>Seleccione sexo</option>
				<option value="F">F</option>
				<option value="M">M</option>
			</select>
			
        <br>
           
			<label for=""  >DUI: </label>
			<input class="form-control " type="text" name="dui" id="dui" placeholder="Ingrese su número de DUI" onkeypress="return validar(event)">
             <br>
			<label for=""  >Telefono: </label>
			<input class="form-control " type="text" name="telefono" id="telefono" placeholder="Ingrese su número de teléfono" onkeypress="return validar(event)">
            
              <br>
            <label for="exampleInputName2"  >Fecha de Nacimiento: </label>
			<input class="form-control" type="date" name="fechaNac" id="fechaNac" placeholder="dd/mm/aaaa">
         <br>
           
			<label for=""  >Dirección: </label>
			<textarea class="form-control " type="text" name="direccion" id="direccion" >
				
			</textarea>
			 <br>
           
			<?php
			
			include_once('../../conexiones/conexion.php');
			$sqlCiclo="select * from municipio";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
				<label for="">Municipio: </label>
			<select name="munic" id="ciclo" class="form-control">
					<option  value="null"  selected>Seleccione un municipio</option>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
          
      
             <br>
            <?php
			
			include_once('../../conexiones/conexion.php');
			$sqlCiclo="select * from profesion";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
				<label for="">Profesión: </label>
			<select name="profesion" id="ciclo" class="form-control">
					<option  value="null"  selected>Seleccione una profesión</option>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
          
        

			<br><br>
            <br><br>
            <br><br>
            <div class="form-group">
                            <div class="col-xs-12 col-sm-2 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Registrar  persona</button>
                         
                            </div>
                            </div>
	</form>
	</fieldset>
	</div>
	</div>

</div>
</body>
</html>