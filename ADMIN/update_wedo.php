<?php
include ("../config.php");
$id = $conn->real_escape_string($_POST['id']);
$bidang = $conn->real_escape_string($_POST['bidang']);
$isi      = $conn->real_escape_string($_POST['isi']);
  $update = $conn->query("UPDATE wedo SET bidang='$bidang', isi='$isi' where id='$id'");
  if($update)
  {
    ?>
    <script language="javascript">
                alert('Berhasil memperbarui data');
                document.location="wedo.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal memperbarui data!');
                document.location="wedo.php";
            </script>
    <?php } ?>
