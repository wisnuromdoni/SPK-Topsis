<?php
session_start();
require_once '../helper/connection.php';

// $nim = $_POST['nim'];
// $matkul = $_POST['matkul'];
// $semester = $_POST['semester'];
$nilai = $_POST['nilai'];

$query = "insert into matrix values";
for ($i = 1; $i <= $rows; $i++) {
        $nilai = $_POST['nilai_K' . $i];
        $sql = $sql . " (NULL, $id, 'K" . $i . "', $nilai), ";
    }

if ($query) {
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
