<?php 
require 'php/functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

</head>

<body style="margin: auto 100px;">
<p></p>
    <div class="add">
        <a href="php/form.php">Ke Halaman tambah</a>
    </div>
    <p></p>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Informasi Produk</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($buku as $kertas) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="90px" src="img/<?= $kertas['img']; ?>" alt=""></td>
                <td><?= $kertas['nama']; ?></td>
                <td><?= $kertas['informasi_produk']; ?></td>
                <td><?= $kertas['jenis']; ?></td>
                <td><?= $kertas['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>