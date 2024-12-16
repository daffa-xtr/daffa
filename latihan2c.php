<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
        .box {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 2px;
            font-size: 16px;
        }
        .row {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<div class='row'>";
        for ($j = 1; $j <= $i; $j++) {
            $class = ($i % 2 == 0) ? 'genap' : 'ganjil';
            echo "<div class='box $class'>$j</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>