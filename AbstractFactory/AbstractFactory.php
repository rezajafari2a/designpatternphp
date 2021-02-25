<?php

/**
 * کارخانه انتزاعی 
 */
interface A_F_Payment
{
    public function build_Meli();
    public function build_Pasargad();
}
/**
 * کارخانه
 *  سازنده انتزاعی
 */
class C_A_F_Payment implements A_F_Payment
{

    private $pasargad, $meli;
    public function build_Meli()
    {
        $this->meli = new Bank_Meli();
        return $this->meli;
    }
    public function build_Pasargad()
    {
        $this->pasargad = new Bank_Pasargad();
        return $this->pasargad;
    }
}

/**
 * کلاس انتزاعی برای اشیائی که ویژگی مشترکی دارند
 */
interface A_Gateway
{
    public function doSomthing();
}
/**
 * توابع سازنده
 */
class Bank_Meli implements A_Gateway
{
    public function doSomthing()
    {
        echo "Bank Meli";
    }
}

class Bank_Pasargad implements A_Gateway
{
    public function doSomthing()
    {
        echo "Bank Pasargad";
    }
}
