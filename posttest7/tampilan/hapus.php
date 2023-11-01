<?php
require "../aksi/koneksi.php";
$id = $_GET['no'];


$result = mysqli_query($conn,"DELETE FROM beli WHERE no = '$no'");

if ($result) {
    echo "
    <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'beli.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Hapus!');
        document.location.href = 'beli.php'
    </script>";
}

?>