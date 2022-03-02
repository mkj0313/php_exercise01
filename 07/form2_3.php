<?php

$score = '';
$err_msg = '';
$judge_ment = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    } elseif ($score >= 60) {
        $judge_ment = '合格';
    } else {
        $judge_ment = '不合格';
    }
    if (empty($err_msg)) {
        // judge_ment.phpにリダイレクト
        header('Location: judge_ment.php?judge_ment=' . $judge_ment);
        exit;
    }
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
    <!--ここにコードを追記-->
    <? if (empty($score)) : ?>
        <h2>点数を入力してください</h2>
        <? if (!empty($err_msg)) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <? endif; ?>
    <? else : ?>
        <? if ($score >= 60) : ?>
            <h2>合格です</h2>
        <? else : ?>
            <h2>不合格です</h2>
        <? endif; ?>
    <? endif; ?>

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>


</body>

</html>