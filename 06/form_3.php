<?php

// 変数を用意
$age = '';
$err_msgs = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
    //validation
    if (empty($age)) {
        $err_msg = '年齢を入力してください。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの作成3</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li> <?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="POST">
        <div>
            <label for="age">年齢</label><br>
            <input type="number" id="age" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>


    <?php if (empty($err_msg) && !empty($age)) : ?>
        <p> <?= htmlspecialchars("私は{$age}歳です", ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

</body>

</html>