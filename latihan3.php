<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Siswa PWBP</title>
</head>
<body>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];

        if ($nilai >= 86 && $nilai <= 100) {
            echo "Nilai: A<br>Keterangan: Sangat Baik";
        } elseif ($nilai >= 76 && $nilai <= 85) {
            echo "Nilai: B<br>Keterangan: Baik";
        } elseif ($nilai >= 66 && $nilai <= 75) {
            echo "Nilai: C<br>Keterangan: Cukup";
        } elseif ($nilai >= 0 && $nilai <= 65) {
            echo "Nilai: D<br>Keterangan: Kurang";
        } else {
            echo "Nilai Diluar Range";
        }
    }
    ?>
</body>
</html>