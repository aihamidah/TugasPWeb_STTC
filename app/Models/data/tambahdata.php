<?php
include 'konfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no       = $_POST['no'];
    $nama     = $_POST['nama'];
    $NIDN     = $_POST['NIDN'];
    $fakultas = $_POST['fakultas'];
    $keahlian = $_POST['keahlian'];

    $query = "INSERT INTO tb_dosen (no, nama, NIDN, fakultas, keahlian) 
              VALUES ('$no', '$nama', '$NIDN', '$fakultas', '$keahlian')";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan!";
        header("Location: index.php"); // Redirect ke index.php
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            vertical-align: middle;
        }

        table input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Tambah Data Dosen</h2>
        <form method="POST" action="tambahdata.php">
            <table>
                <tr>
                    <td><label for="no">No:</label></td>
                    <td><input type="number" name="no" id="no" required></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama:</label></td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td><label for="NIDN">NIDN:</label></td>
                    <td><input type="text" name="NIDN" id="NIDN" required></td>
                </tr>
                <tr>
                    <td><label for="fakultas">Fakultas:</label></td>
                    <td><input type="text" name="fakultas" id="fakultas" required></td>
                </tr>
                <tr>
                    <td><label for="keahlian">Keahlian:</label></td>
                    <td><input type="text" name="keahlian" id="keahlian" required></td>
                </tr>
            </table>
            <button type="submit">Tambah Data</button>
        </form>
        <a href="index.php"><button>Kembali</button></a>
    </div>
    
</body>
</html>
