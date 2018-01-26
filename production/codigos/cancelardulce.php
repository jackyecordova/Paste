<?php 	

	include '../conexion.php';
	$mysqli->query("DELETE FROM detventadulce where idventa=".$_POST['idcancelar']	)or die($mysqli->error);
	header("Location: ../venderdulce.php");
 ?>
