<?php
require_once 'Connect.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM datapegawai WHERE ID_Pegawai = '$id'");
foreach ($q as $dt) :
  ?>
<h1>Program Data Pegawai</h1>
  <h2>Halaman Update Data</h2>
<form action="updating.php" method="post">
    <input type="hidden" name="ID_Pegawai" value="<?= $dt['ID_Pegawai'] ?>">
    <input type="text" name="Nama" value="<?= $dt['Nama'] ?>">
    <input type="date" name="Tgl_lahir" value="<?= $dt['Tgl_lahir'] ?>">
    <input type="text" name="Jabatan" value="<?= $dt['Jabatan'] ?>">
    <input type="number" name="Salary" value="<?= $dt['Salary'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}