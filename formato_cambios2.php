<!DOCTYPE html>
<html>
<head>
	<title>Formato Cambios</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h2>FORMATO DE CAMBIOS UMG</h2>
	</header>
	<section id="section1">
		<form id="form">
	<div id="tab">
		<TABLE>
			<tr>
				<td><label for="nsistema">Nombre de Sistema</label></td>
				<td><select name="id_progra" id="id_progra">
					<option value="0">Seleccione</option>
					<option value="Acad">Acad</option>
					<option value="Contab">Contab</option>
				</select></td>
			</tr>
			<tr>
				<td><label for="modulos">Modulo</option></td>
				<td><select name="id_modulos" id="id_modulos" onChange="Seleccionar(this)">
					<option selected disabled></option>
				</select></td>
			</tr>
			<tr>
				<td><label for="programa">Nombre del Programa</option></td>
				<td><select name="id_progra" id="id_progra" onChange="Seleccionar(this)">
					<option select disabled></option>
				</select></td>
			</tr>
			<tr>
				<td><label for="solicitud">Nombre quién Solicito:</label></td>
				<td><input type="text" name="solicitud" autofocus="autofocus" maxlength="50" size="50"/></td>
			<tr>
				<td><label for="programador">Nombre del Programador</option></td>
				<td><input type="text" name="programador" autofocus="autofocus" maxlength="50" size="50"></td>
			</tr>
			<tr>
				<td><label for="compilador">Nombre del Compilador: </label></td>
				<td><input type="text" name="compilador"  autofocus="autofocus" maxlength="50" size="50"/></td>
			</tr>
			<tr>
				<td><label for="fechas">Fecha de Solicitud: </label></td>
				<td><input type="text" name="fechas" autofocus="autofocus" maxlength="10" size="10"/></td>
			</tr>
			<tr>
				<td><label for="fechai">Fecha de Producción: </label></td>
				<td><input type="text" name="fechai"  autofocus="autofocus" maxlength="10" size="10"/></td>
			</tr>
			<tr>
				<td><label for="fechac">Fecha de Compilación: </label></td>
				<td><input type="text" name="fechac"  autofocus="autofocus" maxlength="10" size="10"/></td>
			</tr>
			<tr>
				<td><input type="hidden" id="mod" name="mod"  autofocus="autofocus" size="20"/></td>
				<td><input type="hidden" id="pro" name="pro" size="20"/></td>
			</tr>
		</table>
	</div>
		</form>
	</section>
</body>
</html>
