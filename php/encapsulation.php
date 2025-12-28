<!-- Problem 2: Bank Account Simulation (Encapsulation)
Problem Statement

Create a class BankAccount with private variable balance.
Support the following operations:

Deposit

Withdraw

Check Balance

Input

First line: initial balance

Second line: integer Q (number of queries)

Next Q lines:

D x → deposit x

W x → withdraw x

B → print balance

Output

Print balance after each B query

If withdrawal exceeds balance, print Insufficient Balance -->


<?php
class BankAccount{
    private $balance;
   
  public function __construct($balance){
    $this->balance = $balance;

  } 
  
  public function deposit($amount){
    $this->balance += $amount;
  }

  public function withdraw($amount){
    if($amount>$this->balance){
        echo "insufficient balance\n";
    }
    else{
        $this->balance -= $amount;
    }
  }

  public function checkBalance(){
    echo $this->balance . "\n";
  }


}

$initialBalance = intval(trim(fgets(STDIN)));
$account = new BankAccount($initialBalance);


//number of queries
$Q = intval(trim(fgets(STDIN)));

for($i=0; $i<$Q; $i++){
    $input = explode(" ",trim(fgets(STDIN)));
  $command = strtoupper($input[0]);
if( $command == 'D'){

    $account->deposit((int)$input[1]);
}
if( $command == 'W'){

    $account->withdraw((int)$input[1]);
}
if( $command == 'B'){

    $account->checkBalance();
}
}





?>

<!-- output
1000
3
D 200
W 100
B
1100 -->