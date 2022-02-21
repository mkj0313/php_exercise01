<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

// ここに処理を記述
echo '私は、' . '<br>';
foreach ($foods as $key => $value) {
    echo $key . 'に' . $value . '<br>';
}
echo 'を食べます';
