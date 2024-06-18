<?php
$conn = mysqli_connect("localhost:3308", "root", "", "db_prak11");
$sql = "SELECT nama, nim FROM mahasiswa ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

while($row) {
    echo "Nama : " . $row['nama']. "" . $row['nim']. "<br>";

    $row = mysqli_fetch_assoc($result);
}
?>