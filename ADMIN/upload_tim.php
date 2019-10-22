<?php
include ("../config.php");
$nama        = $_POST['nama'];
$email       = $_POST['email'];
$deskripsi   = $_POST['deskripsi'];
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
        $insert = $conn->query("INSERT INTO tim(nama, email, deskripsi, nama_image) VALUES('$nama', '$email', '$deskripsi', '$nama_image')");
        if($insert)
        {
          ?>
          <script language="javascript">
                      alert('Berhasil menambahkan tim.');
                      document.location="profile.php";
                  </script>
     			<?php
          } else {
           ?>
  				<script language="javascript">
                      alert('Gagal menambahkan data tim!');
                      document.location="profile.php";
                  </script>
     			<?php
        }
      }
    }
  } 
?>
