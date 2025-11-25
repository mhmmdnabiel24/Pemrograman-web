<html>
<head>
    <title>Hasil Cek Kabisat</title>
</head>
<body>
    <h1>Hasil Pengecekan Tahun Kabisat</h1>
<?php
$tahun = $_POST['tahun'];

// PHP memiliki fungsi bawaan checkdate() yang lebih akurat, 
// tetapi kita akan menggunakan logika if/else sesuai instruksi soal.

if (($tahun % 4 == 0) && (($tahun % 100 != 0) || ($tahun % 400 == 0))) {
    $status = "adalah Tahun Kabisat.";
} else {
    $status = "bukan Tahun Kabisat.";
}

echo "<p>Tahun **".$tahun."** ".$status."</p>";
?>
</body>
</html>