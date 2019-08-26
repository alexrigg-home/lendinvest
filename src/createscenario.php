<?php 
require_once __DIR__ . '/../vendor/autoload.php';

if ( count($argv) < 4) throw new Exception('Expects 3 parameters: loan start date, loan end date, number tranches,  tranche name, tranche monthly interest,  ');	

