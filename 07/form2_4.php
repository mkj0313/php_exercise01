<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];

    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }
    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }
    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>

    <!-- コードを追記-->
    <?php if ($err_msgs) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="" method="POST">

        <!-- コードを追記-->
        <div>
            <label for="">氏名</label><br>
            <input type="text" name="name" value="<?= $name ?>">
        </div>
        <div>
            <label for="">電話番号</label><br>
            <input type="tel" name="tel" value="<?= $tel ?>">
        </div>
        <div>
            <label for="">メールアドレス</label><br>
            <input type="email" name="email" value="<?= $email ?>">
        </div>
        <h3>購入する物を選択してください</h3>
        <select name="item_key">
            <? foreach ($items as $key => $item) : ?>
                <option value="<?= $key ?>"> <?= $item; ?></option>
            <? endforeach; ?>
        </select>

        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

    <!-- コードを追記-->
    <? if (empty($err_msgs) && !empty($items[$item_key])) : ?>
        <table>
            <thead>
                <tr>
                    <th>以下の内容が送信されました。</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>氏名：</td>
                    <td><?= $name ?></td>
                </tr>
                <tr>
                    <td>電話番号：</td>
                    <td><?= $tel ?></td>
                </tr>
                <tr>
                    <td>メールアドレス：</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>購入するもの：</td>
                    <td><?= $items[$item_key] ?></td>
                </tr>
            </tbody>
        </table>

    <? endif; ?>

</body>

</html>