<?php
function argumanlar() {
$adet = func_num_args();
if( $adet == 0)
return;
echo $adet . ' parametre bulundu.<br>';
if($adet > 1) {
$args = func_get_args();
foreach ($args as $key) {
echo $key . '<br>';
}
# echo func_get_arg(1) komutu ile 2. sıradaki değer alınabilir
} else {
echo func_get_arg(0) . '<br>';
}
echo '<br>';
}
argumanlar ();
argumanlar ('HTML5');
argumanlar ('PHP', 'MySQL','XML');
?>