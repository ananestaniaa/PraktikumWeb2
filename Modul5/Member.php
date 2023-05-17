<?php 
require('Model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            width: 1000px;
            margin: auto;
            background-color: #ffc0cb;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #b0005f;
            font-size: 28px;
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid #b0005f;
            font-style: normal;
        }

        th {
            background-color: #ff1493;
            color: black;
            padding: 10px;
        }

        td {
            background-color: #FFFFFF;
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: #5E2612;
        }

        button {
            font-family: 'Poppins', sans-serif;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #5E2612;
        }

        .home-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .home-icon:hover,
        .home-icon:active {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <h2>Daftar Member</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
    <br>
    <div style="text-align: center;">
        <a href="index.php">
            <button style="background-color: #FFB200;">Kembali</button>
        </a>
        <a href="FormMember.php">
            <button style="background-color: #ff1493;">Tambah Member</button>
        </a>
    </div>
</body>
</html>