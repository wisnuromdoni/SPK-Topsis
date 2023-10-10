<?php
session_start();
require_once '../helper/connection.php';

// $nim = $_POST['nim'];
// $matkul = $_POST['matkul'];
// $semester = $_POST['semester'];
$nilai = $_POST['nilai'];

$sqli = "INSERT INTO matrix VALUES";
for ($i = 1; $i <= $rows; $i++) {
        $nilai = $_POST['nilai_K' . $i];
        $sqli = $sqli . " (NULL, $id, 'K" . $i . "', $nilai), ";
    }

if ($sqli) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
