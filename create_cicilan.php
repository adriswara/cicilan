<?php

// echo $_POST['username'];

if (isset($_POST['save'])) {
    include "connection.php";

    $j = $_POST["angsuran_ke"];
    $date = new DateTime();
    $y = 1;
    for ($i = 1; $i <= $j; $i++) {
        $date->modify("+{$y} month");
        $dateFormatted = $date->format('Y-m-d');
        $query = "INSERT INTO cicilan (id_kontrak, angsuran_ke, angsuran_per_bulan, tanggal_jatuh_tempo) VALUES ('$_POST[id_kontrak]','$i', '$_POST[angsuran_per_bulan]','$dateFormatted')";
        $create = mysqli_query($db_connection, $query);
    }


    if ($create) {
        echo "<script> alert('kontrak added succesfuly !'); </script>";
    } else {
        echo "<script> alert('kontrak add failed!'); </script>";
    }
}

?>
<script>
    window.location.replace("read_kontrak.php");
</script>