<?php

require_once "vendor/autoload.php";

use Calabash\calabash\Calabash;

$hello = new Calabash("葫芦王"); 

echo $hello->calabash();
