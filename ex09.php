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
<h2>九九表</h2>
<table border>
<?php
for($i=1; $i<=9; $i++){
    print('<tr>');
    for($j=1; $j<=9; $j++){
        print('<td>' . $j . '×' . $i . '＝' . $j*$i . '</td>');
    }
    print('</tr>');
}
?>
</table>
</main>
</body>    
</html>