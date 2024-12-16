<!DOCTYPE html>
<html>
<head>
    <title>Latihan4a.php</title>
</head>
<body>
    <h2>Array Warna</h2>

    <?php
    // Buat array dengan elemen yang diminta
    $colors = ["hijau", "kuning", "kelabu", "merah muda"];

    // Tampilkan semua isi array dalam bentuk kalimat
    echo "<p>Balonku ada lima.<br>";
    echo "Rupa-rupa warnanya: ";

    // Gabungkan isi array dengan tanda koma
    echo implode(", ", $colors);

    echo ", dan biru.<br>";
    echo "Meletus balon <span style='color:green;'><strong>" . $colors[0] . "</strong></span> DOR!!!<br>";
    echo "Hatiku sangat kacau.</p>";
    ?>
</body>
</html>