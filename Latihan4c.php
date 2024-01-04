<?php

$negara_asean = array(
            "Indonesia" => "D.K.I. Jakarta",
            "Singapura" => "Singapura",
            "Malaysia"  => "Kuala Lumpur",
            "Brunei"    => "Bandar Seri Begawan",
            "Thailand"  => "Bangkok",
            "Laos"      => "Vientiane",
            "Filipina"  => "Manila",
            "Myanmar"   => "Naypyidaw");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>
<body>

<h3>Daftar Negara ASEAN dan Ibukotanya :</h3>

<ul>
    <?php
        foreach ($negara_asean as $negara => $ibukota) {
            echo "<li>$negara: $ibukota</li>";
        }
    ?>
</ul>

</body>
</html>
