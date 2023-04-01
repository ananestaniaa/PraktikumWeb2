<?php
$pesanNama = $pesanNim = $result = $pesanJK="";
$nama = $nim= $jeniskelamin = "";

if (isset($_POST['submit'])) {    
    if (empty($_POST['nama'])) {
        $pesanNama = "Nama tidak boleh kosong";
    } else {
        $nama = cek_input ($_POST['nama']);
    }
    if (empty($_POST['nim'])) {        
        $pesanNim = "Nim tidak boleh kosong";    
    } else {        
        $nim = cek_input($_POST['nim']);    
    }    
    if (empty($_POST['jeniskelamin'])) {        
        $pesanJK = "Jenis Kelamin tidak boleh kosong";    
    } else {        
        $jeniskelamin = cek_input($_POST['jeniskelamin']);    
    }
}

function cek_input($data)
{    
    $data = trim($data);    
    $data = stripslashes($data);    
    $data = htmlspecialchars($data);    
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202.php</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        Nama  : <input type="text" name="nama" value="<?=$nama?>"><span class="error">* <?=$pesanNama;?></span></br>  
        Nim   : <input type="text" name="nim"  value="<?=$nim ?>"><span class="error">* <?=$pesanNim;?></span></br>
        Jenis Kelamin   : <span class="error">* <?=$pesanJK;?></span></br>
        <input type="radio" name="jeniskelamin" value="Laki-Laki"<?php if (isset($_POST["jeniskelamin"]) == "Laki-Laki") echo "checked";?> >Laki-Laki<br>
        <input type="radio" name="jeniskelamin" value="Perempuan"<?php if (isset($_POST["jeniskelamin"]) == "Perempuan") echo "checked";?> >Perempuan<br>
        <input type="submit" name="submit" value="Submit">
    </form><br>

    <?php
    if(!empty($nama) && !empty($nim) && !empty($jeniskelamin)) {
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jeniskelamin <br>";
    }
    ?>
</body>
</html>