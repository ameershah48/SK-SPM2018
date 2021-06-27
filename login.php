<?php
$error='';
include "database.php";
if(isset($_POST['submit']))
{
	$idNama = stripcslashes($_REQUEST['idNama']);
	$idNama = mysqli_real_escape_string($connection,$idNama);
	$kataLaluan = stripcslashes($_REQUEST['kataLaluan']);
	$kataLaluan = mysqli_real_escape_string($connection,$kataLaluan);
	
	$query = mysqli_query($connection,"SELECT * FROM pentadbir WHERE idNama='$idNama' and kataLaluan='$kataLaluan'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "<script>alert('Maklumat Tidak Sah, Sila masukkan Semula');
window.location='logmasuk.php'</script>";
	}
	else
	{
	$row = mysqli_fetch_assoc($query);
	$_SESSION['idNama'] = $row['idNama'];
	$_SESSION['pangkat'] = $row['pangkat'];
		
	if($row['pangkat'] == "pentadbir")
		{
		header("Location: menu_pentadbir.php");
		}
	else if($row['pangkat'] == "pengguna")
		{
		header("Location: menu_pengguna.php");
		}
	else
		{
		$error = "<script>alert('Maklumat Tidak Sah, Sila masukkan Semula');
window.location='logmasuk.php'</script>";
		}
	}
}
?>