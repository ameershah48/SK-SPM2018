<?php 
include("database.php");
if(isset($_POST["submit"]))
{
	$kodPeperiksaan=$_POST['kodPeperiksaan'];
	$angkaGiliran=$_POST['angkaGiliran'];
	
	$kodPeperiksaan= mysqli_real_escape_string($connection, $kodPeperiksaan);
	$angkaGiliran= mysqli_real_escape_string($connection, $angkaGiliran);
	$angkaGiliran= $angkaGiliran;
	
	$query = mysqli_query($connection, "INSERT INTO calonpeperiksaan (kodPeperiksaan,angkaGiliran)
	VALUES ('$kodPeperiksaan','$angkaGiliran')");
	if($query)
	{
	
echo "<script>alert('Maklumat Berjaya didaftarkan');</script>";
	}

}
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title>Pendaftaran Calon</title>
</head>
<style>
.center {
    margin: auto;
    width: 50%;
    border: 3px solid grey;
    padding: 10px;
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
<h1>Daftar Calon Sistem</h1>
<form name="daftar_peperiksaan" method="POST">
<br />
<label>Kod Peperiksaan</label>
<select name="kodPeperiksaan" required>
<?php
$data1=mysqli_query($connection, "SELECT * FROM peperiksaan");
while ($info1=mysqli_fetch_array($data1))
{
	echo "<option hidden selected> - pilih - </option>";
	echo "<option value ='$info1[kodPeperiksaan]'>$info1[kodPeperiksaan]</option>";
}
?>
</select>
<br>
<label>Angka Giliran</label>
<select name="angkaGiliran" required>
<?php
$data1=mysqli_query($connection, "SELECT * FROM profilmurid");
while ($info1=mysqli_fetch_array($data1))
{
	echo "<option hidden selected> - pilih - </option>";
	echo "<option value ='$info1[angkaGiliran]'>$info1[angkaGiliran]</option>";
}
?>
</select>

<br><br>
<input class="button button2" name="submit" type="submit" value="Daftar"/>
<?php ?>
</div>
</form>
</body>
</html>
