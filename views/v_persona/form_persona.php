
	<script src="assets/js/funciones.js"></script>
	<div class="col-md-12">
	<div class="card">
	<div class="content">

	<div class="header">
     <h2 class="title">Agregar Persona</h2>
                                
     </div>
     
	<p class="centrado">
	<form class="form-horizontal" action="controllers/m_persona/m_persona.php" id="regPersona"  method="POST">

			<input type="hidden" name="opc" id="opc" value="new">
				
			<div class="form-group">
			<label for="Nombre" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Nombre: </label>
			<div class="class=col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Esciba su nombre" >
         	</div>
			</div>
			
	   		<div class="form-group">
			<label for="Apellido" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Apellidos:</label>
			<div class="class=col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<input class="form-control" type="text" name="apellido" id="apellido" placeholder="Ejemplo: Lara Guardado " >
			</div>
           	</div>
            
            <div class="form-group">
            <label for="Sexo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" >Sexo: </label>
            	<div class="class=col-xs-12 col-sm-9 col-md-9 col-lg-9">
            		<select id="sexo" name="sexo" class="form-control" >
				<option selected disabled>Seleccione sexo</option>
				<option value="F">F</option>
				<option value="M">M</option>
			</select>
            	</div>
            </div>
			
            
            <div class="form-group">
            <label for="Dui" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >DUI: </label>
            	<div class="class=col-xs-12 col-sm-9 col-md-9 col-lg-9">
            		<input class="form-control " type="text" name="dui" id="dui" placeholder="Ingrese su número de DUI" >
            	</div>
            </div>
           
			<div class="form-group">
			<label for="Telefono" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Telefono: </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<input class="form-control " type="text" name="telefono" id="telefono" placeholder="Ingrese su número de teléfono" >
				</div>
			</div>
			
             
			<div class="form-group">
			<label for="Fecha_Nacimiento" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Fecha de nacimiento: </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<input class="form-control" type="date" name="fechaNac" id="fechaNac" placeholder="dd/mm/aaaa">
				</div>
			</div>
			
            
            <div class="form-group">
            <label for="Direccion" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Direccion: </label>
            	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            		<textarea class="form-control " type="text" name="direccion" id="direccion" >
				
			</textarea>
            	</div>
            </div>

            <div class="form-group">
            	  <label for="NumeroCasa" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Numero de casa: </label>
            	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            		<input class="form-control " type="text" name="Ncasa" id="Ncasa" placeholder="Ingrese un numero de casa" >
            	</div>
            </div>

             <div class="form-group">
            	  <label for="NumeroCasa" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Familiar de menores de edad de la institucion?: </label>
            	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            		<select id="estadofamiliar" name="estadofamiliar" class="form-control">
				<option selected disabled>Seleccione una opcion</option>
				<option value="Si">Si</option>
				<option value="No">No</option>
			</select>
            	</div>
            </div>
           
			
           
			<?php
			
			include_once('../../conexiones/conexion.php');
			$sqlCiclo="select * from municipio";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
			<div class="form-group">
			 <label for="Municipio" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Municipio: </label>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<select name="munic" id="ciclo" class="form-control">
					<option  value="null"  selected>Seleccione un municipio</option>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
				</div>
			</div>
				
			
          
      		  <?php
			
			include_once('../../conexiones/conexion.php');
			$sqlCiclo="select * from profesion";
			$rCiclo=$conn->query($sqlCiclo);
			$fCiclo = mysqli_fetch_assoc($rCiclo);
		?>
             <div class="form-group">
             	<label for="Profesion" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"  >Profesion: </label>
             	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
             		<select name="profesion" id="ciclo" class="form-control">
					<option  value="null"  selected>Seleccione una profesión</option>
                   
				<?php do{?>
					<option  value="<?php echo $fCiclo['Id']?>"><?php echo $fCiclo['Nombre']?></option>
				<?php }while($fCiclo=mysqli_fetch_assoc($rCiclo));?>
			</select>
             	</div>
             </div>
 
            <div class="form-group">
                            <div class="col-xs-12 col-sm-2 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Registrar Matricula</button>
                            </div>
                            </div>
	</form>
	</p>
	</div>
	</div>
	</div>
	