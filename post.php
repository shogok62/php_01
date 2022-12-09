<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            width : 600px;
        }

        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h2>社会運動に関する参考書</h2>
        <ul>
            <li>社会運動の参考になる本を記録</li>
            <li>社会運動が向かうべき方向性に示唆を与えてくれるようなカテゴリー分けも行う</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>

    <form action="post_confirm.php" method="post">

       
    著者: <input type="text" name="name"> <br>
    書籍: <input type="text" name="book"> <br>
    カテゴリー： <select name="category"> <br>
                    <option>選択してください</option>
                    <option>政治思想</option>
                    <option>経済思想</option>
                    <option>哲学</option>
                    <option>芸術</option>
                    <option>文学</option>
                    <option>宗教学</option>
                    <option>社会学</option>
                    <option>歴史学</option>
                    <option>地球科学</option>
                    <option>コミュニティ論</option>
                </select>
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
</body>

</html>
