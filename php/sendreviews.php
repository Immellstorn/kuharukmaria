<?php
require_once "connection.php";

$reviews_autor =  htmlspecialchars(trim($_POST['name']));
$reviews_text = htmlspecialchars(trim($_POST['textarea']));
$link->query("INSERT INTO " . $dbase . ".reviews (reviews_autor, reviews_text, reviews_date) VALUES ('$reviews_autor', '$reviews_text', '$today');");

$link->close();
?>