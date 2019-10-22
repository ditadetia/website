<?php
include "../config.php";
$id_image = $_GET['id_image'];
  $delete = $conn->query("DELETE FROM dtimage WHERE id_image='$id_image'");
  if($delete)
  {
    ?>
    <script language="javascript">
                alert('Berhasil menghapus gambar');
                document.location="partnership.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal menghapus gambar!');
                document.location="partnership.php";
            </script>
    <?php } ?>
