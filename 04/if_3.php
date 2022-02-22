<?php

$score = 10;

// ここに処理を記述
if ($score >= 60) {
    echo '合格です';
} elseif ($score >= 30 && $score < 60) {
    echo '追試です';
} else {
    echo '不合格です';
};
