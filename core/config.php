<?php
include './lang/views_es.php';
//CONECCION BASE DE DATOS
$link = mysqli_connect("localhost","root","","netcomics") or die("Error " . mysqli_error($link));
$site_url = 'http://localhost/netcomics-bootstrap/';
?>