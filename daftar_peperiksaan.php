<?php 
include ('database.php');
if(isset($_POST["submit"]))
{
	$kodPeperiksaan=$_POST['kodPeperiksaan'];
	$mulaPeperiksaan=$_POST['mulaPeperiksaan'];
	$tamatPeperiksaan=$_POST['tamatPeperiksaan'];
	$jenisPeperiksaan=$_POST['jenisPeperiksaan'];
	
	$kodPeperiksaan= mysqli_real_escape_string($connection, $kodPeperiksaan);
	$mulaPeperiksaan= mysqli_real_escape_string($connection, $mulaPeperiksaan);
	$tamatPeperiksaan= mysqli_real_escape_string($connection, $tamatPeperiksaan);
	$jenisPeperiksaan= mysqli_real_escape_string($connection, $jenisPeperiksaan);
	$kodPeperiksaan= $kodPeperiksaan;
	
	$sql="SELECT kodPeperiksaan FROM peperiksaan WHERE kodPeperiksaan = '$kodPeperiksaan'";
	$result=mysqli_query($connection,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result)== 1)
	{

echo "<script>alert('Maklumat Tidak Sah, Sila masukkan Semula');
window.location='daftar_peperiksaan.php'</script>";
}
else
{
	$query = mysqli_query($connection, "INSERT INTO peperiksaan (kodPeperiksaan,mulaPeperiksaan,tamatPeperiksaan,jenisPeperiksaan)
	VALUES ('$kodPeperiksaan','$mulaPeperiksaan','$tamatPeperiksaan','$jenisPeperiksaan')");
	if($query)
	{
	
echo "<script>alert('Maklumat Berjaya didaftarkan');</script>";
	}
}
}
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title>Daftar Peperiksaan</title>
</head>
<style>
.center {
    margin: auto;
    width: 55%;
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
<h1>Daftar Peperiksaan</h1>
<form name="daftar" method="POST">
<label>Kod Peperiksaan</label>
<input type="number" name="kodPeperiksaan" required/>
<br />
<label>Tarikh Peperiksaan</label>
<input type="date" name="mulaPeperiksaan" required/>
<br>
<label>Sehingga</label>
<input type="date" name="tamatPeperiksaan" required/>
<br>
<label>Jenis Peperiksaan</label>
<select name="jenisPeperiksaan">
<option value="Bulanan">Bulanan</option>
<option value="Pertengahan">Pertengahan</option>
<option value="Akhir Tahun">Akhir Tahun</option>
</select>
<br><br>
<input class="button button2" name="submit" type="submit" value="Daftar"/><br>
<?php ?>
</div>
</form>
</body>
</html>
