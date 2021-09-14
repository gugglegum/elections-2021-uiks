<?php

declare(strict_types=1);

namespace App\Parsers;

use App\Helpers\StringHelper;
use DOMDocument;
use DOMXPath;
use Exception;

class UikPageParser
{
    /**
     * @param string $response
     * @return array
     * @throws Exception
     */
    public static function parse(string $response): array
    {
        $response = trim($response);
        $response = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" . $response;
        $dom = new DOMDocument();
        $uikPageDetails = [];
        if (@$dom->loadHTML($response)) {
            $xpath = new DOMXPath($dom);
            $result = $xpath->query("//div[@id='main']//div[@class='center-colm']/p", $dom);
            foreach ($result as $element) {
                $str = trim($element->textContent);
                if (preg_match('/^Адрес помещения для голосования:\s*(.*)$/u', $str, $m)) {
                    $uikPageDetails['address'] = StringHelper::trimRedundantWhiteSpaces($m[1]);
                    continue;
                }
                if (preg_match('/^Телефон помещения для голосования:\s*(.*)$/u', $str, $m)) {
                    $uikPageDetails['phone'] = StringHelper::trimRedundantWhiteSpaces($m[1]);
                    continue;
                }
//                var_dump($element->textContent);
//                var_dump($element);
            }
        } else {
            throw new Exception("Failed to parse HTML");
        }
        return $uikPageDetails;
    }

}
