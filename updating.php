<?php
require_once 'Connect.php';
if (isset($_POST['submit'])) {
  $ID_Pegawai = $_POST['ID_Pegawai'];
  $Nama = $_POST['Nama'];
  $Tgl_lahir = $_POST['Tgl_lahir'];
  $Jabatan = $_POST['Jabatan'];
  $Salary = $_POST['Salary'];
$q = $conn->query("UPDATE datapegawai SET Nama = '$Nama', Tgl_lahir = '$Tgl_lahir', Jabatan = '$Jabatan', Salary = '$Salary' WHERE ID_Pegawai = '$ID_Pegawai'");
if ($q) {
    echo "<script>alert('Data Pegawai berhasil diubah'); window.location.href='Home.php'</script>";
  } else {
    echo "<script>alert('Data Pegawai gagal diubah'); window.location.href='Home.php'</script>";
  }
} else {
  header('Location: Home.php');
}