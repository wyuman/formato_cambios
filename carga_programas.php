<?php
$programa = $_REQUEST["id"];
include("conexion2.php");
$query = ibase_query("SELECT b.modulo, b.titulo, b.nombre FROM sis_modulos a left join sis_programas b on b.modulo = a.id where a.id = $programa");
		while($Re= ibase_fetch_assoc($query))
		{
		echo "<option value='".$Re["MODULO"]."'>".utf8_encode($Re["TITULO"])."</option>";
		}
		echo "</select>";

?>
