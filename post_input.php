<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>X HOUND</title>
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

  <form action="post_create.php" method="POST">
    <fieldset>
      <legend class="post">投稿する</legend>

      <div>
        name: <input class="name" type="text" name="name" placeholder="名前">
      </div>

      <div>
        textarea: <input class="text" type="text" name="text" placeholder="投稿内容">
      </div>

      <div id="submit">
        <button>送信する</button>
        </div>

        <a href="post_read.php">投稿一覧はこちら</a>

    </fieldset>
  </form>

  <footer>
    <div class="footer">
      <small>copyrights 2021-2022 G`s Academy Fukuoka All RIghts Reserved.</small>
    </div>
  </footer>


</body>

</html>