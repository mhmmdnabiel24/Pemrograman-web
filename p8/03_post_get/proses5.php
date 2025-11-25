<?php
$bilangan1 = $_GET['bil1'];
$bilangan2 = $_GET['bil2'];
$jumlah = $bilangan1 + $bilangan2;
?>

<html>
    <head>
        <title>contoh request GET</title>
    </head>
    <body>
        <h1> input dua bilangan </h1>
        <?php
        echo "<p>anda telah memasukan bilangan pertama = ".$bilangan1. "</p>";
        echo "<p>anda telah memasukan bilangan kedua = ".$bilangan2. "</p>";
        echo "<p>hasil penjumlahan adalah ".$jumlah. "</p>";    
        ?>
    </body>
</html>