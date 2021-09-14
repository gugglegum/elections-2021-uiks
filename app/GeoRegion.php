<?php

namespace app;

class GeoRegion
{
    const REGIONS = [
        'adygei' => [ // http://www.adygei.izbirkom.ru
            'name' => 'Республика Адыгея (Адыгея)',
            'regionId' => '01',
            'regionIkId' => '2012000350926',
        ],

        'altai-rep' => [ // http://www.altai-rep.izbirkom.ru
            'name' => 'Республика Алтай',
            'regionId' => '02',
            'regionIkId' => '2042000341999',
        ],

        'bashkortostan' => [ // http://www.bashkortostan.izbirkom.ru/region/bashkortostan/?action=ik
            'name' => 'Республика Башкортостан',
            'regionId' => '03',
            'regionIkId' => '20220001867323',
        ],

        'buriat' => [ // http://www.buriat.izbirkom.ru/region/bashkortostan/?action=ik
            'name' => 'Республика Бурятия',
            'regionId' => '04',
            'regionIkId' => '2032000734140',
        ],

        'dagestan' => [ // http://www.dagestan.izbirkom.ru
            'name' => 'Республика Дагестан',
            'regionId' => '05',
            'regionIkId' => '20520001019161',
        ],
        'ingush' => [ //http://www.ingush.izbirkom.ru
            'name' => 'Республика Ингушетия',
            'regionId' => '06',
            'regionIkId' => '2062000307229',
        ],

        'kabardin-balkar' => [ // http://www.kabardin-balkar.izbirkom.ru
            'name' => 'Кабардино-Балкарская Республика',
            'regionId' => '07',
            'regionIkId' => '2072000370951',
        ],

        'kalmyk' => [ // http://www.kalmyk.izbirkom.ru
            'name' => 'Республика Калмыкия',
            'regionId' => '08',
            'regionIkId' => '2082000454096',
        ],

        'karachaev-cherkess' => [ // http://www.karachaev-cherkess.izbirkom.ru
            'name' => 'Карачаево-Черкесская Республика',
            'regionId' => '09',
            'regionIkId' => '2092000413824',
        ],

        'karel' => [ // http://www.karel.izbirkom.ru
            'name' => 'Республика Карелия',
            'regionId' => '10',
            'regionIkId' => '2102000594824',
        ],

        'komi' => [ // http://www.komi.izbirkom.ru
            'name' => 'Республика Коми',
            'regionId' => '11',
            'regionIkId' => '2112000929469',
        ],

        'crimea' => [ // http://www.crimea.izbirkom.ru
            'name' => 'Республика Крым',
            'regionId' => '93',
            'regionIkId' => '2932000415996',
        ],

        'mari-el' => [ // http://www.mari-el.izbirkom.ru
            'name' => 'Республика Марий Эл',
            'regionId' => '12',
            'regionIkId' => '2122000679039',
        ],

        'mordov' => [ // http://www.mordov.izbirkom.ru
            'name' => 'Республика Мордовия',
            'regionId' => '13',
            'regionIkId' => '2132000838032',
        ],

        'yakut' => [ // http://www.yakut.izbirkom.ru
            'name' => 'Республика Саха (Якутия)',
            'regionId' => '14',
            'regionIkId' => '2142000737286',
        ],
        'n-osset-alania' => [ // http://www.n-osset-alania.izbirkom.ru
            'name' => 'Республика Северная Осетия - Алания',
            'regionId' => '15',
            'regionIkId' => '2152000459799',
        ],

        'tatarstan' => [ // http://www.tatarstan.izbirkom.ru
            'name' => 'Республика Татарстан (Татарстан)',
            'regionId' => '16',
            'regionIkId' => '21620001856022',
        ],

        'tyva' => [ // http://www.tyva.izbirkom.ru
            'name' => 'Республика Тыва',
            'regionId' => '17',
            'regionIkId' => '2172000499752',
        ],

        'udmurt' => [ // http://www.udmurt.izbirkom.ru
            'name' => 'Удмуртская Республика',
            'regionId' => '18',
            'regionIkId' => '2182000976400',
        ],

        'khakas' => [ // http://www.khakas.izbirkom.ru
            'name' => 'Республика Хакасия',
            'regionId' => '19',
            'regionIkId' => '2192000489101',
        ],

        'chechen' => [ // http://www.chechen.izbirkom.ru
            'name' => 'Чеченская Республика',
            'regionId' => '20',
            'regionIkId' => '2202000624962',
        ],

        'chuvash' => [ // http://www.chuvash.izbirkom.ru
            'name' => 'Чувашская Республика - Чувашия',
            'regionId' => '21',
            'regionIkId' => '22120001255550',
        ],

        'altai-terr' => [ // http://www.altai-terr.izbirkom.ru
            'name' => 'Алтайский край',
            'regionId' => '22',
            'regionIkId' => '22220001489410',
        ],

        'zabkray' => [ // http://www.zabkray.izbirkom.ru
            'name' => 'Забайкальский край',
            'regionId' => '92',
            'regionIkId' => '27520001116369',
        ],

        'kamchatka-krai' => [ // http://www.kamchatka-krai.izbirkom.ru
            'name' => 'Камчатский край',
            'regionId' => '91',
            'regionIkId' => '2412000439845',
        ],

        'krasnodar' => [ // http://www.krasnodar.izbirkom.ru
            'name' => 'Краснодарский край',
            'regionId' => '23',
            'regionIkId' => '22320001989385',
        ],

        'krasnoyarsk' => [ // http://www.krasnoyarsk.izbirkom.ru
            'name' => 'Красноярский край',
            'regionId' => '24',
            'regionIkId' => '22420001475616',
        ],

        'permkrai' => [ // http://www.permkrai.izbirkom.ru
            'name' => 'Пермский край',
            'regionId' => '90',
            'regionIkId' => '25920001563079',
        ],
        'primorsk' => [ // http://www.primorsk.izbirkom.ru
            'name' => 'Приморский край',
            'regionId' => '25',
            'regionIkId' => '22520001238467',
        ],

        'stavropol' => [ // http://www.stavropol.izbirkom.ru
            'name' => 'Ставропольский край',
            'regionId' => '26',
            'regionIkId' => '2262000923958',
        ],

        'khabarovsk' => [ // http://www.khabarovsk.izbirkom.ru
            'name' => 'Хабаровский край',
            'regionId' => '27',
            'regionIkId' => '22720001105609',
        ],

        'amur' => [ // http://www.amur.izbirkom.ru
            'name' => 'Амурская область',
            'regionId' => '28',
            'regionIkId' => '2282000901314',
        ],

        'arkhangelsk' => [ // http://www.arkhangelsk.izbirkom.ru
            'name' => 'Архангельская область',
            'regionId' => '29',
            'regionIkId' => '2292000875589',
        ],

        'astrakhan' => [ // http://www.astrakhan.izbirkom.ru
            'name' => 'Астраханская область',
            'regionId' => '30',
            'regionIkId' => '2302000945658',
        ],
        'belgorod' => [ // http://www.belgorod.izbirkom.ru
            'name' => 'Белгородская область',
            'regionId' => '31',
            'regionIkId' => '2312000614859',
        ],

        'bryansk' => [ // http://www.bryansk.izbirkom.ru
            'name' => 'Брянская область',
            'regionId' => '32',
            'regionIkId' => '23220001021972',
        ],

        'vladimir' => [ // http://www.vladimir.izbirkom.ru
            'name' => 'Владимирская область',
            'regionId' => '33',
            'regionIkId' => '2332000871582',
        ],

        'volgograd' => [ // http://www.volgograd.izbirkom.ru
            'name' => 'Волгоградская область',
            'regionId' => '34',
            'regionIkId' => '23420001237273',
        ],

        'vologod' => [ // http://www.vologod.izbirkom.ru
            'name' => 'Вологодская область',
            'regionId' => '35',
            'regionIkId' => '23520001039312',
        ],

        'voronezh' => [ // http://www.voronezh.izbirkom.ru
            'name' => 'Воронежская область',
            'regionId' => '36',
            'regionIkId' => '23620001624671',
        ],

        'ivanovo' => [ // http://www.ivanovo.izbirkom.ru
            'name' => 'Ивановская область',
            'regionId' => '37',
            'regionIkId' => '23720001223440',
        ],

        'irkutsk' => [ // http://www.irkutsk.izbirkom.ru
            'name' => 'Иркутская область',
            'regionId' => '38',
            'regionIkId' => '23820001797867',
        ],

        'kaliningrad' => [ // http://www.kaliningrad.izbirkom.ru
            'name' => 'Калининградская область',
            'regionId' => '39',
            'regionIkId' => '2392000942718',
        ],

        'kaluga' => [ // http://www.kaluga.izbirkom.ru
            'name' => 'Калужская область',
            'regionId' => '40',
            'regionIkId' => '2402000704369',
        ],

        'kemerovo' => [ // http://www.kemerovo.izbirkom.ru
            'name' => 'Кемеровская область - Кузбасс',
            'regionId' => '42',
            'regionIkId' => '24220001076058',
        ],

        'kirov' => [ // http://www.kirov.izbirkom.ru
            'name' => 'Кировская область',
            'regionId' => '43',
            'regionIkId' => '24320001034150',
        ],
        'kostroma' => [ // http://www.kostroma.izbirkom.ru
            'name' => 'Костромская область',
            'regionId' => '44',
            'regionIkId' => '2442000795739',
        ],

        'kurgan' => [ // http://www.kurgan.izbirkom.ru
            'name' => 'Курганская область',
            'regionId' => '45',
            'regionIkId' => '2452000865793',
        ],

        'kursk' => [ // http://www.kursk.izbirkom.ru
            'name' => 'Курская область',
            'regionId' => '46',
            'regionIkId' => '2462000896643',
        ],

        'leningrad-reg' => [ // http://www.leningrad-reg.izbirkom.ru
            'name' => 'Ленинградская область',
            'regionId' => '47',
            'regionIkId' => '2472000871965',
        ],

        'lipetsk' => [ // http://www.lipetsk.izbirkom.ru
            'name' => 'Липецкая область',
            'regionId' => '48',
            'regionIkId' => '2482000645320',
        ],

        'magadan' => [ // http://www.magadan.izbirkom.ru
            'name' => 'Магаданская область',
            'regionId' => '49',
            'regionIkId' => '2492000278242',
        ],

        'moscow-reg' => [ // http://www.moscow-reg.izbirkom.ru
            'name' => 'Московская область',
            'regionId' => '50',
            'regionIkId' => '25020002358847',
        ],

        'murmansk' => [ // http://www.murmansk.izbirkom.ru
            'name' => 'Мурманская область',
            'regionId' => '51',
            'regionIkId' => '2512000478077',
        ],

        'nnov' => [ // http://www.nnov.izbirkom.ru
            'name' => 'Нижегородская область',
            'regionId' => '52',
            'regionIkId' => '25220001509813',
        ],

        'novgorod' => [ // http://www.novgorod.izbirkom.ru
            'name' => 'Новгородская область',
            'regionId' => '53',
            'regionIkId' => '2532000582165',
        ],

        'novosibirsk' => [ // http://www.novosibirsk.izbirkom.ru
            'name' => 'Новосибирская область',
            'regionId' => '54',
            'regionIkId' => '25420001732156',
        ],

        'omsk' => [ // http://www.omsk.izbirkom.ru
            'name' => 'Омская область',
            'regionId' => '55',
            'regionIkId' => '25520001088111',
        ],

        'orenburg' => [ // http://www.orenburg.izbirkom.ru
            'name' => 'Оренбургская область',
            'regionId' => '56',
            'regionIkId' => '25620001584592',
        ],

        'orel' => [ // http://www.orel.izbirkom.ru
            'name' => 'Орловская область',
            'regionId' => '57',
            'regionIkId' => '2572000942661',
        ],

        'penza' => [ // http://www.penza.izbirkom.ru
            'name' => 'Пензенская область',
            'regionId' => '58',
            'regionIkId' => '2582000763057',
        ],

        'pskov' => [ // http://www.pskov.izbirkom.ru
            'name' => 'Псковская область',
            'regionId' => '60',
            'regionIkId' => '2602000660108',
        ],

        'rostov' => [ // http://www.rostov.izbirkom.ru
            'name' => 'Ростовская область',
            'regionId' => '61',
            'regionIkId' => '26120001691955',
        ],
        'ryazan' => [ // http://www.ryazan.izbirkom.ru
            'name' => 'Рязанская область',
            'regionId' => '62',
            'regionIkId' => '2622000717861',
        ],

        'samara' => [ // http://www.samara.izbirkom.ru
            'name' => 'Самарская область',
            'regionId' => '63',
            'regionIkId' => '26320001256813',
        ],

        'saratov' => [ // http://www.saratov.izbirkom.ru
            'name' => 'Саратовская область',
            'regionId' => '64',
            'regionIkId' => '26420001398749',
        ],

        'sakhalin' => [ // http://www.sakhalin.izbirkom.ru
            'name' => 'Сахалинская область',
            'regionId' => '65',
            'regionIkId' => '2652000401718',
        ],

//        'sverdlovsk' => [ // http://www.sverdlovsk.izbirkom.ru
//            'name' => 'Свердловская область',
//            'regionId' => 66,
//            'regionIkId' => 0,
//        ],

        'smolensk' => [ // http://www.smolensk.izbirkom.ru
            'name' => 'Смоленская область',
            'regionId' => '67',
            'regionIkId' => '2672000906093',
        ],

        'tambov' => [ // http://www.tambov.izbirkom.ru
            'name' => 'Тамбовская область',
            'regionId' => '68',
            'regionIkId' => '2682000836360',
        ],

        'tver' => [ // http://www.tver.izbirkom.ru
            'name' => 'Тверская область',
            'regionId' => '69',
            'regionIkId' => '26920001664631',
        ],

        'tomsk' => [ // http://www.tomsk.izbirkom.ru
            'name' => 'Томская область',
            'regionId' => '70',
            'regionIkId' => '2702000711313',
        ],

        'tula' => [ // http://www.tula.izbirkom.ru
            'name' => 'Тульская область',
            'regionId' => '71',
            'regionIkId' => '2712000942341',
        ],

        'tyumen' => [ // http://www.tyumen.izbirkom.ru
            'name' => 'Тюменская область',
            'regionId' => '72',
            'regionIkId' => '27220001150137',
        ],

        'ulyanovsk' => [ // http://www.ulyanovsk.izbirkom.ru
            'name' => 'Ульяновская область',
            'regionId' => '73',
            'regionIkId' => '2732000998046',
        ],

        'chelyabinsk' => [ // http://www.chelyabinsk.izbirkom.ru
            'name' => 'Челябинская область',
            'regionId' => '74',
            'regionIkId' => '27420001286724',
        ],

        'yaroslavl' => [ // http://www.yaroslavl.izbirkom.ru
            'name' => 'Ярославская область',
            'regionId' => '76',
            'regionIkId' => '2762000563175',
        ],

        'moscow-city' => [ // http://www.moscow-city.izbirkom.ru
            'name' => 'город Москва',
            'regionId' => '77',
            'regionIkId' => '27720001936334',
        ],
        'st-petersburg' => [ // http://www.st-petersburg.izbirkom.ru
            'name' => 'город Санкт-Петербург',
            'regionId' => '78',
            'regionIkId' => '27820001006425',
        ],

        'sevastopol' => [ // http://www.sevastopol.izbirkom.ru
            'name' => 'город Севастополь',
            'regionId' => '94',
            'regionIkId' => '2942000193589',
        ],
        'jewish-aut' => [ // http://www.jewish-aut.izbirkom.ru
            'name' => 'Еврейская автономная область',
            'regionId' => '79',
            'regionIkId' => '2792000337429',
        ],

        'nenetsk' => [ // http://www.nenetsk.izbirkom.ru
            'name' => 'Ненецкий автономный округ',
            'regionId' => '83',
            'regionIkId' => '2832000243941',
        ],

        'khantu-mansy' => [ // http://www.hmao.izbirkom.ru
            'name' => 'Ханты-Мансийский автономный округ',
            'regionId' => '86',
            'regionIkId' => '2862000674840',
        ],

        'chukot' => [ // http://www.chukot.izbirkom.ru
            'name' => 'Чукотский автономный округ',
            'regionId' => '87',
            'regionIkId' => '2872000274377',
        ],

        'yamal-nenetsk' => [ // http://www.yamal-nenetsk.izbirkom.ru
            'name' => 'Ямало-Ненецкий автономный округ',
            'regionId' => '89',
            'regionIkId' => '2882000764067',
        ],

        'sirius' => [ // http://sirius.izbirkom.ru
            'name' => 'Федеральная территория "Сириус"',
            'regionId' => '97',
            'regionIkId' => '100100224200084',
        ],
    ];

    private string $currentRegion;

    /**
     * @return string
     */
    public function getCurrentRegion(): string
    {
        return $this->currentRegion;
    }

    /**
     * @param string $region
     * @throws \Exception
     */
    public function setCurrentRegion(string $region): void
    {
        if (!$this->isValidRegion($region)) {
            throw new \Exception("Invalid region \"{$region}\"");
        }
        $this->currentRegion = $region;
    }

    public function isValidRegion(string $region): bool
    {
        return array_key_exists($region, self::REGIONS);
    }

    public function getCurrentRegionId(): string
    {
        return $this->getRegionId($this->getCurrentRegion());
    }

    public function getCurrentRegionIkId(): string
    {
        return $this->getRegionIkId($this->getCurrentRegion());
    }

    public function getRegionId(string $region): string
    {
        return self::REGIONS[$region]['regionId'];
    }

    public function getRegionIkId(string $region): string
    {
        return self::REGIONS[$region]['regionIkId'];
    }

    public function getAllRegions(): array
    {
        return array_keys(self::REGIONS);
    }
}
