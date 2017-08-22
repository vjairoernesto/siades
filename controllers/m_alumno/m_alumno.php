<?php
	
	require "../../conexiones/conexion.php";
	
	//$institucionprocedencia=TRIM($_POST["nombreinstitucionprocedencia"]);
$idpersona=TRIM($_POST['idpersona']);
$nie=TRIM($_POST['nie']);
//$foto = $_FILES['foto']['name'];
$iddiscapacidad=TRIM($_POST['iddiscapacidad']);
$idreligion=TRIM($_POST['idreligion']);
$medicado=TRIM($_POST['medicado']);
$estado=TRIM($_POST['estado']);



	$sql="insert into alumno(Nie,Estado,Medicado,Id_discapacidad,Id_persona,Id_religion) values ('$nie','$estado','$medicado','$iddiscapacidad','$idpersona','$idreligion')";

	$query=$conn->query($sql);

	echo $sql."</br>";

	if ($query > 0) {
		
		header("location: ../../views/v_alumno/v_alumno.php?guardado=si");
	}

	else
	{
		echo "Error: ";
	}






?>

