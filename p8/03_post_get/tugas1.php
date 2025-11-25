<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Saldo Akhir</title>
</head>
<body>
    <h2>Hitung Saldo Akhir Tabungan</h2>

    <form method="post" action="">
        <label>Saldo Awal (Rp):</label><br>
        <input type="number" name="saldoAwal" required><br><br>

        <label>Bunga per Bulan (%):</label><br>
        <input type="number" step="0.01" name="bunga" required><br><br>

        <label>Lama (bulan):</label><br>
        <input type="number" name="bulan" required><br><br>

        <input type="submit" name="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $saldoAwal = $_POST['saldoAwal'];
        $bunga = $_POST['bunga'] / 100; // ubah persen ke desimal
        $bulan = $_POST['bulan'];

        // rumus bunga majemuk
        $saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

        echo "Saldo akhir setelah <b>$bulan</b> bulan adalah: <b>Rp. " . 
             number_format($saldoAkhir, 2, ',', '.') . "</b>";
    }
    ?>
</body>
</html>
