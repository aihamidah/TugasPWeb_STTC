<?php
include 'konfig.php';

$query = "SELECT * FROM tb_dosen";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 { text-align: center; }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #e2e2e2; }
    </style>
</head>
<body>
    <center><h2>Data Dosen</h2></center>
    <div class="add-btn">
    <center><a href="tambahdata.php"><button>Tambah Data</button></a></center>
</div>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Fakultas</th>
            <th>Keahlian</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row['no']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['NIDN']; ?></td>
            <td><?php echo $row['fakultas']; ?></td>
            <td><?php echo $row['keahlian']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="../index.html"><button>Kembali</button></a>
</body>
</html>
