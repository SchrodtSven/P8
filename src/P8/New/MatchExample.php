<?php

declare(strict_types=1);
/**
 * Testing the new match expresion
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

namespace SchrodtSven\P8\New;

class MatchExample
{
    
    public const NINTENDO = 'Nintendo';

    public const APPLE = 'Apple';

    public const ATARI = 'Atari';

    public const NOT_AVAILABLE = 'n/a'; 


    public function getProductByVendorName(string $vendor)
    {
        return match($vendor) {
                self::APPLE => ['MacIntosh', 'II GS', 'IPod'],
                self::NINTENDO => ['NES', 'SNES', 'Gameboy', 'wii'],
                self::ATARI => ['600XL', '1040 STE', 'Falcon', 'Jaguar', 'Protfolio', 'ATW'],
                default => [self::NOT_AVAILABLE]
        };
    }

}