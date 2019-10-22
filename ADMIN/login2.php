<?php
session_start();
$conn = new mysqli("localhost", "root", "", "kp");
date_default_timezone_set('Asia/Jakarta');
?>

<?php
if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if (empty($user) || empty($pass)){
  $message = "Field tidak boleh kosong";
  echo "<script type='text/javascript'> window.alert('$message');</script>";
  echo "<meta http-equiv='refresh' content='0; URL=index.php?home'>";
  }
  else {
  $sql = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM user WHERE username='$user' AND password='$pass'"));
  $user = $sql[2]; $pass = $sql[3];

    if ($user == $_POST['username'] && $pass == $_POST['password']){
      $_SESSION['users'] = $user;
      $message = "Login berhasil. Selamat Datang ".$_SESSION['users'];
    echo "<script type='text/javascript'> window.alert('$message');</script>";
    echo "<meta http-equiv='refresh' content='0; URL=admin.php?page=login'>";
    }
    else{
    $_SESSION['new'] = "";
    $message = "Login gagal. Username atau password salah.";
    echo "<script type='text/javascript'> window.alert('$message');</script>";
    echo "<meta http-equiv='refresh' content='0; URL=index.php?home'>";
    }
}
}
?>
