
<!-- <table border = "1">
    <?php
        for($i = 1; $i<=3; $i++){
            echo "<tr>";
            for($j = 1; $j<=5; $j++){
                echo "<td> baris $i, kolom $j </td>";
            }
            echo "</tr>";
        }
    ?>
</table> -->

<!DOCTYPE html>
<html lang="en">
<body>
    <ul>
        <?php for($i = 1; $i < 10; $i++) : ?>
            <li>List Ke-<?= $i ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>