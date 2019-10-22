<?php
include ("../config.php");
$id = $conn->real_escape_string($_POST['id']);
$nama = $conn->real_escape_string($_POST['nama']);
$email   = $conn->real_escape_string($_POST['email']);
$deskripsi   = $conn->real_escape_string($_POST['deskripsi']);
$nama_image  = $_FILES['filegbr']['name'];
$namafolder  = "tim/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
  {
    $lampiran = $namafolder . basename($_FILES['filegbr']['name']);
      //mengupload gambar dan update row table database dengan path folder dan nama image
      if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran))
      {
  $update = $conn->query("UPDATE tim SET nama='$nama', email='$email', deskripsi='$deskripsi', nama_image='$nama_image' where id='$id'");
  if($update)
  {
    ?>
    <script language="javascript">
                alert('Berhasil memperbarui Data Tim');
                document.location="profile.php";
            </script>
    <?php
    } else {
     ?>
    <script language="javascript">
                alert('Gagal memperbarui Data Tim!');
                document.location="profile.php";
            </script>
    <?php
          }
        }
      }
    } else {
      if(empty($_FILES["filegbr"]["tmp_name"]))
      {
        $update = $conn->query("UPDATE tim SET nama='$nama', email='$email', deskripsi='$deskripsi' where id='$id'");
        if($update)
        {
          ?>
          <script language="javascript">
                      alert('Berhasil memperbarui Data Tim');
                      document.location="profile.php";
                  </script>
                  <?php
        } else {
          ?>
          <script language="javascript">
                      alert('Gagal memperbarui Data Tim!');
                      document.location="profile.php";
                  </script>
          <?php
                }
              }
            }
          ?>
