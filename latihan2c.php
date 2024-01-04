<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2c</title>

    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
        }

        .outbox {
            border: 3px solid blue;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }

        .box {
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
    <div class="outbox">

        <?php
        for ($x = 1; $x <= 5; $x++) {

            $z = ($x % 2 == 0) ? 'genap' : 'ganjil';

            for ($y = 1; $y <= $x; $y++) {
                echo "<div class='box $z'>" . $y . "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>

</body>

</html>