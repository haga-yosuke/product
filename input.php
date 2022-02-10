<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicks reseach</title>
    <link rel="stylesheet" href="input.css">
</head>

<body>

    <div class="header">
        <div class="header-title">
            <div class="yokonarabi">
                <h1>What's your favorite sneaker?</h1>
                <p class="btn"><a href="index.php">ログアウト</a></p>
            </div>
            <h2>Kicks Reseach</h2>
        </div>
    </div>

    <main>

        <h3>あなたの好きなスニーカーは何ですか？？</h3>
        <a>以下の選択肢から好きなスニーカーのブランドを選んでください。（複数回答可）</a>


        <form action="create.php" method="POST" class="question">


            <div class="question">
                <div class="kicks">
                    <img id="kicks_img" src="img/nike.jpeg" alt="ナイキ"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="ナイキ">Nike
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/adidas.jpeg" alt="アディダス"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="アディダス">Adidas
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/puma.jpeg" alt="プーマ"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="プーマ">Puma
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/nb.jpg" alt="ニューバランス"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="ニューバランス">New balance
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/vans.jpeg" alt="ヴァンズ"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="ヴァンズ">Vans
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/converse.png" alt="コンバース"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="コンバース">Converse
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/reebok.jpg" alt="リーボック"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="リーボック">Reebok
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/lacoste.jpeg" alt="ラコステ"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="ラコステ">Lacoste
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/onitsuka.jpeg" alt="オニツカタイガー"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="オニツカタイガー">Onitsuka Tiger
                </div>

                <div class="kicks">
                    <img id="kicks_img" src="img/other.jpeg" alt="その他"><br>
                    <input id="checkbox" type="checkbox" name="kicks" value="その他">その他
                </div>

            </div>



            <input class="submit" type="submit" name="send" value="送信">


            <a href="read.php" class="result">結果はこちら</a>


            <!-- <fieldset>
                <legend>textファイル書き込み型todoリスト（入力画面）</legend>
                <a href="read.php">一覧画面</a>
                <div>
                    todo: <input type="text" name="todo">
                </div>
                <div>
                    deadline: <input type="date" name="deadline">
                </div>
                <div>
                    <button>submit</button>
                </div>
            </fieldset> -->
        </form>

    </main>
    
    <footer>
        <div class="footer">

            <small>copyrights 2021-2022 G`s Academy Fukuoka All RIghts Reserved.</small>
        </div>
    </footer>
</body>

</html>