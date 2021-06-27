<?php 
session_start();
if($_SESSION){
	if($_SESSION['pangkat']=="pentadbir")
	{
		header("Location: menu_pentadbir.php");
	}
	if($_SESSION['pangkat']=="pengguna")
	{
		header("Location: menu_pengguna.php");
	}
}
include('login.php');
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Log Masuk Pentadbir</title>
</head>
<body>
<img src="bg2.jpg" id="bg" alt="">
<center>
<form action="" method="POST">
<div class="center animated bounceInUp padded go">
<h1>Log Masuk Sistem Pentadbir</h1>
<font size="4"><b>Untuk kegunaan pentadbir sahaja</font></b><br><br>
<div class="animated fadeInLeft go"><label>ID Nama : </label><input type="text" name="idNama" required/></div>
<div class="animated fadeInRight go"><label>Kata Laluan : </label><input type="password" name="kataLaluan" required/></div>
<br>
<div class="animated growIn slow go"><input class="button button2" type="submit" name="submit" value="Log Masuk"></input></div>
<br>
<?php echo $error; ?>
<a color="white" href="/daftar_pentadbir.php">Daftar pentadbir baharu</a><br><br>
</div>
</form>

</body>
</html>