<?php
require_once 'Connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Program Data</title>
</head>
<body>
  <h1><center>Program Pengisian Data Karyawan</center></h1>
  <form method="post" action="add.php"><center>
    <input type="number" name="ID_Pegawai" placeholder="input ID">
    <input type="text" name="Nama" placeholder="Nama Pegawai">
    <input type="date" name="Tgl_lahir" placeholder="Masukan tanggal lahir">
    <input type="text" name="Jabatan" placeholder="Masukkan jabatan">
    <input type="number" name="Salary" placeholder="Masukan jumlah gaji">
    <input type="submit" name="submit" value="Tambah Data">
</center></form><br/>

  <table align="center" border="3">
    <tr>
      <th>No.</th> <th>ID_Pegawai</th>
      <th>Nama</th>
      <th>Tanggal_lahir</th>
      <th>Jabatan</th>
      <th>Salary</th>
      <th colspan="2">Activity</th>
    </tr>
<?php
    $q = $conn->query("SELECT * FROM datapegawai");
$no = 1; 
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['ID_Pegawai'] ?></td>
      <td><?= $dt['Nama'] ?></td>
      <td><?= $dt['Tgl_lahir'] ?></td>
      <td><?= $dt['Jabatan'] ?></td>
      <td><?= $dt['Salary'] ?></td>
      <td><a href="update.php?id=<?= $dt['ID_Pegawai'] ?>">Update</a></td>
      <td><a href="delete.php?id=<?= $dt['ID_Pegawai'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?')">Delete</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table>
</body>
</html>