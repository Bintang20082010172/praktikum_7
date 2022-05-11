<?php
require_once 'Connect.php';
if (isset($_POST['submit'])) {
  $ID_Pegawai = $_POST['ID_Pegawai'];
  $Nama = $_POST['Nama'];
  $Tgl_lahir = $_POST['Tgl_lahir'];
  $Jabatan = $_POST['Jabatan'];
  $Salary = $_POST['Salary'];

  $q = $conn->query("INSERT INTO datapegawai VALUES ('$ID_Pegawai', '$Nama', '$Tgl_lahir', '$Jabatan', '$Salary')");
if ($q) {
    echo "<script>alert('Data pegawai berhasil ditambahkan'); window.location.href='Home.php'</script>";
  } else {
    echo "<script>alert('Data karyawan gagal ditambahkan'); window.location.href='Home.php'</script>";
  }
} else {
  header('Location: Home.php');
}