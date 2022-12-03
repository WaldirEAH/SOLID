<?php
include_once'PaymentProcessor.php';
class PaypalPaymentProcessor implements PaymentProcessor{
protected $paypalApi;
    public function __construct(PaypalApi $paypalApi)
{
    $this->paypalApi=$paypalApi;
}
    public function pay()
{
    $this->paypalApi->chargeCustomer();
}
}