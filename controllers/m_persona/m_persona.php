<?php
	
	require "../../conexiones/conexion.php";
	
	//$institucionprocedencia=TRIM($_POST["nombreinstitucionprocedencia"]);
$nombre=TRIM($_POST['nombre']);
$apellido=TRIM($_POST['apellido']);
$sexo=TRIM($_POST['sexo']);
$fechaNac=TRIM($_POST['fechaNac']);
$dui=TRIM($_POST['dui']);
$direccion=TRIM($_POST['direccion']);
$telefono=TRIM($_POST['telefono']);
$ncasa=TRIM($_POST['Ncasa']);
$estado_familiar=TRIM($_POST['estadofamiliar']);
$munic=TRIM($_POST['munic']);
$profesion=TRIM($_POST['profesion']);

	$sql="insert into persona(Nombre,Apellido,Fecha_nacimiento,Sexo,Dui,Direccion,Telefono,Ncasa,Estado_familiar,Id_municipio,Id_profesion) values ('$nombre','$apellido','$fechaNac','$sexo','$dui','$direccion','$telefono','$ncasa','$estado_familiar','$munic','$profesion')";

	$query=$conn->query($sql);

	

	if ($query > 0) {
		echo "mensaje exitoso";
		header("location: ../../?guardado=si");
	}

	else
	{
		echo "Error: ";
	}









?>