<?php
require_once __DIR__ . '/../vendor/autoload.php';

if ( count($argv) < 3) throw new Exception('Expects 2 parameters: start date and end date');	
