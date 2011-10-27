<?php

class Pecado {

	var $text;
	var $id;

	private static $instance = 0;
	private static $instances = array();

	private function __construct(
		$text
	) {
		$this->text = $text;
		$this->id = self::$instance;
		self::$instances[$this->id] = $this;
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
		return self::$instances;
	}

	public static function withId(
		$id
	) {
		return self::$instances[$id];
	}

	public static function init(
	) {
		if (count(self::$instances) == 0) {
			new Pecado("He meado a alguien");
			new Pecado("Hoy he mentido");
			new Pecado("Me gusta el sexo oral");
		}
	}

};

Pecado::init();

?>
