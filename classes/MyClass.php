<?php

class MyClass
{
    const TYPE = 'User';

    public $userName = "Igor";

    public function showSomething()
    {
        return self::TYPE . ': ' . $this->userName;
    }
}

