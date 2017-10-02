<?php
//CONECCION BASE DE DATOS
$link = mysqli_connect("localhost","root","","netcomics") or die("Error " . mysqli_error($link));
$site_url = 'http://localhost/netcomics/';
$relative_folder = '/netcomics';
//set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\netcomics');
include '../lang/views_es.php';
?>