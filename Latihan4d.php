<?php

$negara_info = array(
    array("Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"),
    array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
    array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
    array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
    array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
    array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
    array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
    array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
);

$urutan_negara = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar");
$negara_info_urut = array();
foreach ($urutan_negara as $negara) {
    foreach ($negara_info as $info) {
        if ($info["Negara"] === $negara) {
            $negara_info_urut[] = $info;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Negara ASEAN dan Informasi</title>
</head>
<body>

<h3>Daftar Negara ASEAN dan Informasi :</h3>
<table border="1">
    <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
    </tr>
    <?php
    
    foreach ($negara_info_urut as $info) {
        echo "<tr>";
        echo "<td>{$info['Negara']}</td>";
        echo "<td>{$info['Ibukota']}</td>";
        echo "<td>{$info['Kode Telepon']}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>