<?php

include_once("src/Pecado.php");

function cmp_strnums($a, $b) {
	if (1.0 * $a > 1.0 * $b)
		return -1;
	return 1;
}

class Helper {

	private static function hombres(
	) {
		return "stats/pecadosm.txt";
	}

	private static function mujeres(
	) {
		return "stats/pecadosf.txt";
	}

	public static function get_values(
	) {
		return array(
			file(self::hombres()),
			file(self::mujeres())
		);
	}

	private static function store(
		$file, 
		$values
	) {
		$hnd = fopen($file, 'w');
		foreach ($values as $value) {
			$value = trim($value);
			fwrite($hnd, "$value\n");
		}
		fclose($hnd);
	}

	public static function put_values(
		$hombres,
		$mujeres
	) {
		self::store(self::hombres(), $hombres);
		self::store(self::mujeres(), $mujeres);
	}

	public static function get_statistics(
		$hombres,
		$mujeres
	) {
		$pecados = Pecado::all();

		uasort($hombres, "cmp_strnums");
		uasort($mujeres, "cmp_strnums");

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
			$text = Pecado::withId($id)->text();
			$lines []= array("$text [$pctje%]");
		}
		$cont = 0;
		foreach ($mujeres as $id => $count) {
			$pctje = round(10000 * trim($count) / $sum_f) / 100;
			$text = Pecado::withId($id)->text();
			$lines[$cont][1] = "$text [$pctje%]";
			$cont = $cont + 1;
		}

		return $lines;
	}

	public static function update_stats(
		$hombres,
		$mujeres
	) {
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
	}

}


?>
