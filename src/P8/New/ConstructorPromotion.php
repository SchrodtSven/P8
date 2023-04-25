<?php

declare(strict_types=1);
/**
 * Testing constructor promotion -> declaring properties in constructor signature
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */



namespace SchrodtSven\P8\New;


class ConstructorPromotion
{
    public function __construct(
            private int $id, 
            protected string $name, 
            public array $foo, 
            public readonly bool $rockSolid
    ) 
    {
        assert(\is_int($this->id));
        assert(\is_string($this->name));
        assert(\is_array($this->foo));
        assert(\is_bool($this->rockSolid));

    }
}