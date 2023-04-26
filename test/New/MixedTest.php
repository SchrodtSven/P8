<?php

declare(strict_types=1);
/**
 * Testing mixed new features of PHP 8.0.X 
 * 
 * - null safe operator
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8\Internal\GenericDataProvider;
use SchrodtSven\P8\Internal\ListClass;
use SchrodtSven\P8\Internal\StringClass;
use SchrodtSven\P8\Internal\Repository;


class MixedTest extends TestCase
{
    /**
     * @dataProvider nullValueForSloganProvider
     */
    public function testNullSafeOperator(int $id)
    {
            $pers =  (new Repository())->getById($id);
            $this->assertNull($pers?->slogan);    
            $this->assertTrue(! is_null($pers?->firstName));    
            $this->assertTrue(! is_null($pers?->lastName));    
    } 


    public function nullValueForSloganProvider(): array
    {
        return [
                    [33], [99], [112], [996], [24]
        ];
    }
}