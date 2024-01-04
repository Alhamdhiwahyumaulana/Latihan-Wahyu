<?php
function ganti_style($tulisan, $kelas) {
    $styled_text = '<span class="' . $kelas . '"> ' . $tulisan . ' </span>';
    return $styled_text;
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .ganti-style {
            font-size: 30px;
            font-family: Arial, sans-serif;
            color: #000080;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $hasil = ganti_style($tulisan, $kelas);

    echo $hasil;
    ?>
</body>
</html>
