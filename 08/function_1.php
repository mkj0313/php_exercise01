<?php

// '朝' or '昼' or '夜'を指定
$time_zone = '夜';

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];
    // コードを追記
    echo "{$time_zone}の挨拶は{$greetings[$time_zone]}";
}

// コードを追記
get_greeting($time_zone);
