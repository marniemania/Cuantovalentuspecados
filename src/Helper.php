<?php

include_once("pecados.php");

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

class Helper {

	public static function get_values(
	) {
		return array(
			file("pecadosm.txt"),
			file("pecadosf.txt")
		);
	}

	public static function put_values(
		$hombres,
		$mujeres
	) {
		put_values("pecadosm.txt", $hombres);
		put_values("pecadosf.txt", $mujeres);
	}

	public static function get_statistics(
		$hombres,
		$mujeres
	) {
		uasort($hombres, "cmp");
		uasort($mujeres, "cmp");

		$sum_h = 0;
		foreach ($hombres as $hombre) {
			$sum_h = trim($hombre) + $sum_h;
		}
		$sum_f = 0;
		foreach ($mujeres as $mujer) {
			$sum_f = trim($mujer) + $sum_f;
		}

		$lines = array();
		foreach ($hombres as $id => $count) {
			$pctje = round(10000 * trim($count) / $sum_h) / 100;
			$lines []= array("{$pecados[$id]} [$pctje%]");
		}
		$cont = 0;
		foreach ($mujeres as $id => $count) {
			$pctje = round(10000 * trim($count) / $sum_f) / 100;
			$lines [$cont][1]= "{$pecados[$id]} [$pctje%]";
			$cont = $cont + 1;
		}

		return $lines;
	}

}


?>
