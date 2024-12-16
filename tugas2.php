<!DOCTYPE html>
<html>
<head>
    <title>Tugas2.php</title>
</head>
<body>
    <h2>Data Kategori Berdasarkan NRP</h2>
    <?php
    // Set your NRP value (replace it with your actual NRP)
    $nrp = 123456789; 
    $category = $nrp % 5;

    // Define data for each category
    $data = [
        0 => [
            "title" => "Perusahaan Teknologi",
            "items" => [
                ["name" => "Apple", "year" => 1976, "country" => "USA", "founder" => "Steve Jobs", "image" => "apple_logo.png"],
                ["name" => "Microsoft", "year" => 1975, "country" => "USA", "founder" => "Bill Gates", "image" => "microsoft_logo.png"]
            ]
        ],
        1 => [
            "title" => "Budaya Daerah di Indonesia",
            "items" => [
                ["name" => "Batik", "origin" => "Java", "year" => "Ancient", "description" => "Traditional cloth art", "image" => "batik.png"]
            ]
        ],
        // ... Define the other categories similarly ...
    ];

    // Display the chosen category based on NRP
    echo "<h3>Kategori: {$data[$category]['title']}</h3>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Name</th><th>Detail</th><th>Image</th></tr>";
    
    foreach ($data[$category]['items'] as $item) {
        echo "<tr>";
        echo "<td>" . $item['name'] . "</td>";
        echo "<td>" . implode(", ", $item) . "</td>";
        echo "<td><img src='" . $item['image'] . "' alt='Image' width='100'/></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>