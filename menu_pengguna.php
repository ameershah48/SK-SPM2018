<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title> Menu Pengguna </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
input[type=text] {
    width: 180px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 40%;
}
</style>
<body>
<img src="bg2.jpg" id="bg" alt="">
<center><div class="center animated bounceInUp padded go">
		<form action="carian_pengguna.php" method="post">
        <div class="animated bounceInUp padded go"><h2>Semak Maklumat Murid Berdaftar</h2>
		<a class="buttong" href="/logkeluar.php" style="vertical-align:middle"><span>Log Keluar</span></a><br><br></div>
		<hr><br>
		<div class="animated bounceInUp padded go">
		<font size="5"><b>Masukkan No Kad Pengenalan Murid</font></b><br>
		<input type="text" name="noKP" placeholder="No KP..."><br><br>
        <input class="button button2" type="submit" name="search" value="Buat Semakan"></div>
		</form>
		<br>
</center>
</html>

