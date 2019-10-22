<?php
include "../config.php";
$id = $_GET['id'];
  $delete = $conn->query("DELETE FROM tbl_berita WHERE id='$id'");
  if($delete)
  {
    ?>
    <script language="javascript">
                alert('Berhasil menghapus berita');
                document.location="news.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal menghapus berita!');
                document.location="news.php";
            </script>
    <?php } ?>
