<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302.php</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi : <input type="number" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="alamatgambar"><br>
        <input type="submit" name="Cetak" value="Cetak">
    </form>

    <?php
    if (isset ($_POST['Cetak'])) {
        $tinggi = $_POST['tinggi'];
        $alamatgambar = $_POST['alamatgambar'];
        $i=1; $j=1; $k=$tinggi;
    } 
    ?>

    <?php if (isset ($_POST['Cetak'])) :?>
        <?php while ($i <=$tinggi) { ?>
            <?php while($j < $i ) { ?>
                <img style="width: 25px; opacity: 0;" src=<?= "$alamatgambar"; ?> alt="">
                <?php $j = $j + 1; ?>
            <?php } ?>
            <?php while($k >= $i) { ?>
                <img style="width : 25px" src=<?= "$alamatgambar"; ?> alt="">
                <?php $k = $k - 1; ?>
            <?php } ?>
        <br>
        <?php
            $j = 1; $k = $tinggi;
            $i = $i + 1;
        ?>
        <?php } ?>
    <?php endif; ?>
</body>
</html>