<?php

include_once "Builder.php";
/**
 * فراخوانی توسط کاربر
 * 
 * 
 */
class Client
{
    public function call()
    {
        $d = new Director_price();
        $pr_id = array();
        $pr_id['width']    = 100;
        $pr_id['height']   = 100;
        $pr_id['zekhamat'] = 2;
        $p = $d->get_price(1, $pr_id);
        echo $p;
    }
}

$n = new Client();
$n->call();
