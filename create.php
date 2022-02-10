<?php

// var_dump($_POST);
// exit();

// データの受け取り
$kicks = $_POST['kicks'];


// データのまとめ方
$write_data = "{$kicks}\n";

// ファイルを開く
$file = fopen('data/kicks.csv', 'a');

// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);

// データ入力画面に移動する（input.phpに飛ぶ）
header("Location:input.php");

?>


