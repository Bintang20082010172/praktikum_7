<?php
require_once 'Connect.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = $conn->query("DELETE FROM datapegawai WHERE ID_Pegawai = '$id'");
  if ($q) {
    echo "<script>alert('Data Pegawai berhasil dihapus'); window.location.href='Home.php'</script>";
  } else {
    echo "<script>alert('Data Pegawai gagal dihapus'); window.location.href='Home.php'</script>";
  }
} else {
  header('Location:Home.php');
}