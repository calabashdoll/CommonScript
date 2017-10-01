<?php

require_once "vendor/autoload.php";

use Calabash\Calabash;

$hello = new Calabash("葫芦王"); 

$hello->setName("葫芦娃");

echo $hello->calabash();
