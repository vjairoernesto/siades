<?php
	
	require "../../conexiones/conexion.php";
	
	//$institucionprocedencia=TRIM($_POST["nombreinstitucionprocedencia"]);
$idpersona=TRIM($_POST['idpersona']);
$nie=TRIM($_POST['nie']);
$iddiscapacidad=TRIM($_POST['iddiscapacidad']);
$idreligion=TRIM($_POST['idreligion']);
$medicado=TRIM($_POST['medicado']);
$estado=TRIM($_POST['estado']);




	$sql="insert into alumno(Nie,Estado,Medicado,Id_discapacidad,Id_persona,Id_religion) values ('$nie','$estado','$medicado','$iddiscapacidad','$idpersona','$idreligion')";

	$query=$conn->query($sql);

	

	if ($query > 0) {
		echo "mensaje exitoso";
		header("location: ../../");
	}

	else
	{
		echo "Error: ";
	}









?>

