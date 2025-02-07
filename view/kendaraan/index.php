<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir</title>
</head>
<body>
    <h1>Data kendaraan</h1>
    <a href ="tambah.php">tambah kendaraan baru</a>
    <table border="1">
        <tr>
            <th>no.</th>
            <th>plat_no</th>
            <th>id_tempat</th>
            <th>waktu_masuk</th>
            <th>tipe_kendaraan</th>
            <th>waktu_keluar</th>
            <th>Aksi</th>
        </tr>
        <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM kendaraan");
        $no=1;
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result ['plat_no']?></td>
                    <td><?php echo $result ['id_tempat']?></td>
                    <td><?php echo $result ['waktu_masuk']?></td>
                    <td><?php echo $result ['tipe_kendaraan']?></td>
                    <td><?php echo $result ['waktu_keluar']?></td>
                    <td>
                        <a href ="">edit |</a>
                        <a href ="">hapus |</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
        }
        ?>
    </table>
</body>
</html>