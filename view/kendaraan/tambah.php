<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah kendaraan baru</title>
</head>
<body>
    <h1>tambah kendaraan baru </h1>
    <form action="simpan.php" method="POST">
        <label for="">plat_no</label>
        <input type="text" name="plat_no">
        <br>
        <label for="">id_tempat</label>
        <input type="number" name="id_tempat">
        <br>
        <label for="">waktu_masuk</label>
        <input type="text" name="waktu_masuk">
        <br>
        <label for="">tipe_kendaraan</label>
        <input type="text" name="tipe_kendaraan">
        <br>
        <label for="">waktu_keluar</label>
        <input type="text" name="waktu_keluar">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>