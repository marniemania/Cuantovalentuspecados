<?php

	include_once("pecados.php");

	function get_values($file) {
		return file($file);
	}

	function cmp($a, $b) {
		if (1.0 * $a > 1.0 * $b)
			return -1;
		return 1;
	}

	function put_values($file, $values) {
		$hnd = fopen($file, 'w');
		foreach ($values as $value) {
			$value = trim($value);
			fwrite($hnd, "$value\n");
		}
		fclose($hnd);
	}

	$hombres = get_values("pecadosm.txt");
	$mujeres = get_values("pecadosf.txt");

	if (isset($_POST["sex"])) {
		$sex = $_POST["sex"];
		$questions = $_POST["id"];
	
		foreach ($questions as $id => $value) {
			if ($sex == "m")
				$hombres[$id] = $hombres[$id] + 1;
			else
				$mujeres[$id] = $mujeres[$id] + 1;
		}

		put_values("pecadosm.txt", $hombres);
		put_values("pecadosf.txt", $mujeres);
	}

	uasort($hombres, "cmp");
	uasort($mujeres, "cmp");

	$lines = array();
	foreach ($hombres as $id => $count) {
		$lines []= array("{$pecados[$id]} [ $count]");
	}
	$cont = 0;
	foreach ($mujeres as $id => $count) {
		$lines [$cont][1]= "{$pecados[$id]} [ $count]";
		$cont = $cont + 1;
	}

	echo "<table border=1>";
	echo "<tr><th>Hombres</th><th>Mujeres</th></tr>";
	foreach ($lines as $line) {
		echo "<tr>";
		foreach ($line as $word) {
			echo "<td>"; echo $word; echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>

<a href=index.html>Volver a empezar</a>
