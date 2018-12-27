<?php

namespace Reproducer;

ini_set('display_errors', 1);
error_reporting(E_ERROR);

require __DIR__ . "/vendor/autoload.php";

use GoetasWebservices\XML\WSDLReader\DefinitionsReader;

$reader = new DefinitionsReader();
$definitions = $reader->readFile("/var/does-not-exist.wsdl");




