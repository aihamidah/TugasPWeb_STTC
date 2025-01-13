<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        form {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Form Data Diri Dosen</h2>

    <form action="submit_dosen.php" method="POST">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>

        <label for="nidn">NIDN:</label>
        <input type="text" id="nidn" name="nidn" placeholder="Masukkan NIDN" required>

        <label for="program_studi">Program Studi:</label>
        <select id="program_studi" name="program_studi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required>

        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>

        <label for="address">Alamat:</label>
        <textarea id="address" name="address" rows="4" placeholder="Masukkan alamat lengkap"></textarea>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
