<?php
include "../config.php";
$id = $_GET['id'];
  $delete = $conn->query("DELETE FROM pesan WHERE id='$id'");
  if($delete)
  {
    ?>
    <script language="javascript">
                alert('Berhasil menghapus pesan');
                document.location="inbox.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal menghapus pesan!');
                document.location="inbox.php";
            </script>
    <?php } ?>
