<?php
session_start();
require_once '../helper/connection.php';

// $id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

$query = mysqli_query($connection, "insert into login (username, password, status) value('$username','$password','$status')");
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
