<?php
include('database.php');
$sql = "SELECT * FROM calonpeperiksaan";

if (isset($_POST['search_box'])) {
	$search_term = mysqli_real_escape_string($connection,$_POST['search_box']);
    $sql = "SELECT profilmurid.nama, calonpeperiksaan.kodPeperiksaan, calonpeperiksaan.angkaGiliran, calonpeperiksaan.id 
            FROM calonpeperiksaan
            INNER JOIN profilmurid 
            ON profilmurid.angkaGiliran=calonpeperiksaan.angkaGiliran ";
	$sql .= "WHERE kodPeperiksaan = '{$search_term}'";
}

$query = mysqli_query($connection, $sql) or die(mysql_error());

	
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title>Senarai Calon</title>
</head>
<style>
.center {
    margin: auto;
    width: 75%;
    border: 3px solid grey;
    padding: 8px;
	box-shadow: 0px 14px 31px -2px rgba(0,0,0,0.32);
}

body {
    font-family: 'Saira Extra Condensed';font-size: 20px;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
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

.button1:hover {
    background-color: #696B69;
    color: white;
}
table {
    border-collapse: collapse;
    width: 90%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 0px solid #ddd;
}

tr:nth-child(even) {background-color: #f2f2f2;}

</style>
<center>
<body>
<b>Senarai Peperiksaan Berdaftar </b><br><br>
<table width="10" cellpadding="5" cellspace="5">
<tr>
	<td><width="10"><b>Kod Peperiksaan</b></td>
	<td><width="10"><b>Tarikh Mula</b></td>
	<td><width="10"><b>Tarikh Tamat</b></td>
	<td><width="10"><b>Kategori</b></td>
</tr>
<?php 
$periksa = "SELECT * FROM peperiksaan ";
$list = mysqli_query($connection,$periksa) or die(mysql_error());
while ($row = mysqli_fetch_array($list,MYSQLI_ASSOC)) { 
?>
<tr>
	<td width="200"><?php echo $row['kodPeperiksaan']; ?></td>
	<td width="25"><?php echo $row['mulaPeperiksaan']; ?></td>
	<td width="25"><?php echo $row['tamatPeperiksaan']; ?></td>
	<td width="25"><?php echo $row['jenisPeperiksaan']; ?></td>
</tr>
<?php } ?>
</table>
<br>
<hr>
<b>Senarai Calon Berdaftar</b>
<form method="POST" action="senarai_calon.php">
<select name="search_box" required>
<?php
$data1=mysqli_query($connection, "SELECT * FROM peperiksaan");
while ($info1=mysqli_fetch_array($data1))
{
	echo "<option hidden selected> Pilih Peperiksaan </option>";
	echo "<option value ='$info1[kodPeperiksaan]'>$info1[kodPeperiksaan]</option>";
}
?>
</select>
<input class="button button1" type="submit" name="search" value="Pilih">
</form>

<table width="60%" cellpadding="5" cellspace="5">
<tr>
	<td><width="200"><b>ID Pendaftaran</b></td>
	<td><width="200"><b>Nama</b></td>	
	<td><width="200"><b>Angka Giliran</b></td>
	<td><width="200"><b>Kod Peperiksaan Didaftarkan</b></td>

</tr>
<?php
if (isset($_POST['search_box'])) {
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
?>
<tr>
	<td width="30%"><?php echo $row['id']; ?></td>
	<td width="30%"><?php echo $row['nama']; ?></td>
	<td width="30%"><?php echo $row['angkaGiliran']; ?></td>
	<td width="30%"><?php echo $row['kodPeperiksaan']; ?></td>

</tr>
<?php }} ?>
</table>
</div>
</body>
</html>