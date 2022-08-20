<?php 
  echo "\n=======================================================\n\n";
  
  abstract class Bank {
    protected $agency;
    protected $account;
    protected $balance;

    public function __construct($agency, $account, $balance) {
      $this->setAgency($agency);
      $this->setAccount($account);
      $this->setBalance($balance);
    }

    public function getDetails() {
      return "Agency: ".$this->getAgency()." | Account: ".$this->getAccount()." | Balance: ".$this->getBalance()."\n";
    }

    public function depositor($value) {
      echo "Depositor of: {$value} | Balank current: ".$this->getBalance()." for ";
      $this->setBalance($this->getBalance() + $value);
      echo $this->getBalance()."\n";
      $this->setBalance($this->getBalance() + $value);
    }

    protected function setAgency($agency) {
      $this->agency = $agency;
    }
    protected function setAccount($account) {
      $this->account = $account;
    }
    protected function setBalance($balance) {
      $this->balance = $balance;
    }

    protected function getAgency() {
      return $this->agency;
    }
    protected function getAccount() {
      return $this->account;
    }
    protected function getBalance() {
      return $this->balance;
    }
  }
  final class Savings extends Bank {
    public function withdraw($value) {
      if($this->getBalance() >= $value) {
        $this->setBalance($this->getBalance() - $value);
        echo "Withdraw of: {$value} | balance current: {$this->getBalance()}\n";
      } else {
        echo "Withdraw not authorized of ".$value." | Balance current: {$this->getBalance()}\n";
      }
    }
  }
  final class Current extends Bank {
    protected $credits;

    public function __construct($agency, $account, $balance, $credits) {
      $this->setCredits($credits);
      parent::__construct($agency, $account, $balance);
    }

    public function withdraw($value) {
      if(($this->getBalance() + $this->getCredits()) >= $value) {
        $this->setBalance($this->getBalance() - $value);
        echo "Withdraw of: {$value} de ".$this->getBalance() + $this->getCredits();
        echo " | balance current: {$this->getBalance()}\n";
      } else {
        echo "Withdraw not authorized of ".$value." de ".$this->getBalance() + $this->getCredits();
        echo " | Balance current: {$this->getBalance()} | Credits: {$this->getCredits()}\n";
      }
    }

    private function setCredits($credits) {
      $this->credits = $credits;
    }
    private function getCredits() {
      return $this->credits;
    }
  }

  $bank_savings = new Savings(100, 2586, 5000);
  echo $bank_savings->getDetails();
  echo $bank_savings->depositor(2340);
  echo $bank_savings->withdraw(6870);
  echo $bank_savings->withdraw(7581);
  echo $bank_savings->depositor(2564);
  echo "\n";
  $bank_current = new Current(100, 2586, 5000, 2500);
  echo $bank_current->getDetails();
  echo $bank_current->depositor(2340);
  echo $bank_current->withdraw(6870);
  echo $bank_current->withdraw(4581);
  echo $bank_current->depositor(2564);
  
  echo "\n=======================================================\n\n";
?>