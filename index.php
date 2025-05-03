<?php include "template/header.php" ?>

<div class="row">
  <div class="col-sm"></div>
  <div class="col-sm mt-1">
  <form method="POST" action="create_kontrak.php">
        <table>
            <tr>
                <td>pelanggan</td>
                <td><input type="text" name="nama_pelanggan" required></td>
            </tr>
            <tr>
                <td>otr</td>
                <td><input type="text" name="otr" required></td>
            </tr>
            <tr>
                <td>dp</td>
                <td><input type="text" name="dp" required></td>
            </tr>
            <tr>
                <td>jangka waktu</td>
                <td><input type="text" name="jangka_waktu" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
  </div>
  <div class="col-sm"></div>
</div>
</body>

<script>

</script>

</html>