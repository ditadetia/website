<?php
include ("config.php");
$id       = $_GET['id'];
$sql      = $conn->query("SELECT * FROM tbl_berita WHERE id='$id'");
$data     = $sql->fetch_array();
$judul		= $data['judul'];
$isi    	= $data['isi'];
$gambar 	= $data['gambar'];
?>
