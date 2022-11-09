<?php 
include 'koneksi.php';
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $diskripsi = $_POST['diskripsi'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];

    if($gambar != "") {
        $ekstensi = array('jpg', 'png');
        $x = explode('.', $gambar);
        $extension = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];


        if(in_array($extension, $ekstensi) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$gambar);

            $query = "UPDATE table_lukisan SET
            judul = '$judul',
            diskripsi = '$diskripsi',
            harga = '$harga',
            gambar = '$gambar'
            WHERE id = $id";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
            }else{
                echo "<script>alert('Data berhasil Diupdate!');window.location='kelola.php';</script>";  
            }

        }else{
            echo "<script>alert('Ekstensi gambar hanya jpg dan png!');window.location='tambah.php';</script>";   
        }}
        else{
            $query = "UPDATE table_lukisan SET
            judul = '$judul',
            diskripsi = '$diskripsi',
            harga = '$harga',   
            WHERE id = $id";
            $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
        }else{
            echo "<script>alert('Data berhasil Diupdate!');window.location='kelola.php';</script>";  
        }  
        
    }

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
    <link rel="stylesheet" href="css/form.css">
    <title>Update</title>
</head>
<body>
    <div class="sidebar">
        <a href="admin.html"><i class="material-icons">home</i>Home</a>
        <a class="active"href="kelola.php"><i class="material-icons">edit</i>Kelola Lukisan</a>
        <a href="dashboard.html"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href=""><i class="material-icons">logout</i>Logout</a>
    </div>
    <div class="content">
        <h1>Update Lukisan</h1>
        <form class="needs-validation" action="" method="post" enctype="multipart/form-data">
                <div>

                  <div class="form-group">
                    <label>Judul Lukisan</label>
                    <input type="text" id="text" placeholder="Judul" name="judul" required>
                  </div>
                  <div class="form-group">
                    <label>Diskripsi</label>
                    <input type="text"  id="text" placeholder="diskripsi" name="diskripsi" required>
                  </div>
      
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text"  id="text" placeholder="Harga" name="harga" required>
                  </div>
                  
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit">
                  </div>
                  
              </form>
    </div>
</body>
</html>