<!DOCTYPE html>
<html>
<head>
    <title>Pangkat</title>
    <style>
        .result-box {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php
        function pangkat($angka, $pangkat) {
            return pow($angka, $pangkat);
        }

        $angka = 5;
        $pangkat = 4;
        $hasil = pangkat($angka, $pangkat);

        echo "<h1>$angka pangkat $pangkat = $hasil</h1>";
        ?>
    </div>
</body>
</html>
