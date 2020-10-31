<?php

namespace Robsonrk\JapaneseFaker;

use Exception;

class JapaneseFaker
{
    private const AVAILABLE_TYPES = ['kanji', 'kana', 'rome'];
    public function __construct()
    {
        $this->setName();
    }

    public function setName()
    {
        $this->first_name = $this->first_names[rand(0, count($this->first_names) - 1)];
        $this->last_name = $this->last_names[rand(0, count($this->last_names) - 1)];
    }

    private $first_name;
    private $last_name;

    private $first_names = [
        [
            'kanji'=>'太郎',
            'kana'=>'タロウ',
            'rome'=>'Taro',
        ],
        [
            'kanji'=>'次郎',
            'kana'=>'ジロウ',
            'rome'=>'Jiro',
        ],
        [
            'kanji'=>'健二',
            'kana'=>'ケンジ',
            'rome'=>'Kenji',
        ],
        [
            'kanji'=>'花子',
            'kana'=>'ハナコ',
            'rome'=>'Hanako',
        ],
        [
            'kanji'=>'沙織',
            'kana'=>'サオリ',
            'rome'=>'Saori',
        ],
    ];

    private $last_names = [
        [
            'kanji'=>'田中',
            'kana'=>'タナカ',
            'rome'=>'Tanaka',
        ],
        [
            'kanji'=>'山田',
            'kana'=>'ヤマダ',
            'rome'=>'Yamada',
        ],
        [
            'kanji'=>'天野',
            'kana'=>'アマノ',
            'rome'=>'Amano',
        ],
        [
            'kanji'=>'鈴木',
            'kana'=>'スズキ',
            'rome'=>'Suzuki',
        ],
    ];

    public function name(string $type)
    {
        $this->restrictType($type);
        
        $first = $this->first_name['type'];
        $last = $this->last_name['type'];
        return "$first $last";
    }

    public function restrictType(string $type)
    {
        if (!$this->isAvailableType($type)) {
            throw new Exception("Type is not available", 1);
        }
    }

    public function isAvailableType(string $type)
    {
        return (!in_array($type, self::AVAILABLE_TYPES));
    }
}
