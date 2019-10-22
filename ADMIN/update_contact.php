<?php
include ("../config.php");
$id = $conn->real_escape_string($_POST['id']);
$kategori = $conn->real_escape_string($_POST['kategori']);
$isi      = $conn->real_escape_string($_POST['isi']);
  $update = $conn->query("UPDATE footer SET kategori='$kategori', isi='$isi' where id='$id'");
  if($update)
  {
    ?>
    <script language="javascript">
                alert('Success update');
                document.location="contact.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Failed to update!');
                document.location="contact.php";
            </script>
    <?php } ?>
