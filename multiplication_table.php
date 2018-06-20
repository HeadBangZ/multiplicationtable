<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication Table</title>
    <style>
        h2 {
            font-size: 30px;
            color: firebrick;
        }
        th {
            width: 40px;
            height: 40px;
            background: goldenrod;
            font-size: 18px;
            padding: 10px;
        }
        td {
            padding: 20px;
            background: dodgerblue;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }

    </style>
</head>
<body>
<?php
    $num = 13;
?>
    <h2>Multiplication Table</h2>
    <table>
        <?php
            echo "<tr>";
            echo "<th>&nbsp;</th>";
                for ($i = 1; $i < $num; $i++) {
                    echo "<th>$i</th>";
                }
            echo "</tr>";
            for ($row = 1, $col = 1; $row < $num; $row++) {
                echo "<tr>";
                if ($col == 1) {
                    echo "<th>$row</th>";
                }
                while ($col < $num) {
                    echo "<td> " . $row * $col++ . "</td>";
                }
                echo "</tr>";
                $col = 1;
            }
        ?>
    </table>
</body>
</html>