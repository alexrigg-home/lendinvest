<?php
class loan implements loanInterface
{
	private $startDate;
	private $endDate;
	private $tranches;

	public function __construct(date $startDate, date $endDate) : void
	{
		// here tests to ensure user entry is correct		
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->tranches = new array();
	}	

	public function addTranche(string $name, float $monthlyInterestRate, int $totalAmountAvailable): void	
	{
		$tranche = new tranche($name, $monthlyInterestRate, $totalAmountAvailable);
		$this->tranches[$name] = $tranche;
	}

	public function getStartDate(): date
	{
		return $this->startDate;
	}

	public function endDate(): date
	{
		return $this->endDate;
	}

	public function getTranches(): array
	{
		return $this->tranches;
	}
}