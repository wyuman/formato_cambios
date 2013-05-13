<DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
	<title>Formato Compilación</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="STYLESHEET" type="text/css" href="css/body.css">
	<script>
</script>
</head>
<body>
<form id="form" name="form" method="post" action="rpt_formato_cambios.php" >
<div id="centrar">
<div id="h1">
<img src="banner.jpg" />
</div>
</div>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>


<script type="text/javascript" language="javascript">
function Seleccionar(combo){
      //var indice = combo.selectedIndex;
      var valor = combo.options[combo.selectedIndex].text;
      //alert(valor);
	  document.getElementById("mod").value = valor;
	 
  }
</script>
<script type="text/javascript" language="javascript">
function Seleccione(combo){
      //var indice = combo.selectedIndex;
      var valor = combo.options[combo.selectedIndex].text;
      //alert(valor);
	  document.getElementById("pro").value = valor; 
  }
</script>

<script type="text/javascript">
$(document).ready(function(){
			$("#id_progra").change(function(){
				$.post("carga_modulos.php",{ id:$(this).val() },function(data){$("#id_modulos").html(data);
														});
												});
										});
</script>
<script type="text/javascript">
$(document).ready(function(){
			$("#id_modulos").change(function(){
				$.post("carga_programas.php",{ id:$(this).val() },function(data){$("#id_programas").html(data);
														});
												});
										});
</script>

<div id="contenedor">
<fieldset>
<legend>Ingreso de Datos</legend>


<div>
<label for="nsistema">Nombre de Sistema </label>
<select name="id_progra" id="id_progra">
	<option value="0">Seleccione</option>
	<option value="Acad">Acad</option>
	<option value="Contab">Contab</option>
</select>
</div>
<div>
<label for="nsistema">Modulo</label>
<select name="id_modulos" id="id_modulos" onChange="Seleccionar(this)">
	<option selected disabled></option></th>
</select>
</div>
<div>	
<label for="nsistema">Nombre del Programa</label>		
<select name="id_programas"  id="id_programas" onChange="Seleccione(this)">
	<option select disabled  ></option>
</select>
</div>
</select>
</fieldset>
<div id="label">
				

</div>
<fieldset>
<legend>Datos Ingresados</legend>
<div>
				<label for="solicitud">Nombre quién Solicito:</label>
				<input type="text" name="solicitud" autofocus="autofocus" maxlength="50" size="50"/>
</div>
<div>
				<label for ="programador">Nombre del Programador:</label>
				<input type="text" name="programador"  autofocus="autofocus" maxlength="50" size="50"/>
</div>
<div>
				<label for="compilador">Nombre del Compilador: </label>
				<input type="text" name="compilador"  autofocus="autofocus" maxlength="50" size="50"/>
</div>
<div>	
				<label for="fechas">Fecha de Solicitud: </label>
				<input type="text" name="fechas" autofocus="autofocus" maxlength="10" size="10"/>
				
</div>	
<div>
				<label for="fechai">Fecha de Producción: </label>
				<input type="text" name="fechai"  autofocus="autofocus" maxlength="10" size="10"/>
</div>
<div>	
				<label for="fechac">Fecha de Compilación: </label>
				<input type="text" name="fechac"  autofocus="autofocus" maxlength="10" size="10"/>
</div>
<div>
				<input type="hidden" id="mod" name="mod"  autofocus="autofocus" size="20"/>
				<input type="hidden" id="pro" name="pro" size="20"/>
</div>
</fieldset>
<fieldset>
<legend>Descripción</legend>			
<div id="label2">
				<label for="des">Descripción de lo Solicitado:</label>
				<textarea class="estilotextarea" name="des" placeholder ="Los Cambios solicitados" autofocus="autofocus" cols="46" rows="8"></textarea>
</div>
<div id="label2">
				<label for="descrip">Descripción de Cambios: </label>
				<textarea class="estilotextarea" name="descrip" placeholder ="Cambios realizados en el sistema" autofocus="autofocus" cols="46" rows="8"></textarea>
</div>	
	            <input type="hidden" name="combo" id="combo" value="" > 
				<input class="btn" type="submit" value="Imprimir" onClick="return Enviar()" />
				<input name="reset" id="reset" type="reset" value="Restablecer" /> 


</fieldset>
</div>
</form>
</html>