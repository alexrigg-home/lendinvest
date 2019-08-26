<?php
use PHPUnit\Framework\TestCase;

final class trancheTest extends TestCase
{

	public function addTrancheTest()
	{
		$startDate = date("d/m/y", strtotime("2015-10-01"));
		$endDate = date("d/m/y", strtotime("2015-11-15"));
		$loan = new loan($startdate,$enddate);

		$loan->addTranche('test', 0.03, 1000);
		$this->assertEquals($loan->getTranches()['test']->getName(), 'test');
		$this->assertEquals($loan->getTranches()['test']->getMonthlyInterestRate(), 0.03);
		$this->assertEquals($loan->getTranches()['test']->getTotalAmountAvailable(), 1000);
	}
}