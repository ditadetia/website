<?php
include "../config.php";
$id = $_GET['id'];
  $delete = $conn->query("DELETE FROM tblartikel WHERE id='$id'");
  if($delete)
  {
    ?>
    <script language="javascript">
                alert('Berhasil menghapus artikel');
                document.location="artikel.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal menghapus artikel!');
                document.location="artikel.php";
            </script>
    <?php } ?>
