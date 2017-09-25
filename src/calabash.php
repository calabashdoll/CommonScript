<?php
namespace Calabash\calabash;

class Calabash
{
	private $nmae;

	public function __construct($name = 'calabash'){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function calabash(){
		return 'hello'.$this->name."!";
	}
}

