<?php
include ("../config.php");
$id = $conn->real_escape_string($_POST['id']);
$judul = $conn->real_escape_string($_POST['judul']);
$isi   = $conn->real_escape_string($_POST['isi']);
$gambar  = $_FILES['filegbr']['name'];
$namafolder  = "../"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
  {
    $lampiran = $namafolder . basename($_FILES['filegbr']['name']);
      //mengupload gambar dan update row table database dengan path folder dan nama image
      if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran))
      {
  $update = $conn->query("UPDATE tblartikel SET judul='$judul', isi='$isi', gambar='$gambar' where id='$id'");
  if($update)
  {
    ?>
    <script language="javascript">
                alert('Berhasil memperbarui Artikel');
                document.location="artikel.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal memperbarui Artikel!');
                document.location="artikel.php";
            </script>
    <?php
          }
        }
      }
    } else {
      if(empty($_FILES["filegbr"]["tmp_name"]))
      {
        $update = $conn->query("UPDATE tblartikel SET judul='$judul', isi='$isi' where id='$id'");
        if($update)
        {
          ?>
          <script language="javascript">
                      alert('Berhasil memperbarui Data Artikel');
                      document.location="artikel.php";
                  </script>
                  <?php
        } else {
          ?>
          <script language="javascript">
                      alert('Gagal memperbarui Data Artikel!');
                      document.location="artikel.php";
                  </script>
          <?php
              }
            }
          }
          ?>
