<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Pecahan Uang</title>
</head>
<body>
    <h2>Hitung Pecahan Uang</h2>

    <form method="post" action="">
        <label>Masukkan Jumlah Uang (Rp):</label><br>
        <input type="number" name="jumlahUang" required><br><br>

        <input type="submit" name="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $jumlahUang = $_POST['jumlahUang'];

        echo "<h3>Hasil Perhitungan Pecahan dari Rp. " . number_format($jumlahUang, 0, ',', '.') . "</h3>";

        // Hitung pecahan uang
        $sisa = $jumlahUang;

        $a = intval($sisa / 100000);
        $sisa = $sisa % 100000;

        $b = intval($sisa / 50000);
        $sisa = $sisa % 50000;

        $c = intval($sisa / 20000);
        $sisa = $sisa % 20000;

        $d = intval($sisa / 5000);
        $sisa = $sisa % 5000;

        $e = intval($sisa / 100);
        $sisa = $sisa % 100;

        $f = intval($sisa / 50);
        $sisa = $sisa % 50;

        echo "Jumlah Rp. 100.000 : " . $a . "<br/>";
        echo "Jumlah Rp. 50.000  : " . $b . "<br/>";
        echo "Jumlah Rp. 20.000  : " . $c . "<br/>";
        echo "Jumlah Rp. 5.000   : " . $d . "<br/>";
        echo "Jumlah Rp. 100     : " . $e . "<br/>";
        echo "Jumlah Rp. 50      : " . $f . "<br/>";
    }
    ?>
</body>
</html>
