<? include ("/Conexion/conexion.php"); 
//include ("validar_login.php"); ?>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Roles</title>
</head>
<body>-->
	<?
		$query = "SELECT * FROM Rol";
		$res = sqlsrv_query($con, $query);
		if (!$res) {
			echo "No se puede mostrar los datos desde la consulta $query !!";
			exit;
		}
		echo "<table id='tabla'>\n";
		echo "
			<tr>
				<td>NO.</td>
				<td>ROL</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			\n";
		while ($row=sqlsrv_fetch_object($res)) {
			echo "
				<tr>
					<td>$row->RolId</td>
					<td>$row->RolDescription</td>
				</tr>\n
			";
		}
		echo "</table>\n";
	?>