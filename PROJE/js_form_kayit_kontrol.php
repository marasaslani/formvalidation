<?php
$ad = $_POST['ad'];
$eposta = $_POST['eposta'];
$sifre = $_POST['sifre'];
$soyad = $_POST['soyad'];
$eposta1 = $_POST['eposta1'];
$sifre1 = $_POST['sifre1'];
$sifreonay = $_POST['sifreonay'];
$rızametni1 = $_POST['rizametni'];
$sonuye = $_POST['sonuye'];

$bilgiler = array($ad, $soyad, $eposta1, $sifre1, $sifreonay, $rizametni, $sonuye, $sifre, $eposta);
return print_r($bilgiler);
?>