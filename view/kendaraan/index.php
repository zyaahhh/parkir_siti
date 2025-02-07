<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(238, 181, 233);
            margin: 0;
            padding: 0;
        }

        header {
          background-color: #34495e;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: honeydew;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color:rgb(240, 22, 156);
            color: white;
        }

        tr:nth-child(even) {
            background-color:rgb(241, 121, 195);
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .actions a {
            text-decoration: none;
            color: #2980b9;
            margin: 0 10px;
        }

        .actions a:hover {
            color: #e74c3c;
        }

        .add-btn {
            background-color:rgb(241, 121, 195);
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .add-btn:hover {
            background-color:rgb(241, 121, 195);
        }
    </style>
</head>
<body>
    
    <div class="container">
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
</div>
</body>
</html>