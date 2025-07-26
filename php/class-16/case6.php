<?php
/*
Create a banking system to manage accounts. Each account has:
- accountNumber
- accountHolder
- balance
- accountType (savings, checking)
- openingDate
- branch

Show account details including holder name, balance, and type.
*/
//Bank Account System
class Account{
    public $accountNumber;
    public $accountHolder;
    public $balance;
    public $accountType;
    public $openingDate;
    public $branch;

    public function showDetails(){
        echo "Account Holder: $this->accountHolder\n Balance: $this->balance\n Account Type: $this->accountType\n";
    }
}

$account1 = new Account();
$account1->accountNumber = "ACC001\n";
$account1->accountHolder = "Mahin\n";
$account1->balance = 50000 ."\n";
$account1->accountType = "Savings\n";
$account1->openingDate = "2023-06-01\n";
$account1->branch = "Gulshan Branch\n";

$account1->showDetails();