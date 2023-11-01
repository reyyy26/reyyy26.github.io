<?php
require '../aksi/koneksi.php';

if (isset($_POST['beli'])) {
    $nama = $_POST['nama'];
    $item = $_POST['item'];
    $banyaknya = $_POST['banyaknya'];    
        $result = mysqli_query($conn, "INSERT INTO beli VALUES 
        ('', '$nama', '$item', '$banyaknya')");
        if ($result) {
            echo "
            <script>
                alert('Data Berhasil DiTambahkan!');
                document.location.href = 'beli.php'
            </script>";
        }else {
            echo "
            <script>
                alert('Data Gagal DiTambahkan!');
                document.location.href = 'tambah.php'
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../style/tambah.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield">
                <label for="item">Item</label>
                <input type="text" name="item" class="textfield">
                <label for="banyaknya">Banyaknya</label>
                <input type="text" name="banyaknya" class="textfield">
                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>