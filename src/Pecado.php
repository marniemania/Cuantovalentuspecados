<?php

class Pecado {

	var $text;

	private function __construct(
		$text
	) {
		$this->text = $text;
	}

	public function text(
	) {
		return $this->text;
	}

	public static function all(
	) {
		return array(
			new Pecado("He meado a alguien"),
			new Pecado("Hoy he mentido"),
			new Pecado("Me gusta el sexo oral")
		);
	}

}


?>
