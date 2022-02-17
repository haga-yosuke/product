<?php

// DB接続したいファイル（todo_create.php, todo_read.php, など）

if (
  !isset($_POST['name']) || $_POST['name'] == '' ||
  !isset($_POST['text']) || $_POST['text'] == ''
) {
  exit('paramError');
}

$name = $_POST['name'];
$text = $_POST['text'];

include('functions.php');
$pdo = connect_to_db();

// DB接続
// $dbn = 'mysql:dbname=gsacf_d10_06;charset=utf8mb4;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }

$sql = 'INSERT INTO post_table(id, name, text, created_at, updated_at) VALUES(NULL, :name, :text, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:post_input.php");
exit();
