<?php
include ("../config.php");
$id     = $_POST['id'];
$judul        = $_POST['judul'];
$isi       = $_POST['isi'];
$tanggal    = date('Y-m-d');
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
        $insert = $conn->query("INSERT INTO tblartikel (judul, isi, tanggal, gambar) VALUES('$judul','$isi','$tanggal','$gambar')");
        if($insert)
        {
          ?>
          <script language="javascript">
                      alert('Berhasil menambahkan berita');
                      document.location="artikel.php";
                  </script>
     			<?php
          } else {
           	?>
  				<script language="javascript">
                      alert('Gagal menambahkan berita');
                      document.location="artikel.php";
                  </script>
     			<?php
        }
      }
    }
  }
  ?>
