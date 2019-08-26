<?php
use PHPUnit\Framework\TestCase;

final class loanTest extends TestCase
{
	public function createLoanTest()
	{
		$startDate = date("d/m/y", strtotime("2015-10-01"));
		$endDate = date("d/m/y", strtotime("2015-11-15"));
		$loan = new loan($startdate,$enddate);

		$this->assertEquals($loan->getStartDate(),$startDate);
		$this->assertEquals($loan->getEndDate(),$endDate);

	}

	


}
