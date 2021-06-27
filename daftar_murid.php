<?php 
include ("database.php");
if(isset($_POST["submit"]))
{
	$noKP=$_POST['noKP'];
	$angkaGiliran=$_POST['angkaGiliran'];
	$nama=$_POST['nama'];
	$bangsa=$_POST['bangsa'];
	$agama=$_POST['agama'];
	$jantina=$_POST['jantina'];
	$kelas=$_POST['kelas'];
	$tarikhMendaftar=$_POST['tarikhMendaftar'];
	$gambar=$_POST['gambar'];
	
	$noKP= mysqli_real_escape_string($connection, $noKP);
	$angkaGiliran= mysqli_real_escape_string($connection, $angkaGiliran);
	$nama= mysqli_real_escape_string($connection, $nama);
	$bangsa= mysqli_real_escape_string($connection, $bangsa);
	$agama= mysqli_real_escape_string($connection, $agama);
	$jantina= mysqli_real_escape_string($connection, $jantina);
	$kelas= mysqli_real_escape_string($connection, $kelas);
	$tarikhMendaftar= mysqli_real_escape_string($connection, $tarikhMendaftar);
	$gambar = mysqli_real_escape_string($connection, $gambar);
	$angkaGiliran= $angkaGiliran;
	
	$sql="SELECT angkaGiliran FROM profilmurid WHERE angkaGiliran = '$angkaGiliran'";
	$result=mysqli_query($connection,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result)== 1)
	{

echo "<script>alert('Maklumat Tidak Sah, Sila masukkan Semula');
window.location='daftar_murid.php'</script>";
}
else
{
	$query = mysqli_query($connection, "INSERT INTO profilmurid (noKP,angkaGiliran,nama,bangsa,agama,jantina,kelas,tarikhMendaftar,gambar)
	VALUES ('$noKP','$angkaGiliran','$nama','$bangsa','$agama','$jantina','$kelas','$tarikhMendaftar','$gambar')");
	if($query)
	{
	
echo "<script>alert('Maklumat Berjaya didaftarkan');</script>";
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title>Pendaftaran Murid</title>
</head>
<style>

.center {
    margin: auto;
    width: 60%;
    border: 3px solid grey;
    padding: 8px;
	box-shadow: 0px 14px 31px -2px rgba(0,0,0,0.32);
}

body {
    font-family: 'Saira Extra Condensed';font-size: 20px;
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
<h1>Pendaftaran Murid</h1>
<form name="daftar" method="POST">
<label>Nama</label>
<input size="30" type="text" name="nama" required/>
<br />
<label>No Kad Pengenalan</label>
<input size="20" type="number" name="noKP" required/>
<br>
<label>Angka Giliran</label>
<input size="10" type="text" name="angkaGiliran" required/>
<br />
<label>Kelas</label>
<select name="kelas" required>
<?php
$data1=mysqli_query($connection, "SELECT * FROM kelas");
while ($info1=mysqli_fetch_array($data1))
{
	echo "<option hidden selected> - pilih - </option>";
	echo "<option value ='$info1[namaKelas]'>$info1[namaKelas]</option>";
}
?>
</select>
<br />
<label>Bangsa</label>
<select name="bangsa">
<option hidden selected> - pilih - </option>
<option value="MELAYU">MELAYU</option>
<option value="CINA">CINA</option>
<option value="INDIA">INDIA</option>
</select>
<br />
<label>Agama</label>
<select name="agama">
<option hidden selected> - pilih - </option>
<option value="ISLAM">ISLAM</option>
<option value="HINDU">HINDU</option>
<option value="BUDDHA">BUDDHA</option>
<option value="KRISTIAN">KRISTIAN</option>
</select>
<br />
<label>Jantina</label>
<select name="jantina">
<option hidden selected> - pilih - </option>
<option value="LELAKI">LELAKI</option>
<option value="PEREMPUAN">PEREMPUAN</option>
</select>
<br />
<label>Tarikh Mendaftar</label>
<input type="date" name="tarikhMendaftar" required/>
<br />
<label>Gambar</label>
<input type="file" name="gambar" id="gambar"/>
<br><br>
<input class="button button2" name="submit" type="submit" value="Daftar Pelajar"/><br>
<br>
<?php ?>
</form>
</div>
</center>
</body>
</html>
