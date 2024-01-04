<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title> latihan2a</title>

</head>

<body>

    <table border="1" cellpadding="3" cellspacing="0">

        <tr>

            <th> Kolom 1 </th>
            <th> Kolom 2 </th>
            <th> Kolom 3 </th>
            <th> Kolom 4 </th>
            <th> Kolom 5 </th>

        </tr>

        <?php

        $jb = 15;
        $jk = 5;


        for ($barisWahyu = 1; $barisWahyu <= $jb; $barisWahyu++) {
            echo "<tr>";
            for ($kolomWahyu = 1; $kolomWahyu <= $jk; $kolomWahyu++) {
                echo "<td>Baris $barisWahyu Kolom $kolomWahyu</td>";
            }
            echo "</tr>";
        }

        ?>
        
    </table>

</body>

</html>