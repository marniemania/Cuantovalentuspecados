<?php
	include_once("src/Helper.php");

	Helper::update_stats();
?>

<table border=1>
<tr>
	<th>Hombres</th>
	<th>Mujeres</th>
</tr>

<?php
	foreach (Helper::get_statistics() as $line) {
		echo "<tr>";
		foreach ($line as $word) {
			echo "<td>"; echo $word; echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>

<a href=index.html>Volver a empezar</a>
