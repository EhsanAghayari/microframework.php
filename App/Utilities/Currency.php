<?php
namespace App\Utilities;

class Currency{
    public static function price_in_thousand_toman($amount){
        return $amount / 1000;
    }

    public static function price_in_million_toman($amount){
        return $amount / 1000000;
    }

    public static function price_to_rial($amount){
        return $amount * 10;
    }
}