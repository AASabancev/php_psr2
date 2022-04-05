<?php

require_once 'classes/MyClass.php';

if (1 == 1) {
    echo PHP_EOL . 'hi';
}

$myClass = new MyClass();
echo PHP_EOL . $myClass->showSomething();
