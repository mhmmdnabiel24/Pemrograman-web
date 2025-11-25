<?php
$bil1 = 6;
$bil2 = 9;
$bil3 = 10;

// Tahap 1: Membandingkan $bil1 dan $bil2
if ($bil1 > $bil2) {
    $max = $bil1; // Jika $bil1 lebih besar, $max = 6
} else {
    $max = $bil2; // Jika $bil2 lebih besar/sama, $max = 9
}

// Tahap 2: Membandingkan $max (hasil Tahap 1) dengan $bil3
if ($max > $bil3) {
    $maxSemua = $max; // Jika $max (9) lebih besar dari $bil3 (10)
} else {
    $maxSemua = $bil3; // Jika $bil3 (10) lebih besar/sama dari $max (9)
}

echo "Nilai terbesar dari ketiga bilangan adalah ".$maxSemua;
?>