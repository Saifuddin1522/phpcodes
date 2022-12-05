<?php
echo "Formdan gelen bilgiler:<br>";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "Gelen Kullanıcı Adı:".$_POST["user"]."<br>";
echo "Gelen Şifre:".$_POST["pass"]."<br>";



?>