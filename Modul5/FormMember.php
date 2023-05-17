<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editmember();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
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

        input[type="text"],
        input[type="datetime-local"],
        input[type="date"] {
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
    <h2>Form Pendataan Member</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td><input type="datetime-local" name="daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Batas Pembayaran</td>
                <td><input type="date" name="bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <a href="Member.php" class="button-kembali">Kembali</a>
                </td>
                <td>
                    <?php 
                    if (isset($_GET['id_member']))
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
        tambahmember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    if (isset($_POST['update'])) {
       updatemember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    ?>

</body>
</html>