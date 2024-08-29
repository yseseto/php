<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>Cookieに値を保存する</h2>
<pre>
<?php
$value = '変数に保存した値です';
setcookie('save_message', 'Cookieに保存した値です', time()+60*60*24*14);
?>
Cookieに値を保存しました。次のページに移動してみましょう。
&raquo; <a href="page02.php">page02へ</a>
</pre>
</main>
</body>    
</html>