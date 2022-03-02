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
$total = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    //validation
    if (empty($num1) || empty($num2) || empty($num3)) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $total = h($num1) + h($num2) + h($num3);
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
            <label for="n1">1つめの数字</label><br>
            <input type="number" id="n1" name="num1">
        </div>
        <div>
            <label for="n2">2つめの数字</label><br>
            <input type="number" id="n2" name="num2">
        </div>
        <div>
            <label for="n3">3つめの数字</label><br>
            <input type="number" id="n3" name="num3">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <?php if (empty($err_msg) && !empty($total)) : ?>
        <p> <?= '合計値は' . $total . 'です' ?></p>
    <?php endif; ?>

</body>

</html>