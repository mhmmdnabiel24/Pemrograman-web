<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
?>
<html>
    <head>
        <title>contoh request post</title>
    </head>
    <body>
        <h1>input dua biangan</h1>
        <?php
        echo "<p>anda telah memasukan bilangan pertama = ".$bilangan1. "</p>";
        echo "<p>anda telah memasukan bilangan kedua = ".$bilangan2. "</p>";
        ?>
    </body>
</html>