<?php

use PHPUnit\Framework\TestCase;

use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){
        $email=Validate::email('frankjose00@gmail.com');
        $this->assertTrue($email);
    }
}