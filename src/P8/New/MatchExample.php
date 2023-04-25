<?php

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
        };
    }

}