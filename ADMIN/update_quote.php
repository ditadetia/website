<?php
include ("../config.php");
$id = $conn->real_escape_string($_POST['id']);
$kalimat = $conn->real_escape_string($_POST['kalimat']);
$nama_image  = $_FILES['filegbr']['name'];
$namafolder  = "../images/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
  {
    $lampiran = $namafolder . basename($_FILES['filegbr']['name']);
      //mengupload gambar dan update row table database dengan path folder dan nama image
      if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran))
      {
        $update = $conn->query("UPDATE quote SET kalimat='$kalimat', nama_image='$nama_image' WHERE id='$id'");
        if($update)
        {
          ?>
          <script language="javascript">
                      alert('Berhasil memperbarui Quote');
                      document.location="quote.php";
                  </script>
          <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal memperbarui Quote!');
                document.location="quote.php";
            </script>
    <?php
          }
        }
      }
    } else {
      if(empty($_FILES["filegbr"]["tmp_name"]))
      {
        $update = $conn->query("UPDATE quote SET kalimat='$kalimat' WHERE id='$id'");
        if($update)
        {
          ?>
          <script language="javascript">
                      alert('Berhasil memperbarui Quote');
                      document.location="quote.php";
                  </script>
                  <?php
        } else {
          ?>
          <script language="javascript">
                      alert('Gagal memperbarui Quote!');
                      document.location="quote.php";
                  </script>
          <?php
              }
            }
          }
          ?>
