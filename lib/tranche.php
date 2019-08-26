<?php
class tranche
{
	private $name;
	private $monthlyInterestRate;
	private $totalAmountAvailable;

	public function __construct(string $name, float $monthlyInterestRate, int $totalAmountAvailable) : void
	{
		// here tests to ensure user entry is correct		
		$this->name = $name;
		$this->monthlyInterestRate = $monthlyInterestRate;
		$this->totalAmountAvailable = $totalAmountAvailable;
	}

	public function getName(): string
	{
		return $this->name;
	}	

	public function getMonthlyInterestRate(): float
	{
		return $this->monthlyInterestRate;
	}

	public function getTotalAmountAvailable(): int
	{
		return $this->totalAmountAvailable;
	}
}