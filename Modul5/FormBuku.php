<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Edit Buku</title>"?> 
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
            color: black;
        }

        td:first-child {
            font-weight: normal;
            width: 150px;
        }

        input[type="text"] {
            width: 300px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #5E2612;
            font-family: 'Poppins', sans-serif;
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
    <h2>Form Pendataan Buku</h2>
    <form action="" method="post"> 
        <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td>
                    <a href="Buku.php" class="button-kembali">Kembali</a>
                </td>
                <td>
                    <?php 
                    if (isset($_GET['id_buku']))
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
        tambahbuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updatebuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>

</body>
</html>