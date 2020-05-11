<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
if (!isset($_GET['Id'])) {
  header("location: index.php");
  exit;
}


$id = $_GET['Id'];
if (hapus($id) > 0) {
  echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'index.php';
    </script>";
} else {
  echo "<script>
    alert('Data Gagal Dihapus');
    document.location.href = 'index.php';
    </script>";
}
