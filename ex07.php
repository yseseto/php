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
<h2>プラットフォーム - 連想配列</h2>
<pre>
<?php
    $platforms = [
        'win' => 'Windows',
        'mac' => 'Macintosh',
        'iphone' => 'iPhone',
        'ipad' => 'iPad',
        'android' => 'Android'
    ];
    foreach($platforms as $key => $value){
        print($key . ' : ' . $value . "\n");
    }
?>
</pre>
</main>
</body>    
</html>