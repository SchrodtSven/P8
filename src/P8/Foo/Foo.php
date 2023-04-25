<?php

namespace SchrodtSven\P8\Foo;

class Foo
{
    public function __construct()
    {
        echo 'I am ' . $this::class;
    }
}