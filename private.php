<?php
class BankAccount {
    public $email;
    public $pass;
    private $_balance;

    public function setBa($balance) {
        $this->_balance = $balance;
    }

    public function getBa() {
        return $this->_balance;
    }
}
$peter = new BankAccount;
$peter->email = 'huylh@vnext.com';
$peter->setBa(10000000);
echo $peter->getBa(); // hợp lệ
?>