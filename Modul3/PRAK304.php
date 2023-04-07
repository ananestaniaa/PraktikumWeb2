<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304.php</title>
</head>
<body>
    <?php
    $star = NULL;
    $pict = "Bintang.PNG";

    if (isset($_POST['star'])) {     
        $star = $_POST['star']; 
    }
    if (isset($_POST['tambah'])) {     
        $star++; 
    } 
    if (isset($_POST['kurang'])){     
        $star--; 
    }
    ?>
    <?php
        if ($star == null) {
    ?>
        <form action="" method="POST">
            Jumlah bintang : 
            <input type ="number" name="star" required><br>     
            <button type = "submit">Submit</button><br> 
        </form> 
    <?php
        } else {
            echo "Jumlah bintang  $star "; ?> <br><br>
        
        <?php for ($i = 0; $i < $star; $i++) { ?>
            <img src="<?=$pict ?>" width="80px" height="80px">
        <?php } ?>
            
        <form action="" method="POST">
            <input type="text" name="star" value="<?= $star ?>" hidden>
            <button type="submit" name="tambah" value="tambah">Tambah</button>
            <button type="submit" name="kurang" value="kurang">Kurang</button>
        </form>
    <?php
    } 
    ?>
</body>
</html>