<?php

use PHPUnit\Framework\TestCase;

use App\Validate;

class ValidateTest extends TestCase{
    /**
     * Esta funcion simple como se ve
     * sirve para validar de forma
     * sencilla los emails
     */
    public function test_email(){
        $email=Validate::email('frankjose00@gmail.com');
        $this->assertTrue($email);

        $email=Validate::email('frankjose00@@gmail.com');
        $this->assertFalse($email);
    }
    /**
     * Siguiendo el mismo principio
     * podemos validar URL's
     */
    public function test_url(){
        $url=Validate::url('https://github.com/C3SC0-V4113/Proyecto-Datos-PHP');
        $this->assertTrue($url);

        $url=Validate::url('frankjose00@@gmail.com');
        $this->assertFalse($url);
    }
    /**
     * Probando el mismo principio de
     * testing pero con un password
     * numerico con expresion
     * regular
     */
    public function test_password(){
        $password=Validate::password('123456');
        $this->assertTrue($password);

        $password=Validate::password('acdvfdcsxdfg');
        $this->assertFalse($password);
    }
}