<?php
require '../aksi/koneksi.php';

$result =  mysqli_query($conn, "SELECT * FROM beli");

$beli = [];

while ($row = mysqli_fetch_assoc($result)) {
    $beli[] = $row;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Staff</title>
    <link rel="stylesheet" href="../style/beli.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Toko <span>Pupuk</span></a>
        <div class="navbar-nav">
            <a href="index.php">Home</a>
            <a href="about.php">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="index.php">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="beli.php" id="shopping-card"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
            </section>
            <section class="dash-main">
                <h1>Pesanan Anda Akan Ditampilkan Disini</h1>
                <hr><br>
                <div class="leading-btn">
                    <a href="tambah.php"><button class="add-btn">Tambah</button></a>
                    <button class="history-btn">Histori</button>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Item</th>
                            <th>Banyaknya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach($beli as $bl) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $bl["nama"] ?></td>
                            <td><?php echo $bl["item"] ?></td>
                            <td><?php echo $bl["banyaknya"] ?></td>
                            <td class="action">
                                <a href="edit.php?id=<?php echo $beli["no"] ?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="hapus.php?id=<?php echo $beli["no"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>