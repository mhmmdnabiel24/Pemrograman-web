<html>
<head>
    <title>Hasil Perhitungan Gaji</title>
</head>
<body>
    <h1>Hasil Perhitungan Upah Karyawan</h1>
<?php
$jamKerja = (int)$_POST['jam_kerja']; // Pastikan input adalah integer

$upahReguler = 2000;
$upahLembur = 3000;
$jamNormalMaks = 48;
$gajiTotal = 0;
$jamLembur = 0;

if ($jamKerja <= $jamNormalMaks) {
    // Karyawan tidak lembur (48 jam atau kurang)
    $gajiTotal = $jamKerja * $upahReguler;
    
    echo "<p>Total jam kerja Anda adalah **".$jamKerja." jam**.</p>";
    echo "<p>Anda bekerja **".$jamKerja." jam** dengan upah reguler (Rp. ".number_format($upahReguler, 0, ',', '.')." / jam).</p>";
    
} else {
    // Karyawan lembur (lebih dari 48 jam)
    $jamNormal = $jamNormalMaks;
    $jamLembur = $jamKerja - $jamNormalMaks;
    
    $gajiNormal = $jamNormal * $upahReguler;
    $gajiLembur = $jamLembur * $upahLembur;
    
    $gajiTotal = $gajiNormal + $gajiLembur;
    
    echo "<p>Total jam kerja Anda adalah **".$jamKerja." jam**.</p>";
    echo "<p>Rinciannya:</p>";
    echo "<ul>";
    echo "<li>**Jam Normal (".$jamNormal." jam):** Rp. ".number_format($gajiNormal, 0, ',', '.')."</li>";
    echo "<li>**Jam Lembur (".$jamLembur." jam):** Rp. ".number_format($gajiLembur, 0, ',', '.')."</li>";
    echo "</ul>";
}

echo "<h3>Jumlah upah yang diterima karyawan adalah: **Rp. ".number_format($gajiTotal, 0, ',', '.').",-**</h3>";
?>
</body>
</html>