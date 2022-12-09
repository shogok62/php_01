<?php
$name =$_POST['name'];
$book =$_POST['book'];
$category =$_POST['category'];
?>



<!-- // POSTを受け取る
// POSTの場合はパスワードも送ってみる。 -->

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>著者：<?= $name ?> </p> 
    <p>書籍:<?= $book ?> </p> 
    <p>カテゴリー:<?= $category ?> </p> 

    <!-- パスワード： -->
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
