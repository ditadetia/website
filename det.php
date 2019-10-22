<?php
include ("config.php");
$id         = $_GET['id'];
$sql        = $conn->query("SELECT * FROM tblartikel WHERE id='$id'");
$data       = $sql->fetch_array();
$judul			= $data['judul_artikel'];
$isi    		= $data['isi_artikel'];
$nama_image = $data['nama_image'];
?>
