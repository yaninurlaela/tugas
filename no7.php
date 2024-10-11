<?php
$tahun_lahir = 2007;
$tahun_sekarang =date(format: 'Y');
$usia = $tahun_sekarang - $tahun_lahir;

echo "jika kamu lahir pada tahun $tahun_lahir,maka usiamu adalah $usia tahun";
?>