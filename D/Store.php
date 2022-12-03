<?php
include_once 'MyBankApi.php';
include_once'PaymentProcessor.php';
class Store{
protected $paymentProcessor;
public function __construct(PaymentProcessor $paymentProcessor){
    $this->paymentProcessor=$paymentProcessor;
}
public function purchase(){
    $this->paymentProcessor->pay();
}
}