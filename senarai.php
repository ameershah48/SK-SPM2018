<?php
include("database.php");
$connect = mysqli_connect("localhost","root","","pendaftaran");
$sql = "SELECT * FROM profilmurid ";
$query = mysqli_query($connect, $sql);

if (isset($_POST['search'])) {
	$search_term = mysqli_real_escape_string($connect,$_POST['search_box']);
	$sql .= "WHERE nama LIKE '%{$search_term}%'";
	$sql .= " OR kelas LIKE '%{$search_term}%'";
}

$query = mysqli_query($connect,$sql) or die(mysql_error());

?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title>Senarai Calon</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 0px solid #ddd;
}

tr:nth-child(even) {background-color: #f2f2f2;
}

.center {
    margin: auto;
    width: 90%;
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
</style>
<center>
<h1>Senarai Murid</h1>
<body>
<form name="search_form" method="POST" action="senarai.php">
Tapis Nama/Kelas : <input type="text" name="search_box" value="" />
<input class="button button1" type="submit" name="search" value="Tapis">
</form>

<table width="90%" cellpadding="5" cellspace="5">
<tr>
	<td><width="100"><b>No KP</b></td>
	<td><width="20"><b>Nama</b></td>
	<td><width="20"><b>Kelas</b></td>
	<td><width="20"><b>Bangsa</b></td>
	<td><width="20"><b>Agama</b></td>
	<td><width="20"><b>Jantina</b></td>
</tr>
<?php while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
<tr>
	<td width="200"><?php echo $row['noKP']; ?></td>
	<td width="350"><?php echo $row['nama']; ?></td>
	<td width="200"><?php echo $row['kelas']; ?></td>
	<td width="100"><?php echo $row['bangsa']; ?></td>
	<td width="100"><?php echo $row['agama']; ?></td>
	<td width="100"><?php echo $row['jantina']; ?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>