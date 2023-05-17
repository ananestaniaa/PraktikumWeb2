<?php
require('Model.php'); 
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Buku</title> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            width: 950px;
            margin: auto;
            background-color: #ffc0cb;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
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
        }

        td {
            background-color: #FFFFFF;
        }

        h2 {
            color: #b0005f;
            font-size: 28px;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        button {
            font-family: 'Poppins', sans-serif;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5E2612;
        }

        .home-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            transition: transform 0.3s;
        }

        .home-icon:hover,
        .home-icon:active {
            transform: scale(1.1);
        }

        img {
            border: none;
        }
    </style>
</head>

<body>
<h2>Daftar Buku</h2>
    <table> 
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilbuku(); 
            ?>
        </tbody>
    </table>
    <br>
    <div style="text-align: center;">
        <a href="index.php">
            <button style="background-color: #FFB200;">Kembali</button>
        </a>
        <a href="FormBuku.php">
            <button style="background-color: #ff1493;">Tambah Buku</button>
        </a>
    </div>
</html>