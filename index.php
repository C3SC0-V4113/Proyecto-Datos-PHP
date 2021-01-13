<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('frankjose00@gmail.com'));

var_dump(App\Validate::url('https://platzi.com/clases/datos-php/'));