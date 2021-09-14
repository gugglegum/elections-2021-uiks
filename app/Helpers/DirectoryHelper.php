<?php

namespace App\Helpers;

use app\GeoRegion;
use JetBrains\PhpStorm\Pure;

class DirectoryHelper
{
    private GeoRegion $geoRegion;

    public function __construct(GeoRegion $geoRegion)
    {
        $this->geoRegion = $geoRegion;
    }

    #[Pure] public function getTikListFilePath(): string
    {
        return PROJECT_ROOT_DIR . "/data/{$this->geoRegion->getCurrentRegion()}/tik-list.json";
    }

    #[Pure] public function getUikListFilePath(): string
    {
        return PROJECT_ROOT_DIR . "/data/{$this->geoRegion->getCurrentRegion()}/uik-list.json";
    }

    public function getUikDetailsFilePath(string $uikNumber): string
    {
        $uikNumber = str_replace(['/', '\\'], '-', $uikNumber);
        return PROJECT_ROOT_DIR . "/data/{$this->geoRegion->getCurrentRegion()}/uik-details-{$uikNumber}.json";
    }

    #[Pure] public function getKoibFilePath(int $number): string
    {
        return PROJECT_ROOT_DIR . "/data/{$this->geoRegion->getCurrentRegion()}/koib-{$number}.csv";
    }
}
