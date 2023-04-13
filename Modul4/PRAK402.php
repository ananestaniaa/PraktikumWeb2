<?php
$mahasiswa = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
];

for ($i=0; $i < count ($mahasiswa); $i++) {
    $mahasiswa [$i]["akhir"] = $mahasiswa [$i]["uts"] * 0.4 + $mahasiswa [$i] ["uas"] * 0.6;
    if ($mahasiswa [$i]["akhir"] >= 80) {
        $mahasiswa [$i]["huruf"] = "A";
    } elseif ($mahasiswa [$i]["akhir"] > 70) {
        $mahasiswa [$i]["huruf"] = "B";
    } elseif ($mahasiswa [$i]["akhir"] > 60) {
        $mahasiswa [$i]["huruf"] = "C";
    } elseif ($mahasiswa [$i]["akhir"] > 50) {
        $mahasiswa [$i]["huruf"] = "D";
    } else {
        $mahasiswa [$i]["huruf"] = "E";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402.php</title>
</head>
<body>
    <table>
        <tr style="background-color: #CCCDCC;">
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
        </tr>

        <?php
        for ($i=0; $i < count($mahasiswa); $i++) {
            echo "<tr>";
            echo "<td>".$mahasiswa [$i]["nama"]."</td>";            
            echo "<td>".$mahasiswa [$i]["nim"]."</td>";            
            echo "<td>".$mahasiswa [$i]["uts"]."</td>";            
            echo "<td>".$mahasiswa [$i]["uas"]."</td>";            
            echo "<td>".$mahasiswa [$i]["akhir"]."</td>";            
            echo "<td>".$mahasiswa [$i]["huruf"]."</td>";            
            echo "</tr>";
        }
        ?>
</body>
</html>