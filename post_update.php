<?php
// 入力項目のチェック
// var_dump($_POST);
// exit();

include('functions.php');

if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['text']) || $_POST['text'] == '' ||
    !isset($_POST['id']) || $_POST['id'] == ''
) {
    exit('paramError');
}

$name = $_POST['name'];
$text = $_POST['text'];
$id = $_POST['id'];


// DB接続
$pdo = connect_to_db();

// SQL実行

$sql = 'UPDATE post_table SET name=:name, text=:text, updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header('Location:post_read.php');
exit();
