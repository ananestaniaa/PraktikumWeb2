<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo (isset($_GET['id_peminjaman'])) ? "Edit Data Peminjaman" : "Tambah Data Peminjaman"; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            width: 900px;
            margin: auto;
            background-color: #ffc0cb;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
            position: relative; 
        }

        h2 {
            color: #b0005f;
            font-size: 28px;
            margin-top: 0;
            text-align: center; 
            margin-bottom: 20px;
        }

        table {
            margin-right: auto; 
            margin-left: auto;
        }

        tr {
            margin-bottom: 10px;
        }

        td:first-child {
            font-weight: normal;
            width: 150px;
        }

        input[type="text"],
        input[type="date"] {
            width: 300px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #5E2612;
            font-family: 'Quicksand', sans-serif;
        }

        button {
            font-family: 'Poppins', sans-serif;
            background-color: #ff1493;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #5E2612;
        }
        .button-kembali {
          font-family: 'Poppins', sans-serif;
          background-color: #FFB200;
          color: #FFFFFF;
          border: none;
          padding: 8.5px 20px;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s ease-in-out;
          margin-right: 5px;
          text-decoration: none;
        }

        .button-tambah {
          font-family: 'Poppins', sans-serif;
          background-color: #ff1493;
          color: #FFFFFF;
          border: none;
          padding: 10px 20px;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s ease-in-out;
          margin-right: 10px;
          text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Form Peminjaman</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Pengembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <a href="Peminjaman.php" class="button-kembali">Kembali</a>
                </td>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman']))
                    {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['id_buku'], $_POST['id_member'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['id_buku'], $_POST['id_member'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
    
</body>
</html>