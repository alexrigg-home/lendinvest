<?php

class investment
{
	private $trancheName;
	private $dateInvested;
	private $amountInvested;

	public function __construct(string $trancheName, date $dateInvested, float $amountInvested): void
	{
		$this->trancheName = $trancheName;
		$this->dateInvested = $dateInvested;
		$this->amountInvested = $amountInvested;
	}
}