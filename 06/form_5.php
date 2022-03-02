<?php


// エスケープ処理を行う関数
function h($str)
{
    // ENT_QUOTES: シングルクオートとダブルクオートを共に変換する。
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


// 変数を用意
$num1 = '';
$num2 = '';
$num3 = '';
$err_msgs = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    //validation
    if (empty($num1) || empty($num2) || empty($num3)) {
        $err_msg = '全てに数字を入力してください';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの作成5</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li> <?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="POST">
        <div>
            <label for="">1つめの数字</label><br>
            <input type="number" name="num1">
        </div>
        <div>
            <label for="">2つめの数字</label><br>
            <input type="number" name="num2">
        </div>
        <div>
            <label for="">3つめの数字</label><br>
            <input type="number" name="num3">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <?php if (empty($err_msg) && !empty($num1)) : ?>
        <p> <?= '合計値は' . h($num1) + h($num2) + h($num3) . 'です' ?></p>
    <?php endif; ?>

</body>

</html>