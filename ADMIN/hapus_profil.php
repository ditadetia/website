<?php
include "../config.php";
$id = $_GET['id'];
$nama = $_GET['nama'];
  $delete = $conn->query("DELETE FROM tim WHERE id='$id'");
  if($delete)
  {
    ?>
    <script language="javascript">
                alert('Berhasil menghapus data tim');
                document.location="profile.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal menghapus data tim!');
                document.location="profile.php";
            </script>
    <?php } ?>
