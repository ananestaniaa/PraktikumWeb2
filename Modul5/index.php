<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('Gambar/Background.png');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #b0005f;
            font-size: 50px;
            text-align: center;
            margin-bottom: 5px;
        }

        h2 {
            color: #ff1493;
            font-size: 30px;
            margin-top: 0px;
            text-align: center;
            margin-bottom: 20px;
        }

        .table-container {
            display: inline-block;
            margin-right: 20px;
            text-align: center;
        }

        table {
            border-collapse: separate;
            border: 2px solid #ffb6c1;
            border-radius: 10px;
            background-color: #ffb6c1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        table:hover,
        table:active {
            transform: scale(1.05);
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: none;
        }

        th {
            background-color: #ff69b4;
            color: #FFFFFF;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        td a {
            text-decoration: none;
        }

        .content-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .table-container {
            margin-right: 20px;
        }

        @media screen and (max-width: 600px) {
            .content-container {
                flex-direction: column;
                align-items: center;
            }

            .table-container {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <h1 style="font-family: 'Playfair Display', serif;">Self Improvement</h1>
    <h2 style="font-family: 'Playfair Display', serif;">E-library</h2>
    <div class="content-container">
        <div class="table-container"> 
            <table>
                <tr>
                    <th>Buku</th>
                </tr>
                <tr>
                    <td><a href="Buku.php"><img src="Gambar/buku.png" alt="" height="170" width="200"></a></td><!--Tautan ke halaman "Buku.php".-->
                </tr>
            </table>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>Member</th>
                </tr>
                <tr>
                    <td><a href="Member.php"><img src="Gambar/member.png" alt="" height="170" width="210"></a></td><!--Tautan ke halaman "Member.php".-->
                </tr>
            </table>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>Peminjaman</th>
                </tr>
                <tr>
                    <td><a href="Peminjaman.php"><img src="Gambar/pinjam.png" alt="" height="170" width="200"></a></td><!--Tautan ke halaman "Peminjaman.php".-->
                </tr>
            </table>
        </div>
    </div>
</body>
</html>