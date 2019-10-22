<?php
include ("config.php");
$id            = $_POST['id'];
$nama          = $_POST['nama'];
$message       = $_POST['message'];
$insert = $conn->query("INSERT INTO pesan VALUES('', '$nama', '$message')");
if($insert)
  {
  ?>
      <script language="javascript">
      alert('Berhasil mengirim pesan.');
      document.location="contact.php";
      </script>
  <?php
  } else {
  ?>
  		<script language="javascript">
      alert('Gagal mengirim pesan!');
      document.location="contact.php";
      </script>
  <?php
  }
  ?>
