<?php
	
	require "../../conexiones/conexion.php";
	
	$institucionprocedencia=TRIM($_POST["nombreinstitucionprocedencia"]);
	$gradoanterior= TRIM($_POST["Gradoanterior"]);
	$departamento=TRIM($_POST["departamento"]);
	$anioinscripcion=TRIM($_POST["anoinscripcion"]);
	$estudiante=TRIM($_POST["txtCountry"]);
	$fechanacimiento=TRIM($_POST["fechanacimiento"]);
	$edad=TRIM($_POST["edad"]);
	$gradoaestudiar=TRIM($_POST["gradoaestudiar"]);
	$NIE=TRIM($_POST["nie"]);
	$genero=TRIM($_POST["genero"]);
	$discapacidad=TRIM($_POST["discapacidad"]);
	$discapacidaddetalles=TRIM($_POST["discapacidaddetalles"]);
	$medicado=TRIM($_POST["medicado"]);
	$padremadre=TRIM($_POST["PadreMadre"]);
	$profesionoficiopadremadre=TRIM($_POST["profesionoficiopadremadre"]);
	$encargado=TRIM($_POST["encargado"]);
	$ProfesionOficioEncargado=TRIM($_POST["ProfesionOficioEncargado"]);
	$direccion=TRIM($_POST["Direccion"]);
	$NCasa=TRIM($_POST["NCasa"]);
	$telefono=TRIM($_POST["telefono"]);
	$nhermanos=TRIM($_POST["cbonhermanos"]);
	$otrofamiliar=TRIM($_POST["otrofamiliar"]);
	$repitegrado=TRIM($_POST["repitegrado"]);
	$reciberefuerzo=TRIM($_POST["cboreciberefuerzo"]);
	$tiporefuerzo=TRIM($_POST["repiterefuerzotipo"]);
	$provieneescuelaespecial=TRIM($_POST["cboescuelaespecialproviene"]);
	$nombreescuelaespecial=TRIM($_POST["nombreescuelaespecial"]);
	$atentidoeducacioncurricular=TRIM($_POST["cboeducacionescurriculares"]);
	$tipoeducacioncurricular=TRIM($_POST["educacioncurricular"]);
	$observaciones=TRIM($_POST["observaciones"]);
	$docenteacargo=TRIM($_POST["docenteacargo"]);
	$fechaactual= date("d-m-Y");
	$documentoscompletos=TRIM(['entrego']);

	$sql="insert into matricula(Observaciones,Nhermanos,Repite_grado,Id_documento,Id_alumno,Id_aniolectivo,Id_parentezco,Id_cargadocente,Id_seccion,Id_turno,Institicion_procedente,Id_escuelaespecial) 
	values('$observaciones','$nhermanos','$repitegrado','$documentoscompletos','$estudiante','$anoinscripcion','','1','1','1','$institucionprocedencia','1')";

	$query=$conn->query($sql);

	echo $sql."</br>";

	if ($query > 0) {
		
		header("location: ../../views/v_matricula/v_matricula.php?guardado=si");
	}

	else
	{
		echo "Error: ";
	}











?>