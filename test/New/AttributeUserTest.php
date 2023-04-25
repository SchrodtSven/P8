<?php

declare(strict_types=1);
/**
 * Testing attributes
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8\New\AttributeUser;

class AttributeUserTest extends TestCase
{

    
    

    

    /**
     * @data   Provider getBits
     */
    public function testAttributes(): void
    {
        $usr = new AttributeUser();
        $usr->foo(4096);

        $this->assertInstanceOf(AttributeUser::class, $usr);


        $refl = new ReflectionObject($usr);
        $attribs = $refl->getAttributes();
        $this->assertSame($attribs[0]->getName(), 'SchrodtSven\P8\New\MyAttributeUser');
        $this->assertEmpty($attribs[0]->getArguments());
            
        $this->assertSame($attribs[1]->getName(), 'SchrodtSven\P8\New\SetUp');

        $this->assertSame($attribs[1]->getArguments()[0], 666);

        $this->assertSame($attribs[2]->getArguments()['secretName'], 'Cpt. Future II');
       
    }   


    
     

}