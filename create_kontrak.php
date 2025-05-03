<?php

// echo $_POST['username'];

if (isset($_POST['save'])) {
    include "connection.php";



    $query = "INSERT INTO kontrak (nama_pelanggan, otr, dp, jangka_waktu) VALUES ('$_POST[nama_pelanggan]','$_POST[otr]', '$_POST[dp]','$_POST[jangka_waktu]')";
    $create = mysqli_query($db_connection, $query);

    if ($create) {
        // echo "<p>Pet added succesfully !</p>";
        echo "<script> alert('kontrak added succesfuly !'); </script>";
    } else {
        // echo "<p>Pet add failed !</p>";
        echo "<script> alert('kontrak add failed!'); </script>";
    }
}

?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
    window.location.replace("index.php");
</script>