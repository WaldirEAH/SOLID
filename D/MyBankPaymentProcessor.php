<?php
include_once'MyBankApi.php';
include_once'PaymentProcessor.php';
class MyBankPaimentProcessor implements PaymentProcessor{
    protected $myBankApi;
    public function __construct(MyBankApi $myBankApi)
    {
        $this->myBankApi=$myBankApi;
    }
    public function pay()
    {
        $this->myBankApi->charge();
    }
}