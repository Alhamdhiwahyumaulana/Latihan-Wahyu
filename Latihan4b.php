<?php

$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

$negara_asean[] = "Laos";
$negara_asean[] = "Filipina";
$negara_asean[] = "Myanmar";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Negara ASEAN</title>
</head>
<body>

<h3>Daftar Negara ASEAN awal :</h3>
<ul>
    <?php
        foreach ($negara_asean as $negara) {
            echo "<li>$negara</li>";
        }
    ?>
</ul>

<h3>Daftar Negara ASEAN baru :</h3>
<ul>
    <?php
        foreach ($negara_asean as $negara) {
            echo "<li>$negara</li>";
        }
    ?>
</ul>

</body>
</html>
