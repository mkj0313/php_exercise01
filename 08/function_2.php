<?php

function calc_cal($total_meals)
{
    // コードを追記
    // 標準関数を使用して、配列の値を合算
    $cal = 0;
    foreach ($total_meals as $key => $value) {
        $cal += $value;
    }
    return "摂取カロリー合計は{$cal}Kcalです";
}

$yesterday_meal = [
    '食パン' => 300,
    'ステーキ' => 1200,
    'うどん' => 500
];

$today_meal = [
    'シリアル' => 200,
    'とんかつ' => 1000,
    'パスタ' => 400
];

// コードを追記
// 標準関数を使用して、配列を結合($yesterday_mealと$today_meal)
foreach ($yesterday_meal as $key => $value) {
    $total_meals[$key] = $value;
}
foreach ($today_meal as $key => $value) {
    $total_meals[$key] = $value;
}

echo calc_cal($total_meals);
