<?php
$time = date('Y-m-d H:i:s');

// ファイルを開く
$file = fopen('data.txt' , 'r');

// ファイル内容を1行ずつ読み込んで出力
$content = file_get_contents($file);
$rows = explode("\n", $content);
foreach ($rows as $row) {
    // 読み込んだ行を処理
}

// ファイルを閉じる
fclose($file);
