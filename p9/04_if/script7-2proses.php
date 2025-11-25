<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
    <h1>Mencari Status Bilangan</h1>
<?php
$bilangan = $_POST['bil'];

if ($bilangan > 0) {
    echo "<p>Bilangan ".$bilangan." adalah positif</p>";
} else {
    // Jika tidak positif, cek apakah negatif atau nol
    if ($bilangan < 0) {
        echo "<p>Bilangan ".$bilangan." adalah negatif</p>";
    } else {
        // Jika tidak lebih dari 0 dan tidak kurang dari 0, maka pasti nol
        echo "<p>Bilangan ".$bilangan." adalah nol</p>";
    }
}

if ($bilangan > 0) {
    $status = "positif";
} else {
    if ($bilangan < 0) {
        $status = "negatif";
    } else {
        $status = "nol";
    }
}

echo "<p>Bilangan ".$bilangan." adalah bilangan ".$status."</p>";
?>
</body>
</html>