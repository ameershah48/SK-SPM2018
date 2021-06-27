<?php 
include ('pengesahan.php');
include ("database.php");
if(isset($_POST["submit"]))
{
	$emel=$_POST['emel'];
	$idNama=$_POST['idNama'];
	$nama=$_POST['nama'];
	$kataLaluan=$_POST['kataLaluan'];
	
	$emel= mysqli_real_escape_string($connection, $emel);
	$idNama= mysqli_real_escape_string($connection, $idNama);
	$nama= mysqli_real_escape_string($connection, $nama);
	$kataLaluan= mysqli_real_escape_string($connection, $kataLaluan);
	$kataLaluan= $kataLaluan;
	
	$sql="SELECT emel FROM pentadbir WHERE emel = '$emel'";
	$result=mysqli_query($connection,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result)== 1)
	{

echo "<script>alert('Maklumat Tidak Sah, Sila masukkan Semula');
window.location='logmasuk.php'</script>";
}
else
{
	$query = mysqli_query($connection, "INSERT INTO pentadbir (emel,idNama,nama,kataLaluan,pangkat)
	VALUES ('$emel','$idNama','$nama','$kataLaluan','pentadbir')");
	if($query)
	{
	
echo "<script>alert('Maklumat Berjaya didaftarkan');
window.location='logmasuk.php'</script>";
	}
}
}
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title>Pendaftaran Pentadbir (Segera)</title>
</head>
<style>
.center {
    margin: auto;
    width: 55%;
    border: 3px solid grey;
    padding: 8px;
	box-shadow: 0px 14px 31px -2px rgba(0,0,0,0.32);
}

body {
    font-family: 'Saira Extra Condensed';font-size: 18px;
}
.button {
    background-color: #1a1a1a;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #8C8C8C;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<body>
<center>
<div class="center animated bounceInUp padded go">
<h1>Pendaftaran Pentadbir (Segera)</h1>
<h3><a href="menu_pentadbir.php">Menu Utama</a></h3>
<form name="daftar" method="POST">
<label>E-mel</label>
<input type="email" name="emel" required/>
<br>
<label>ID Nama</label>
<input type="text" name="idNama" required/>
<br>
<label>Nama</label>
<input type="text" name="nama" required/>
<br>
<label>Kata Laluan</label>
<input type="password" name="kataLaluan" required/>
<br><br>
<input class="button button2" name="submit" type="submit" value="Daftar Pentadbir"/><br>
</form>
</div>
</center>
</body>
</html>
