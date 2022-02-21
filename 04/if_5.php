<?php

$num = 10;

// ここに処理を記述
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo "{$num}は素数ではありません。";
        exit;
    }
};
echo "{$num}は素数です。";
