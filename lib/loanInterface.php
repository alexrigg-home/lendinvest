
<?php
interface loanInterface
{
	function addTranche(string $name, float $monthlyInterestRate, int $totalAmountAvailable);
}	