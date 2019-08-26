<?php
interface investorInterface
{
	public function invest(string $trancheName, date $dateInvested, float $amountInvested);
}