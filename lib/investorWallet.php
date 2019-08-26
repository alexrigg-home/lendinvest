<?php

class investorWallet implements investorWalletInterface
{

	private $name;
	private $totalAmount;
	private $investments;

	public function __construct(string $name,int $totalAmount): void
	{
		$this->name = $name;
		$this->totalAmount = $totalAmount;	
		$this->investments = new array();
	}

	public getTotalAmount(): int
	{
		return $this->totalAmount;
	}

	// using pass by reference because there a requirement of no storage in db or otherwise.
	public function invest(&$loan, array &$tranches, string $trancheName, date $dateInvested, float $amountInvested): void
	{
		$pass = 0;
		if ( $dateInvested >= $loan->getStartDate && $dateInvested <= $loan->getEndDate ) $pass++;
		if ( $amountInvested > $this->getTotalAmount  ) $pass++;
		if ( $amountInvested < $loan->getTotalAmountAvailable  ) $pass++;

		foreach($tranches as $tranche)
		{
			if ( $trancheName == $tranche->getName ) $pass++;
		}
		// you could make this more meaningful with why there was an exception here. eg not enough funds in wallet or 
		if ( $pass < 4 )  throw new Exception('exception');


		$this->totalAmount = $this->totalAmount - $amountInvested;
		$loan->getTotalAmountAvailable = $loan->getTotalAmountAvailable - $amountInvested;

		$investment = new investment($trancheName, $dateInvested, $amountInvested);			
		$this->investments[] = $investment;

		return $this;
	}

}