<?php

declare(strict_types=1);
/**
 * محاسبه قیمت
 */
class Director_price
{
    public function get_price($item_id, $pr_id = null): int
    {
        $price = 0;
        // گرفتن نوع محصول
        $prd = $this->get_type(1, $pr_id);

        // محسابه قیمت 
        $price = $prd->calculate();
        // قیمت نماینده است
        //$t = User::type_id();
        //if($t){
        //حراجی برای نماینده
        //$haraji = new Haraji();
        //$price  = Namayande::price($price);
        //$s = $haraji->namayande($price);
        //}
        // else{
        // حراجی
        //$haraji = new Haraji();
        //$price = $haraji->namayande($price);
        // }
        return $price;
    }
    public function get_type(int $product_id, $propertys = null)
    {
        if ($product_id == 1) {
            return new Tile($propertys);
        } elseif ($product_id == 1) {
            return new Asan_nasb();
        } elseif ($product_id == 2) {
            return new Uniquemirror();
        } else
            return 0;
    }
}
/**
 * در اینجا منظور از محصول انواع آینه است
 * کلاس محصول که شامل قیمت، کد محصول و نوع محصول هست.
 * نوع محصول می تواند ویژگی هایی مانند رنگ یا ضخامت برای محصول های ما باشد
 */
abstract class Product
{
    abstract public function calculate();
}

/**
 * تایل آینه ای
 */
class Tile extends Product
{
    private $price = 1200;
    private $item_id = 1;
    private $property_id = 1;
    private $width, $height, $zekhamat;
    public function __construct($property)
    {
        $this->width = $property['width'];
        $this->height = $property['height'];
        $this->zekhamat = $property['zekhamat'];
    }
    public function calculate(): int
    {
        return $this->price * ($this->width * $this->height * $this->zekhamat);
    }
}
/**
 * آینه آسان نصب
 */
class Asan_nasb extends Product
{
    public function calculate(): int
    {
        return 40000;
    }
}

/**
 * آینه یونیک
 */
class Uniquemirror extends Product
{
    public function calculate(): int
    {
        return 70000;
    }
}
