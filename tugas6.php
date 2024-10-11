<?php
$nilai = 75;
if ($nilai > 85){
    echo "nilai A";
}
elseif($nilai > 75){
    echo "Nilai B";
}
elseif($nilai > 65){
    echo "Nilai C";
}
elseif($nilai < 50){
    echo "Nilai D";
}
else{
    echo "Nilai E";
}