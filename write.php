<?php
$time = date('Y-m-d H:i:s');

// ファイルに書き込み
$file = fopen('data.txt' , 'a');

fwrite($file, $time);

fclose($file);

//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <h1>書き込み完了</h1>
</body>

</html>
