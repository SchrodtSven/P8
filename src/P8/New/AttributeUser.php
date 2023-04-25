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

#[MyAttributeUser]
#[SetUp(666)]
#[Alias(secretName: 'Cpt. Future II')]
class AttributeUser
{
    private int $secretNumber;

    #[setId(16384)]
    public function foo(int $id)
    {
        $this->secretNumber = $id;
    }
    
}