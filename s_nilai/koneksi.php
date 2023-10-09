<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'stmik_ids';

$connection = mysqli_connect($server, $user, $password, $database);

if (!$connection) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
