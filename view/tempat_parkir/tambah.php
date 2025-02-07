<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah tempat baru</title>
</head>
<body>
    <h1>tambah tempat baru </h1>
    <form action="simpan.php" method="POST">
        <label for="">id_tempat</label>
        <input type="number" name="id_tempat">
        <br>
        <label for="">nama_tempat</label>
        <input type="text" name="nama_tempat">
        <br>
        <label for="">harga</label>
        <input type="number" name="harga">
        <br>
        <label for="">lokasi</label>
        <input type="text" name="lokasi">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>