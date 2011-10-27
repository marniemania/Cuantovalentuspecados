<?php

	include_once("src/Helper.php");

	list($hombres, $mujeres) = Helper::get_values();

	Helper::update_stats($hombres, $mujeres);

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
