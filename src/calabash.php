<?php
namespace Calabash;

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
	
	public function setName($name){
		$this->name = $name;
	}
}

