<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述
foreach ($subjects as $value) {
    switch ($value) {
        case '数学':
            $date = '明日';
            break;
        case '英語':
            $date = '明後日';
            break;
        case '理科':
            $date = '明々後日';
            break;
        case '社会':
            $date = '昨日';
            break;
        case '国語':
            $date = '中止';
            break;
    }
    echo "{$value}の試験は{$date}です。" . '<br>';
}
