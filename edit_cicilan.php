<?php include "template/header.php" ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicilan</title>
</head>



<body>
    <h1>Cicilan</h1>
    <h3>Form Edit Cicilan</h3>
    <form method="POST" action="create_cicilan.php">
        <?php
        include "connection.php";
        $querry = "SELECT * FROM kontrak WHERE id_kontrak='$_GET[id]'";
        $pet = mysqli_query($db_connection, $querry);
        $data = mysqli_fetch_assoc($pet);
        ?>

        <?php
        $dp = $data["otr"] * ($data["dp"] / 100);
        $hutang = $data["otr"] - $dp;
        $bunga = (14 / 100);
        $hutangberbunga = $hutang * $bunga;
        $angsuran = $hutang + $hutangberbunga;
        $jangkawaktu = $data["jangka_waktu"];
        (int)$angsuranPerbulan = $angsuran / $jangkawaktu;
        $date = new DateTime();
        ?>

        <table>

            <tr>
                <td>Nomor Kontrak</td>
                <td>Angsuran Ke</td>
                <td>Angsuran Per Bulan</td>
                <td>Tanggal Jatuh Tempo</td>
            </tr>

            <!-- <tr>
                <td><input type='text' name='id_kontrak' value=" 1 " required></td>
                <td><input type='text' name='angsuran_ke' value="1" required></td>
                <td><input type='text' name='angsuran_per_bulan' value="1" required></td>
                <td><input type='date' name='tanggal_jatuh_tempo' value="  . "></td>
            </tr> -->

            <?php
            $j = 1;
            for ($i = 1; $i <= $data['jangka_waktu']; $i++) {
                echo "<tr>";
                echo "<td><input type='text' name='id_kontrak' value='" . $data['id_kontrak'] . "' required></td>";
                echo "<td><input type='text' name='angsuran_ke' value= $i required></td>";
                echo "<td><input type='text' name='angsuran_per_bulan' value=$angsuranPerbulan required></td>";
                $date->modify("+{$j} month");
                echo "<td><input type='text' name='tanggal_jatuh_tempo' value=" . date_format($date, "Y-m-d") . "></td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <!-- <input type="reset" name="reset" value="RESET"> -->
                    <!-- <input type="hidden" name="id" value=""> -->
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_admin.php">CANCEL</a></p>
</body>

</html>