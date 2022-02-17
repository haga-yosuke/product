<!-- パスワードリマインダー -->
<!-- <?php

// id受け取り
// var_dump($_GET);
// exit();


// 関数を一回だけ読み込ませる
require_once('dbconnect.php');

try {
    return new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    exit('dbError:' . $e->getMessage());
}

$id = $_GET["id"];

// SQL実行

$sql = 'SELECT * FROM mydb WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?> -->


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>パスワード変更</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body id="index">
    <div class="content">
        <form action="" method="POST">
            <h1>パスワードをお忘れの方</h1>
            <p>パスワードの再設定が必要になります。</p>
            <p>下記のフォームにメールアドレスの入力してください。</p>
            <br>



            <div class="control">
                <label for="email">メールアドレス<span class="required">必須</span></label>
                <input id="email" type="email" name="email">
                <?php if (!empty($error["email"]) && $error['email'] === 'blank') : ?>
                    <p class="error">＊メールアドレスを入力してください</p>
                <?php endif ?>
            </div>


            <div class="control">
                <button type="submit" class="btn">確認する</button>
            </div>
        </form>
    </div>
</body>

</html>