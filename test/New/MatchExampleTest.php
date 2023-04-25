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
use SchrodtSven\P8\New\MatchExample;

class MatchExampleTest extends TestCase
{

    private MatchExample $instance; 

    public function setUp(): void
    {
        $this->instance = new MatchExample();
    }

   



    /**
     * 
     * @dataProvider vendorMatcher
     */
    public function testVendorMatching(string $vendor, array $products)
    {
        $matcher = new MatchExample();
        for($i=0; $i < count($products); $i++) {
            $this->assertSame($products[$i], $matcher->getProductByVendorName($vendor)[$i]);
        }

    }

    public function vendorMatcher(): array
    {
        return [
                [MatchExample::APPLE, ['MacIntosh', 'II GS', 'IPod']],
                [MatchExample::NINTENDO, ['NES', 'SNES', 'Gameboy', 'wii']],
                [MatchExample::ATARI, ['600XL', '1040 STE', 'Falcon', 'Jaguar', 'Protfolio', 'ATW']]
        ];
              
    }

}