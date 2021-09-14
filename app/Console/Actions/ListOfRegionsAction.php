<?php

namespace App\Console\Actions;

use App\UrlFetcher;

class ListOfRegionsAction extends AbstractAction
{
    /**
     * @return int
     * @throws \Throwable
     */
    public function __invoke(): int
    {
        foreach ($this->resources->getGeoRegion()->getAllRegions() as $region) {
            echo "Region \"{$region}\"\n";
//            echo "php console.php fetch-tik-list \"{$region}\"\n";
//            echo "php console.php fetch-uik-list \"{$region}\"\n";
//            echo "php console.php fetch-uik-details \"{$region}\"\n";
//            echo "php console.php make-uiks-table \"{$region}\"\n";
            continue;
            $url = "http://www.{$region}.vybory.izbirkom.ru/region/{$region}?action=ik";
//            echo "\t{$url}\n";
            $response = UrlFetcher::fetch($url, $statusCode);
//            echo "Response {$statusCode}\n";
            if ($statusCode != 200) {
                throw new \Exception("Failed to fetch URL {$url}");
            }
            if (preg_match('/baseUrl \+ "\?action=ikTree&region=" \+ "(\d{2})" \+ "&vrn=" \+ "(\d+)" :/', $response, $m)) {
                echo "\t" . $m[1] . "\n";
                echo "\t" . $m[2] . "\n";
            } else {
                echo "\tNot matched\n";
            }
        }
        return 0;
    }
}
