<?php

// 変数を用意
$age = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの作成</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="number" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <?php if (!empty($age)) : ?>
        <p> <?= htmlspecialchars("私は{$age}歳です", ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

</body>

</html>