<?php

// 数値表示
// データまとめ用の空文字変数
$str = '';

// ファイルを開く：読み取り専用
$file = fopen('data/kicks.csv', 'r');

// ファイルをロック
flock($file, LOCK_EX);

// fgets()で１行ずつ取得し、＄lineに格納
if ($file) {
    while ($line = fgets($file)) {
        // 取得したデータを$strに追加
        $str .= "<tr><td>{$line}</td></tr>";
    }
}
// .=は+=と同じ

// ロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicks Reseach 結果</title>
    <link rel="stylesheet" href="read.css">
</head>

<body>

    <div class="header">
        <div class="header-title">
            <h1>What's your favorite sneaker?</h1>
            <h2>Kicks Reseach</h2>
        </div>
    </div>


    <main>


        <fieldset>
            <legend>調査結果</legend>
        
            <table>
                <thead>
                    <tr>
                        <th>【スニーカーの種類】</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $str ?>
                </tbody>
            </table>
        </fieldset>
        <!-- <table>
            <thead>
                <tr>
                    <th>調査結果</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table> -->


        <a href="input.php" class="back">入力画面に戻る</a>

    </main>

    <footer>
        <div class="footer">
            <small>copyrights 2021-2022 G`s Academy Fukuoka All RIghts Reserved.</small>
        </div>
    </footer>
</body>

</html>