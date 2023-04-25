<?php

declare(strict_types=1);
/**
 * Testing named parameters
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */
namespace SchrodtSven\P8\New;

class NamedArguments
{
    private string $bitMask;

    public function __construct(private string $name, private int $id, private \DateTime $born)
    {
        $this->bitMask = sprintf('%08b', $id);
        
    }

    public function getBitMask(): string 
    {
        return $this->bitMask;
    }

}