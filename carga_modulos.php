<?php
$modulos = $_REQUEST["id"];
switch($modulos){
case "Contab": 
		include("Conexion3.php");
		$querys = ibase_query("SELECT id,nombre FROM sis_modulos order by nombre");
		while($Resul= ibase_fetch_assoc($querys))
		{
		echo "<option value='".$Resul["ID"]."'>".utf8_encode($Resul["NOMBRE"])."</option>";
		}
		echo "</select>";
		break;
		
case "Acad": 
		include ("conexion2.php");
		$query = ibase_query("SELECT id,nombre FROM sis_modulos order by nombre");
		while($Resul= ibase_fetch_assoc($query))
		{
		echo "<option value='".$Resul["ID"]."'>".utf8_encode($Resul["NOMBRE"])."</option>";
		}
		echo "</select>";
		break;
}
?>