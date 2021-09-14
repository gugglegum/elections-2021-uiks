<?php

declare(strict_types = 1);

namespace App\Console\Actions;

use App\Helpers\StringHelper;
use App\Parsers\TikListParser;
use App\UrlFetcher;

class FetchTikListAction extends AbstractAction
{
    /**
     * @return int
     * @throws \Exception
     */
    public function __invoke(): int
    {
        $tikListUrl = $this->getTikListUrl();
        echo "Fetching TIK list {$tikListUrl}\n";
        $response = UrlFetcher::fetch($tikListUrl, $statusCode);
        echo "Response {$statusCode}\n";
        if ($statusCode != 200) {
            throw new \Exception("Failed to fetch TIK list");
        }
        if (($tikJsonParsedList = json_decode(iconv('cp1251', 'utf-8', $response), true)) === NULL) {
            throw new \Exception("Failed to decode JSON from {$tikListUrl}");
        }

        $tikList = [];
        foreach ($tikJsonParsedList[0]['children'] as $tik) {
            $tikList[] = [
                'id' => $tik['id'],
                'name' => StringHelper::trimRedundantWhiteSpaces($tik['text']),
            ];
        }

        $tikListFile = $this->resources->getDirectoryHelper()->getTikListFilePath();
        if (!is_dir(dirname($tikListFile))) {
            mkdir(dirname($tikListFile));
        }
        if (@file_put_contents($tikListFile, json_encode($tikList, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) === false) {
            throw new \Exception("Failed to save TIK list into {$tikListFile}");
        }
        echo "\nTIK list saved into {$tikListFile}\n";
        echo "\nWell done!\n";
        return 0;
    }

    private function getTikListUrl(): string
    {
        $subdomain = $this->resources->getGeoRegion()->getCurrentRegion();
        $regionId = $this->resources->getGeoRegion()->getCurrentRegionId();
        $regionIkId = $this->resources->getGeoRegion()->getCurrentRegionIkId();
        return 'http://www.' . rawurldecode($subdomain) . '.vybory.izbirkom.ru/region/' . rawurldecode($subdomain)
            . '?action=ikTree&region=' . urlencode($regionId)
            . '&vrn=' . urlencode($regionIkId);
    }
}
