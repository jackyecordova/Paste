
<?php
	include '../conexion.php';
	$venta=$mysqli->query("select MAX(idventa) AS id from ventadulce")or die($mysqli->error);
    $ventadulcee=$venta->fetch_assoc();
                  $noventa=$ventadulcee['id'];
                  $novent=$noventa +1;
	$total=$mysqli->query("SELECT SUM(`precio`) as totaldulce from detventadulce where idventa=". $novent)or die($mysqli->error);
    $totaldulce=$total->fetch_assoc();
                  $totaldul=$totaldulce['totaldulce'];
                 
                  $dia=date("W");
                  $mes=date("F");
                  $ano=date("Y");
                  $fecha=$ano.$mes.$dia;
                  $hoy = date("Y-m-d");  

			$consulta="INSERT INTO ventadulce 
			values(0,
				 '$hoy',
				'$totaldul')";




	
		
		


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location: ../venderdulce.php");


  ?>
  <!--
  CREATE TRIGGER RESTAR_EXISTENCIA ON det FOR INSERT
AS 
UPDATE d SET d.existencia=d.existencia- v.cantidad
FROM dulces AS d INNER JOIN INSERTED AS v ON v.codigo=d.codigo

-->
<!--

delimiter $$
CREATE TRIGGER AGREGAR_EXISTENCIA After insert ON detventadulce
FOR EACH ROW
 BEGIN
UPDATE P SET P.existencia=(P.existencia - D.cantidad) FROM dulces AS P INNER JOIN INSERT AS D ON D.codigo=P.codigo;
END$$

-->
<!--
delimiter $$;
CREATE TRIGGER VENTADETALLE_PEDIDO BEFORE INSERT ON detventadulce
       FOR EACH ROW
    BEGIN
        UPDATE dulces
        SET    existencia = existencia - detventadulce.cantidad
        WHERE  codigo = detventadulce.codigo;
    END$$;
    -->