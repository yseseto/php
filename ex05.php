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
<h2>1年後までのカレンダーを作成する(while)</h2>
<pre>
<?php
$i=1;
while($i<=365){
    $day = date('n/j(D)', strtotime('+' . $i . 'day'));
    print($day . "\n");
    $i++;
}
?>
</pre>
</main>
</body>    
</html>