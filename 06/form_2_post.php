<?php

// 変数を用意
$name = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの作成2</title>
</head>

<body>
    <?php if (!empty($name)) : ?>
        <p> <?= htmlspecialchars("私の名前は、{$name}です。", ENT_QUOTES, 'UTF-8') ?></p>
        <a href="form_2.php">戻る</a>
    <?php endif; ?>
</body>

</html>