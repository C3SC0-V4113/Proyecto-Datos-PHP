<?php

namespace App;

/**
 * Aqui ocurren las validaciones
 * correspondientes en una
 * clase separada
 */

class Validate{
    public static function email($value){
        return (bool)filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value){
        return (bool)filter_var($value, FILTER_VALIDATE_URL);
    }

    /**
     * Usando una expresion regular
     */

    public static function password($value){
        return (bool)preg_match('/^[0-9]{6,9}$/',$value);
    }
}