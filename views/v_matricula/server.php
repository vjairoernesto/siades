<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'siades_beta');

	$sql = $conn->prepare("SELECT * FROM persona WHERE Nombre LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["Nombre"]." ".$row["Apellido"];
		
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

