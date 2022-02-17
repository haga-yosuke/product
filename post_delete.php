<?php
// データ受け取り
// var_dump($_POST);
// exit();

$id = $_GET['id'];

include('functions.php');

// DB接続
$pdo = connect_to_db();


// SQL実行
$sql = 'DELETE FROM post_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:post_read.php");
exit();