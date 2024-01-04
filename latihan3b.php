<!DOCTYPE html>
<html>
<head>
    <title>Penjelasan Isset dan Empty</title>
    <style>
        .border-box {
            border: 1px solid #000;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="border-box">
        <?php
        $jawabanIsset = "Isset adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel telah dideklarasikan dan memiliki nilai (tidak null).<br><br>";
        $jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel kosong atau memiliki nilai yang dinilai sebagai 'kosong' (null, string kosong, atau integer 0).<br><br>";

        function soal($style, $jawabanIsset, $jawabanEmpty) {
            echo "<p style='$style'>$jawabanIsset</p>";
            echo "<p style='$style'>$jawabanEmpty</p>";
        }

        soal("font-size: 16px; color: black;", $jawabanIsset, $jawabanEmpty);
        ?>
    </div>
</body>
</html>
