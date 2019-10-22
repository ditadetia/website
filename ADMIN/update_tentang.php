<?php
include ("../config.php");
$id = $conn->real_escape_string($_POST['id']);
$tentang = $conn->real_escape_string($_POST['tentang']);
  $update = $conn->query("UPDATE tentang SET tentang='$tentang' where id='$id'");
  if($update)
  {
    ?>
    <script language="javascript">
                alert('Berhasil memperbarui About');
                document.location="about.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal memperbarui About!');
                document.location="about.php";
            </script>
    <?php } ?>
