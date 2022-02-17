<!-- ログインの処理 ※-->

<?php

// 関数を一回だけ読み込ませる
require_once('dbconnect.php');

session_start();
//メールアドレスの検証
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo '入力が間違っています。';
    return false;
}

//DBに接続しDB内でPOSTされたメールアドレスを検索
try {
    // ↓
    $pdo = new PDO('mysql:dbname=gsacf_d10_06;host=127.0.0.1;charset=utf8mb4', 'root', '');
    $stmt = $pdo->prepare('select * from mydb where email = ?');
    $stmt->execute([$_POST['email']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
//emailがDB内に存在しているか確認
if (!isset($row['email'])) {
    echo 'メールアドレス又はパスワードが間違っています。';
    return false;
}
//パスワード確認後sessionにメールアドレスを渡す
if (password_verify($_POST['password'], $row['password'])) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['EMAIL'] = $row['email'];
?>

    <!-- メインページに飛ぶ処理 -->
    <!-- <script type="text/javascript">
        location.href = 'mainpage/index.html';
    </script> -->
    
<?php
} else {
    echo 'メールアドレス又はパスワードが間違っています。';
    return false;
}

/* エラーがなければ次のページへ */
if (!isset($error)) {
    $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
    header('Location: post_read.php');   // input.phpへ移動
    exit();
}

?>