<?php include "template/header.php" ?>

<p><a href="index.php">input kontrak</a></p>

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">otr</th>
      <th scope="col">dp</th>
      <th scope="col">jangka waktu</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>

  <?php
  include "connection.php";
  $query = "SELECT * FROM kontrak";
  $kontrak = mysqli_query($db_connection, $query);

  $i = 1;
  foreach ($kontrak as $data) :
  ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $i++; ?></th>
        <td><?php echo $data['nama_pelanggan'] ?></td>
        <td><?php echo $data['otr'] ?></td>
        <td><?php echo $data['dp'] ?></td>
        <td><?php echo $data['jangka_waktu'] ?></td>
        <td><a href="edit_cicilan.php?id=<?= $data['id_kontrak'] ?>"><button class="btn btn-outline-primary">Hitung</button></a></td>
        <td><a href="edit_kontrak.php?id=<?= $data['id_kontrak'] ?>"><button class="btn btn-outline-primary">Edit</button></a></td>
        <td><a href="delete_kontrak.php?id=<?= $data['id_kontrak'] ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
      </tr>
    </tbody>
  <?php endforeach ?>


</table>
<!-- table -->