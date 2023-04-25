<?php

declare(strict_types=1);
/**
 * Testing named arguments
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8\New\NamedArguments;

class NamedArgumentsTest extends TestCase
{

    
    

    public function testConstruction(): void
    {
        $list = [];
        foreach(range(0, 255) as $number) {
            $instance = new NamedArguments(id: $number, born: new \DateTime(), name: chr($number) );
            array_push($list, $instance);
            $this->assertInstanceOf(NamedArguments::class, $instance);
        }
    }

    /**
     * @dataProvider getBits
     */
    public function testValues(int $number, string $bitMask): void
    {
        $i = new NamedArguments(id: $number, born: new \DateTime, name: (string) $number);
        $this->assertSame($bitMask, $i->getBitMask());
    }   


    public function getBits(): array
    {
        return [
            [255, '11111111'],
            [128, '10000000'],
            [  3, '00000011'],
            [130, '10000010'],
            [ 65, '01000001'],
        ];
    }

     

}