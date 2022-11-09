
<?php
include 'koneksi.php';
$result = mysqli_query($connection, "SELECT * FROM table_lukisan");

$data_lukisan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_lukisan[] = $row;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/table.css">
    <title>Kelola</title>
</head>
<body>

    <div class="sidebar">
        <a href="admin.html"><i class="material-icons">home</i>Home</a>
        <a class="active"href="kelola.php"><i class="material-icons">edit</i>Kelola Lukisan</a>
        <a href="dashboard.html"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href=""><i class="material-icons">logout</i>Logout</a>
     </div>
    <div class="content">
        <h1>Kelola Lukisan</h1>
        <div style="overflow-x: auto;">
  <table>
    <tr>
      <th>No</th>
      <th>Judul Lukisan</th>
      <th>Deskripsi Lukisan</th>
      <th>Harga Lukisan</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; foreach ($data_lukisan as $d):?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $d['judul'];?></td>
        <td><?php echo $d['diskripsi'];?></td>
        <td><?php echo $d['harga'];?></td>
        <td><img style="width: 40px;" src="gambar/<?php echo $d['gambar']; ?>"></td>
        <td>
            <button><i class="material-icons"><a href="hapus.php?id=<?php echo $d["id"]; ?>" onclick = "return confirm('And yakin ingin mengahpus data ini ?')">delete</a></i></button>
            <button><i class="material-icons"><a href="update.php?id=<?php echo $d["id"]; ?>" >edit</a></i></button>
        </td>
    </tr>
    <?php $i++; endforeach;?>
  </table>
  <br>
  <p>Tambah Lukisan</p>
  <button><i class="material-icons"><a href="tambah.php">add</a></i></button>
  </div>
      
    </div>

</body>
</html>