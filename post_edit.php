<?php

// id受け取り
// var_dump($_GET);
// exit();

// DB接続
include("functions.php");
$id = $_GET["id"];

// SQL実行

$pdo = connect_to_db();

$sql = 'SELECT * FROM post_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿編集フォーム</title>
  <link rel="stylesheet" href="input.css">
</head>

<body>

  <div class="header">
    <div class="header-title">
      <div class="yokonarabi">
        <h1>Capture the beautiful moment!</h1>
        <p class="btn"><a href="index.php">ログアウト</a></p>
      </div>
      <h2>X HOUND</h2>
    </div>
  </div>

  <form action="post_update.php" method="POST">
    <fieldset>
      <legend class="post">投稿を編集する</legend>

      <div>
        name: <input type="text" name="name" value="<?= $record['name'] ?>">
      </div>
      <div>
        text: <input type="text" name="text" value="<?= $record['text'] ?>">
      </div>
      <div>
        <input type="hidden" name="id" value="<?= $record['id'] ?>">
      </div>

      <div>
        <button>送信する</button>
      </div>

    </fieldset>

    <a href="post_read.php">投稿一覧に戻る</a>

  </form>

  <footer>
    <div class="footer">
      <small>copyrights 2021-2022 G`s Academy Fukuoka All RIghts Reserved.</small>
    </div>
  </footer>


</body>

</html>