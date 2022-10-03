<?php 

require 'functions.php';
$Buku = query("SELECT * FROM Buku");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="margin: auto 100px;">
    <table>
        <thead>

            <tr>
                <th><div class="back">
                    <a href="../index.php">kembali</a>
                </div>
                </th>

                <th>
                <div class="add">
                    <a href="tambah.php" style="padding-left: 1000px;">Tambah Data</a>
                </div>
                </th>
            </tr>


        </thead>


    </table>
    
    

    

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Informasi Produk</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($Buku)) : ?>
            <tr>
                <td colspan="8">
                    <h1>Buku Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($Buku as $kertas) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $kertas['id'] ?>"><button style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href="hapus.php?id=<?= $kertas['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                    <a href="detail.php?id=<?= $kertas['id']; ?>"><button style="border: none; padding: 5px 10px; background-color: black; color: white; border-radius: 2px;">Detail</Details></button></a>
                </td>
                <td><img width="90px" src="../img/<?= $kertas['img']; ?>" alt=""></td>
                <td><?= $kertas['nama']; ?></td>
                <td><?= $kertas['informasi_produk']; ?></td>
                <td><?= $kertas['jenis']; ?></td>
                <td><?= $kertas['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>