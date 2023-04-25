<?php

declare(strict_types=1);
/**
 * Unit testing constructor promotion
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8\New\ConstructorPromotion;

class ConstructorPromotionTest extends TestCase
{

    private ConstructorPromotion $instance; 

    public function setUp(): void
    {
        $this->instance = new ConstructorPromotion(
            23,
            'Mr. X',
            [23, 44],
            false

        );
       
    }
    public function testVisibilty()
    {
        $refl = new \ReflectionClass(ConstructorPromotion::class);        
        //var_dump($refl->getProperties());die;
        foreach($refl->getProperties() as $prop)
        {
            switch($prop->getName()) {
                case 'id': 
                    $this->assertTrue($prop->isPrivate());
                    break;
                case 'name':
                    $this->assertTrue($prop->isProtected());
                    break;
                case 'foo':
                    $this->assertTrue($prop->isPublic());
                    break;
                case 'rockSolid':
                    $this->assertTrue($prop->isPublic());
                    $this->assertTrue($prop->isReadOnly());
                    break;
            }
        };
    }

    public function testAccessibilityPublic()
    {
        $foo = new ConstructorPromotion(
            23,
            'Mr. X',
            [23, 44],
            false

        );
        $this->assertTrue(is_array($this->instance->foo));
        $this->assertTrue(count($this->instance->foo) === 2);
        $this->instance->foo[] = 'mooh!';
        $this->assertTrue(count($this->instance->foo) === 3);
        $this->assertFalse($this->instance->rockSolid);
       

    }

    public function testAccessibilityPrivate()
    {
        $this->expectException('Error');
        $this->instance->id = true;
    }


    public function testAccessibilityProtected()
    {
        $this->expectException('Error');
        $this->instance->name = 'Goo';
       

    }

}