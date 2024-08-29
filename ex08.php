<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>変数が0のときに、警告を表示する - if構文</h2>
<pre>
<?php
    $answer = 0;
    if($answer == 0){
        print('1以上の数値を指定してください');
    }
?>
</pre>
</main>
</body>    
</html>