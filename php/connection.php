<?php
$host = "";
$user = "";
$password = "";
$dbase = "";

date_default_timezone_set('Europe/Moscow');
$today = date("Y.m.d");

$link = new mysqli($host, $user, $password, $dbase);
$link->set_charset('utf8');

if (!$link) {
	die("Нет соединения с БД");
} elseif ($link->connect_errno) {
	echo "Что-то пошло не так!\n";
	echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    exit;
}

