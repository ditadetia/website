<?php
include("../config.php");
$lokasi_file = $_FILES['myFile']['tmp_name'];
$tipe_file   = $_FILES['myFile']['type'];
$nama_image   = $_FILES['myFile']['name'];
$id_image   = $_FILES['myFile']['id'];
$direktori   = "image/$nama_image";
if (!empty($lokasi_file))
{
  move_uploaded_file($lokasi_file,$direktori);
  $insert = $conn->query("INSERT INTO dtimage(id_image, nama_image, kategori) VALUES('', '$nama_image', 'partnership')");
  if($insert)
  {
    ?>
    <script language="javascript">
                alert('Berhasil menambahkan gambar');
                document.location="partnership.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal menambahkan gambar!');
                document.location="partnership.php";
            </script>
    <?php
          }
  }
  ?>
