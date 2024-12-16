<!DOCTYPE html>
<html>
<head>
    <title>Latihan4b.php</title>
</head>
<body>
    <h2>Daftar Negara ASEAN</h2>

    <?php
    // Array awal dengan 5 elemen negara
    $negara_ASEAN = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

    // Menampilkan daftar negara ASEAN awal
    echo "<h3>Daftar Negara ASEAN Awal :</h3>";
    echo "<ul>";
    foreach ($negara_ASEAN as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    // Menambahkan 3 elemen baru ke array
    array_push($negara_ASEAN, "Laos", "Filipina", "Myanmar");

    // Menampilkan daftar negara ASEAN baru
    echo "<h3>Daftar Negara ASEAN Baru :</h3>";
    echo "<ul>";
    foreach ($negara_ASEAN as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>