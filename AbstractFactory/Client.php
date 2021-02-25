<?php

include_once "AbstractFactory.php";
/**
 * فراخوانی توسط کاربر
 * @return object(Bank_Meli)#3 (0) { } Bank Meli
 * 
 */
class Client
{
    public function call(A_F_Payment $absf)
    {
        //کاربر بانک ملی را انتخاب کرده
        $meli = $absf->build_Meli();
        var_dump($meli);
        $meli->doSomthing();
    }
}
$abstract_factory = new C_A_F_Payment();
$client = new Client();
$client->call($abstract_factory);
