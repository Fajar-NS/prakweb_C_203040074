<?php 

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'form.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'form.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="font-family: Arial, sans-serif;">
    <h3>Tambah Data</h3>
    <form action="" method="post">
        <ul style="list-style: none;">
            <li>
                <label for="img" style="margin-right: 8px;">Gambar</label>
                : <input type="file" class="custom-file-input" id="img" name="img" required style="padding-left: 30px"><br><br>
            </li>
            <li>
                <label for="nama" style="margin-right: 16px;">Nama</label>
                : <input type="text" name="nama" id="nama" require ><br><br>
            </li>
            <li>
                <label for="informasi_produk" style="margin-right: 21px;">informasi produk</label>
                : <input type="text" name="informasi_produk" id="informasi_produk" require ><br><br>
            </li>
            <li>
            <label for="jenis">Jenis</label>
                :   <select name="jenis" id="jenis" required>
                    <option value="">--------- Pilih jenis ---------</option>
                    <option value="buku">Buku</option>
                </select><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 7px;">Harga</label>
                : <input type="text" name="harga" id="harga" require><br><br>
            </li>
            <button type="submit" name="tambah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="form.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>