<?php
include ("../config.php");
$id  = $conn->real_escape_string($_POST['id']);
$nama   = $conn->real_escape_string($_POST['nama']);
$email  = $conn->real_escape_string($_POST['email']);
$user   = $conn->real_escape_string($_POST['username']);
$pass   = $conn->real_escape_string($_POST['password']);
  $update = $conn->query("UPDATE user SET nama='$nama', email='$email', username='$user', password='$pass'   where id = '$id'");
  if($update)
  {
    ?>
    <script language="javascript">
                alert('Berhasil memperbarui data');
                document.location="admin.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal memperbarui data!');
                document.location="admin.php";
            </script>
    <?php } ?>
