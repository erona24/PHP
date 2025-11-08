<!DOCTYPE html>
<html>
<head>
    <title>Mini Challenge</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #c09a9aff;
        }
        td {
            background-color:#d6babaff;
        }
    </style>
</head>
<body>

<?php
// Data for table
$phones = [
    ["Iphone 14", 20, 10],
    ["Iphone 13", 20, 20],
    ["Iphone 12", 20, 25],
    ["Iphone 11", 25, 40]
];

// Table headers
$headers = ["Phones", "In stock", "Sold"];

// Create the table
echo "<table>";
echo "<tr>";
// Loop through headers
foreach ($headers as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";

// Loop through rows (outer loop)
for ($i = 0; $i < count($phones); $i++) {
    echo "<tr>";
    // Loop through columns (inner loop)
    for ($j = 0; $j < count($phones[$i]); $j++) {
        echo "<td>" . $phones[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
