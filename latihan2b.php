<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    $rows = 5; // Jumlah baris

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>