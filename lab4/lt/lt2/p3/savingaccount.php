<?php
include 'bankaccount.php';
class SavingAccount extends BankAccount
{
 private $interestRate;
 public function setInterestRate($interestRate)
 {
 $this->interestRate = $interestRate;
 }
 public function addInterest()
 {
 $interest = $this->interestRate * $this->getBalance();
 $this->deposit($interest);
 }
}
?>