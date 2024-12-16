<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1.php</title>
</head>
<body>
    <h2>Pengulangan untuk mencari kategori bilangan:</h2>
    <ul>
        <?php
        // Function to check if a number is prime
        function is_prime($num) {
            if ($num <= 1) return false;
            if ($num == 2) return true;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        // Loop to iterate numbers from 1 to 20
        for ($i = 1; $i <= 20; $i++) {
            $result = "Angka $i adalah bilangan ";
            
            // Check if the number is even or odd
            if ($i % 2 == 0) {
                $result .= "genap";
            } else {
                $result .= "ganjil";
            }
            
            // Check if the number is prime
            if (is_prime($i)) {
                $result .= " sekaligus bilangan prima";
            }
            
            echo "<li>$result</li>";
        }
        ?>
    </ul>
</body>
</html>