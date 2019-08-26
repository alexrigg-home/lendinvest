<?php
require_once __DIR__ . '/../vendor/autoload.php';

if ( count($argv) < 5) throw new Exception('Expects 4 parameters: date of investment, investor name, amount to invest, tranche name');	
