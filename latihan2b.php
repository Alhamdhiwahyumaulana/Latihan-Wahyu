<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> latihan2b </title>
    <style>
        .kotak {
            border: 3px black;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }


        .clear {
            border: 3px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="kotak">

        <?php
        for ($alhamdhiwahyumaulana = 1; $alhamdhiwahyumaulana <= 5; $alhamdhiwahyumaulana++) {
            for ($wahyu = 1; $wahyu <= $alhamdhiwahyumaulana; $wahyu++) {
                echo "<div class='clear'>" . $wahyu . "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>
</body>

</html>