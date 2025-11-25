<?php
// Mengambil angka bulan saat ini (1 sampai 12)
$angkaBln = date("n"); 

// Memulai statement switch berdasarkan nilai $angkaBln
switch ($angkaBln) {
    case 1: 
        $namaBln = "Januari";
        break;
    case 2: 
        $namaBln = "Pebruari";
        break;
    case 3: 
        $namaBln = "Maret";
        break;
    case 4: 
        $namaBln = "April";
        break;
    case 5: 
        $namaBln = "Mei";
        break;
    case 6: 
        $namaBln = "Juni";
        break;
    case 7: 
        $namaBln = "Juli";
        break;
    case 8: 
        $namaBln = "Agustus";
        break;
    case 9: 
        $namaBln = "September";
        break;
    case 10: 
        $namaBln = "Oktober";
        break;
    case 11: 
        $namaBln = "Nopember";
        break;
    case 12: 
        $namaBln = "Desember";
        break;
}

// Menampilkan hasil
echo "Nama bulan sekarang adalah : ".$namaBln;
?>