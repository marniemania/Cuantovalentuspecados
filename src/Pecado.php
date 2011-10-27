<?php

class Pecado {

	var $text;
	var $id;

	static var $instance = 1;

	private function __construct(
		$text
	) {
		$this->text = $text;
		$this->id = self::$instance;
		self::$instance = self::$instance + 1;
	}

	public function text(
	) {
		return $this->text;
	}

	public function id(
	) {
		return $this->id;
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
