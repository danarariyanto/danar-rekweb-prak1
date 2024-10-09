<?php
// Membuat variabel JSON
$jsonData = '{"nama":"Danar Ariyanto","usia":20,"pekerjaan":"Belom Bekerja","hobi":["Motoran","biliard","Coding"]}';

// Decode JSON ke Objek
$jsonObject = json_decode($jsonData);

// Mengakses Objek JSON
echo "Mengakses nilai dari PHP Objek:" . "<br>";
echo "Nama: " . $jsonObject->nama . "<br>";
echo "Usia: " . $jsonObject->usia . "<br>"; // Menambahkan titik di sini
echo "Pekerjaan: " . $jsonObject->pekerjaan . "<br><br>";

// Mengakses Array Hobi
echo "Mengakses Nilai dari PHP Array:" . "<br>";
echo "Hobi:" . "<br>";
echo "<ul>";
foreach ($jsonObject->hobi as $key => $hobi) {
    echo "<li>" . $hobi . "</li>";
}
echo "</ul>";
?>
