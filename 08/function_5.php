<?php

function get_date()
{
    // $date = date('Y年m月d日 H時i分s秒');
    $date = date('Y年m月d日');
    $week = array("日", "月", "火", "水", "木", "金", "土");
    $day = $week[date("w")];
    return '今日は、' . $date . $day . '曜日です';
}
// 変数を用意
$return = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $age = $_POST['age'];
    $return = get_date();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>関数の課題</title>
</head>

<body>
    <?php if (empty($return)) : ?>
        <h1>本日の日付、曜日を確認しますか？</h1>
        <form action="" method="POST">
            <div>
                <input type="submit" value="はい">
            </div>
        </form>
    <?php else : ?>
        <h1> <?= $return ?></h1>
        <a href="function_5.php">戻る</a>
    <?php endif; ?>

</body>

</html>