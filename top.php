<!-- トップ画面 ※-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン・新規登録</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
</head>

<body id="index">
    <!-- ログイン部分 -->

    <div class="content">

        <h1 style="text-align:center;margin-top: 0em;margin-bottom: 1em;">
            ログイン
        </h1>
        <p>ログインフォームに記入し、ログインしてください。</p>

        <div class="control">
            <form action="login.php" method="post" class="form_log">
                <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
                <?php if (!empty($error["email"]) && $error['email'] === 'blank') : ?>
                    <p class="error">＊メールアドレスを入力してください</p>
                <?php endif ?>
                <br><br>
                <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
                <?php if (!empty($error["password"]) && $error['password'] === 'blank') : ?>
                    <p class="error">＊パスワードを入力してください</p>
                <?php endif ?>
                <br><br>
                <button type="submit" class="btn">ログインする</button>
            </form>
        </div>

        <!-- パスワードリマインダー -->
      
                <a href="remaind.php" class="edit">パスワードを忘れた方はこちら</a>
            
        <!-- 新規登録部分 -->
        <div class="control">
            <h2 style="text-align:center;margin-top: 2em;margin-bottom: 1em;" class="h1_log">
                初めての方はこちらから
            </h2>

            <form action="entry.php" method="post" class="form_log">
                <button type="submit" class="btn">新規登録する</button>
            </form>
        </div>
    </div>
</body>

</html>