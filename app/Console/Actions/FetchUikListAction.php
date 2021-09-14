<?php

namespace App\Console\Actions;

use App\Helpers\StringHelper;
use App\UrlFetcher;

class FetchUikListAction extends AbstractAction
{
    /**
     * @return int
     * @throws \Throwable
     */
    public function __invoke(): int
    {
        $tikListFile = $this->resources->getDirectoryHelper()->getTikListFilePath();
        if (($tikListJson = file_get_contents($tikListFile)) === false) {
            throw new \Exception("Failed to read {$tikListFile}");
        }
        if (($tikList = json_decode($tikListJson, true)) === NULL) {
            throw new \Exception("Failed to decode JSON from {$tikListFile}");
        }

        $uikList = [];

        $tikCounter = 0;
        foreach ($tikList as $tik) {
            $tikCounter++;
            echo "\n{$tikCounter}. TIK \"{$tik['name']}\"\n";

            $uikListUrl = $this->getUikListUrl($tik['id']);
            echo "Fetching TIK page {$uikListUrl}\n";
            $response = UrlFetcher::fetch($uikListUrl, $statusCode);
            echo "Response {$statusCode}\n";
            if ($statusCode != 200) {
                throw new \Exception("Failed to fetch TIK page");
            }
            if (($uikJsonParsedList = json_decode(iconv('cp1251', 'utf-8', $response), true)) === NULL) {
                throw new \Exception("Failed to decode JSON from {$uikListUrl}");
            }

            foreach ($uikJsonParsedList as $uik) {
                $uikList[] = [
                    'id' => $uik['id'],
                    'number' => $this->getUikNumberFromName($uik['text']),
                    'name' => StringHelper::trimRedundantWhiteSpaces($uik['text']),
                    'tik' => [
                        'name' => StringHelper::trimRedundantWhiteSpaces($tik['name']),
                    ],
                ];
            }
        }

        $uikListFile = $this->resources->getDirectoryHelper()->getUikListFilePath();
        if (@file_put_contents($uikListFile, json_encode($uikList, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) === false) {
            throw new \Exception("Failed to save UIK list into {$uikListFile}");
        }
        echo "\nUIK list saved into {$uikListFile}\n";

        echo "\nWell done!\n";
        return 0;
    }

    /**
     * @param string $tikId
     * @return string
     */
    private function getUikListUrl(string $tikId): string
    {
        $subdomain = $this->resources->getGeoRegion()->getCurrentRegion();
        $regionId = $this->resources->getGeoRegion()->getCurrentRegionId();
        return 'http://www.' . rawurldecode($subdomain) . '.vybory.izbirkom.ru/region/' . rawurldecode($subdomain)
            . '?action=ikTree&region=' . urlencode($regionId)
            . '&vrn=' . urlencode($tikId) . '&onlyChildren=true';
    }

    /**
     * @param string $uikName
     * @return int
     * @throws \Exception
     */
    private function getUikNumberFromName(string $uikName): string
    {
        if (preg_match('/№\s*([\d\-\/]+)/ui', $uikName, $m)) {
            return $m[1];
        } else {
            throw new \Exception("Failed to parse UIK name \"{$uikName}\" to get UIK number");
        }
    }
}
