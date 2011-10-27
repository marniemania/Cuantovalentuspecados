<?php

	include_once("src/Helper.php");

	list($hombres, $mujeres) = Helper::get_values();

	if (isset($_POST["sex"])) {
		$sex = $_POST["sex"];
		$questions = $_POST["id"];
	
		foreach ($questions as $id => $value) {
			if ($sex == "m")
				$hombres[$id] = $hombres[$id] + 1;
			else
				$mujeres[$id] = $mujeres[$id] + 1;
		}

		Helper::put_values($hombres, $mujeres);
	}

	echo "<table border=1>";
	echo "<tr><th>Hombres</th><th>Mujeres</th></tr>";
	foreach (Helper::get_statistics($hombres, $mujeres) as $line) {
		echo "<tr>";
		foreach ($line as $word) {
			echo "<td>"; echo $word; echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>

<a href=index.html>Volver a empezar</a>
