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
<h2>2024年8月のカレンダー - 剰余算</h2>
<table>
<?php
$week = array('水','木','金','土','日','月','火');
for($i=1; $i<=31; $i++){
    print($i . '日（' . $week[$i % 7] . '）<br>');
}
?>
</table>
</main>
</body>    
</html>