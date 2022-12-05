<?php

function dizi_islem ($dizi) {
$toplam = 0;
$carpim = 1;
foreach($dizi as $deger) {
$toplam += $deger;
$carpim *= $deger;
}
return array ($toplam, $carpim);
}
var_dump(dizi_islem(array(2, 3, 4)));
/*
$sonuc = dizi_islem(array(2, 3, 4));
echo 'Toplam = ' . $sonuc[0] . '<br>';
echo 'Carpim = ' . $sonuc[1] . '<br>';
*/
?>