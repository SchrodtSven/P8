<?php

declare(strict_types=1);
/**
 * Entity class for person
 * 
 * Providing possibility of accessing objects as arrays
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-26
 */


namespace SchrodtSven\P8\Internal;

class Person
{
    // just for quick & dirty testing, so we use public visibility for properties - foo!
    public int $id; 

    public string $firstName;

    public string $lastName;

    public ?string $slogan = null;

    public ?\DateTime $doB = null;


}