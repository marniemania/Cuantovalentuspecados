<?php

	include_once("pecados.php");

	if (isset($_POST["sex"])) {
		$sex = $_POST["sex"];
		$questions = $_POST["id"];
	
		foreach ($questions as $id => $value) {
		}
	}

	function get_values($file) {
		$results = array();
		$contents = file_get_contents($file);
		for ($pos = 0; $pos < strlen($contents); $pos++) {
			if ($pos %2 == 0)
				$results []= substr($contents, $pos, 1);
		}
		return $results;
	}

	$hombres = get_values("pecadosm.txt");
	$mujeres = get_values("pecadosf.txt");

	echo "<table border=1>";
	echo "<tr><th>Pecado</th><th>Hombres</th><th>Mujeres</th></tr>";
	foreach ($hombres as $id => $count) {
		echo "<tr>";
		echo "<td>"; echo $pecados[$id]; echo "</td>";
		echo "<td>"; echo $count; echo "</td>";
		echo "<td>"; echo $mujeres[$id]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";

?>

<a href=index.html>Volver a empezar</a>
