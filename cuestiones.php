<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Calculadora de pecados</title>
	<link rel=stylesheet type="text/css" href="./css/style.css">
</head>

<body>

<form name="frm" action=estadisticas.php method="post">

<?php
	include_once("pecados.php");

	foreach ($pecados as $id => $pecado) {
		echo "<input type=checkbox name='id[$id]' value='$id' />$pecado<br />";
	}
?>
<h3>Y algunos datos mas personales...</h3>
De qu&eacute; g&eacute;nero eres?<br>
<input type="radio" name="sex" value="m" checked />
masculino&nbsp;&nbsp;
<input type="radio" name="sex" value="w" />
feminino&nbsp;&nbsp; <br><br>
<input type="submit" value="evaluar" /> 

</form>  <br><br>


</body>
</html>
