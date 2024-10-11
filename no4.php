<?php
$a = 10;
$b = 2;

$penjumlahan = $a + $b;
echo "Hasil penjumlahan dari $a dan $b adalah $penjumlahan<br>";

$pengurangan = $a - $b;
echo "Hasil pengurangan dari $a dan $b adalah $pengurangan<br>";

$perkalian = $a * $b;
echo "Hasil perkalian dari $a dan $b adalah $perkalian<br>";

if ($b != 0) {
    $pembagian = $a / $b;
    echo "Hasil pembagian dari $a dan $b adalah $pembagian<br>";
} else {
    echo "Pembagian tidak dapat dilakukan karena $b adalah nol.<br>";
}
?>