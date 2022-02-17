<!-- メイン投稿画面 -->

<?php

// DB接続したいファイル（todo_create.php, todo_read.php, など）

include('functions.php');
$pdo = connect_to_db();

// $dbn = 'mysql:dbname=gsacf_d10_06;charset=utf8mb4;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }

$sql = 'SELECT * FROM post_table ORDER BY text ASC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["name"]}</td>
      <br>
      <td>{$record["text"]}</td>
      <br>
      <td>
        <a href='post_edit.php?id={$record["id"]}'>投稿を編集する</a><br>
      </td>
      <br>
      <td>
        <a href='post_delete.php?id={$record["id"]}'>投稿を削除する</a><br>
      </td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メインページ</title>
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

  <fieldset>
    <legend class="post">投稿一覧</legend>

    <table>
      <thead>
        <tr>
          <th>名前</th>
          <th>投稿内容</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>

    <a href="post_input.php">投稿する</a>

  </fieldset>

  <footer>
    <div class="footer">
      <small>copyrights 2021-2022 G`s Academy Fukuoka All RIghts Reserved.</small>
    </div>
  </footer>

</body>

</html>