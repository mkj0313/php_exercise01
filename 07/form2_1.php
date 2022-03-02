<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

// ここにコードを追記
// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist = $_POST['stylist'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <!--ここにコードを追記-->
            <option value="スタイリスト">スタイリスト</option>
            <option value="ハイスタイリスト">ハイスタイリスト</option>
            <option value="トップスタイリスト">トップスタイリスト</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <!--ここにコードを追記-->
    <?php foreach ($stylists as $key => $value) : ?>
        <?php if ($key === $select_stylist) : ?>
            <p>
                <?= 'あなたの担当は' . $value . 'です' ?>
            </p>
            <?php break; ?>
        <?php endif; ?>
    <?php endforeach; ?>

</body>

</html>