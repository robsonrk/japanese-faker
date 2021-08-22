<?php

namespace Robsonrk\JapaneseFaker;

class CompanyNames
{
    public static function getRandomName()
    {
        $namesCount = count(self::$personNames);
        return self::getNames()[rand(0, $namesCount - 1)];
    }

    private static function getNames()
    {
        $names = [];
        foreach (self::$personNames as $name) {
            $industry = self::$industry[rand(0, count(self::$industry) - 1)];
            $prefix = self::$companyPrefix[rand(0, count(self::$companyPrefix) - 1)];
            $current = [
                'kanji' => $prefix['kanji'] . $name['kanji'] . $industry['kanji'],
                'rome' => $name['rome'] . ' ' . $industry['rome'] . ' ' . $prefix['rome']
            ];
            $names[] = $current;
        }
        return $names;
    }

    private static $companyPrefix = [
        [
            'kanji' => '株式会社',
            'rome' => 'K.K.'
        ]
    ];

    private static $personNames = [
        ['kanji' => '青田', 'rome' => 'aota'],
        ['kanji' => '青山', 'rome' => 'aoyama'],
        ['kanji' => '石田', 'rome' => 'ishida'],
        ['kanji' => '井高', 'rome' => 'idaka'],
        ['kanji' => '伊藤', 'rome' => 'ito'],
        ['kanji' => '井上', 'rome' => 'inoue'],
        ['kanji' => '加藤', 'rome' => 'katou'],
        ['kanji' => '木村', 'rome' => 'kimura'],
        ['kanji' => '小泉', 'rome' => 'koizumi'],
        ['kanji' => '小林', 'rome' => 'kobayashi'],
        ['kanji' => '近藤', 'rome' => 'kondo'],
        ['kanji' => '斉藤', 'rome' => 'saito'],
        ['kanji' => '坂本', 'rome' => 'sakamoto'],
        ['kanji' => '佐々木', 'rome' => 'sasaki'],
        ['kanji' => '佐藤', 'rome' => 'Sato'],
        ['kanji' => '鈴木', 'rome' => 'Suzuki'],
        ['kanji' => '杉山', 'rome' => 'Sugiyama'],
        ['kanji' => '高橋', 'rome' => 'Takahashi'],
        ['kanji' => '田中', 'rome' => 'tanaka'],
        ['kanji' => '中島', 'rome' => 'nakajima'],
        ['kanji' => '中村', 'rome' => 'nakamura'],
        ['kanji' => '野村', 'rome' => 'nomura'],
        ['kanji' => '原田', 'rome' => 'harada'],
        ['kanji' => '浜田', 'rome' => 'matsuda'],
        ['kanji' => '藤本', 'rome' => 'fujimoto'],
        ['kanji' => '松本', 'rome' => 'matsumoto'],
        ['kanji' => '村山', 'rome' => 'murayama'],
        ['kanji' => '山口', 'rome' => 'yamaguchi'],
        ['kanji' => '山田', 'rome' => 'yamada'],
        ['kanji' => '山本', 'rome' => 'yamamoto'],
        ['kanji' => '吉田', 'rome' => 'yoshida'],
        ['kanji' => '渡辺', 'rome' => 'watanabe'],
    ];

    private static $industry = [
        [
            'kanji' => '飲料',
            'rome' => 'inryou'
        ],
        [
            'kanji' => '銀行',
            'rome' => 'ginkou'
        ],
        [
            'kanji' => '木材',
            'rome' => 'mokuzai'
        ],
        [
            'kanji' => '家具',
            'rome' => 'kagu'
        ],
        [
            'kanji' => '印刷',
            'rome' => 'insatsu'
        ],
        [
            'kanji' => '保険',
            'rome' => 'hoken'
        ],
        [
            'kanji' => '不動産',
            'rome' => 'fudousan'
        ],
        [
            'kanji' => 'プラスチック',
            'rome' => 'plastic'
        ]
    ];


}
