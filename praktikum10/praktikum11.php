<!-- <?php
$students = ["adi", "budi", "caca", "eko"];
var_dump($students);
echo "<br><br>";

//Menampilakn value index ke-1 dan index ke-2 pada array
echo "$students[1] <br> $students[2] <br><br>";

//mengubah value index ke-1 dan index ke-2 pada array
$students[1] = "meyda";
var_dump($students);
echo "<br><br>";

$students[2] = "atika";
var_dump($students);
echo "<br><br>";

// menampilkan kembali value index ke-1 dan index ke-2 pada array yang telah diubah
echo "$students[1] <br> $students[2] <br><br>";
?> -->

<!-- <?php
$students = [
    [
        "nama" => "Ahmad Akmal",
        "nim" => "2011801265",
        "prodi" => "Pendidikan Komputer"
    ],
    [
        "nama" => "Aulia Yana",
        "nim" => "191101018",
        "prodi" => "Pendidikan Komputer"
    ],
    [
        "nama" => "Dede mahendra",
        "nim" => "19110128016",
        "prodi" =>  "Pendidikan komputer"
   ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P11</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>NIM</td>
            <td>Prodi</td>
        </tr>

<?php $no = 1; ?>
<?php foreach($students as $student): ?>
    <tr> 
        <td><?= $no++; ?></td> 
        <td><?= $student["nama"] ?></td> 
        <td><?= $student["nim"] ?></td> 
        <td><?= $student["prodi"] ?></td> 
    </tr> 
    <?php $no++;?>
    <?php endforeach; ?>

    </table>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
    border-collapse: collapse;
    width: 40%;
    color: black;
    font-family: monospace;
    font-size: 15px;
    text-align: center;
    }

    th {
    background-color: #588c7e;
    color: white;
    }

    tr:nth-child(even) {
    background-color: #f2f2f2
    }
</style>
<body>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>NIM</td>
        <td>Prodi</td>
    </tr>

        <?php 
        $conn = mysqli_connect("localhost:3308", "root", "", "php_sql");
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['nim']."</td>";
        echo "<td>".$row['prodi']."</td>";
        echo "</tr>";
        }
        ?>
</table>
</body>
</html>