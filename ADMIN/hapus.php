<?php
include ("../config.php");
  $sql = $conn->query("SELECT file_name FROM uu WHERE file_name='$name'");
  $row = $sql->fetch_assoc();
    if(file_exists("uu/$row[file_name]"))
    {
      unlink("uu/$row[file_name]");
    }
?>
