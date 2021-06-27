<?php
include('database.php');
if(isset($_POST['search']))
{
    $noKP=$_POST['noKP'];
    $resultA=mysqli_query($connection,"SELECT * FROM profilmurid WHERE noKP = '$noKP' LIMIT 1");
	$infoA=mysqli_fetch_array($resultA);
	

    if(mysqli_num_rows($resultA) > 0)
    {
      while($row=mysqli_fetch_array($resultA))
      {
		$nama = $row['nama'];
        $kelas = $row['kelas'];
        $angkaGiliran = $row['angkaGiliran'];
        $bangsa = $row['bangsa'];
        $agama = $row['agama'];
		$tarikhMendaftar = $row['tarikhMendaftar'];
      }  
    }
    else {
        echo "<h2><center><font color='red'>No Kad Pengenalan Tidak Sah</font></center></h2>";
		$nama = "";
		$kelas = "";
		$angkaGiliran = "";
		$bangsa = "";
		$agama = "";
		$tarikhMendaftar = "";
    }

    mysqli_free_result($resultA);
    mysqli_close($connection);
}
	else{
		$nama = "";
		$kelas = "";
		$angkaGiliran = "";
		$bangsa = "";
		$agama = "";
		$tarikhMendaftar = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Saira Extra Condensed' rel='stylesheet'>
<link rel="stylesheet" href="css/animations.css" type="text/css">
<title> Maklumat Murid </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.center {
    margin: auto;
    width: 85%;
    border: 2px solid black;
    padding: 20px;
}
body {
    font-family: 'Saira Extra Condensed';font-size: 25px;
	background-image: url("backgrounds.jpg");
}
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
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
h1{
	font-size: 30px;
}
</style>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

    <center>
    <a class="button button2" href="/index.php">Kembali</a>

<?php if(!empty($infoA)){ ?>

    <a class="button button2" onclick="printDiv('printable');">Cetak Maklumat</a><br>
    </center>
    <br>
    <div id="printable">
    <div class="center animated bounceInUp padded go">
    <div class="animated growIn slow go">
    <center><h1>Maklumat Pelajar </h1></center></div>
    <hr>
    <body>
    <div class="animated fadeInLeft go">
    <?= '<p><img src ="'.$infoA['gambar'].'"width="200" height="220" align="right"></p>' ?>
    </div><br><br>
    <div class="animated fadeInRight go">
    <strong>Nama				:</strong> <?= $infoA['nama'];?> <br>
    <strong>No Kad Pengenalan	:</strong> <?= $infoA['noKP'];?> <br>
    <strong>Kelas				:</strong> <?= $infoA['kelas'];?> <br>
    <strong>Angka Giliran		:</strong> <?= $infoA['angkaGiliran'];?> <br>
    <strong>Bangsa				:</strong> <?= $infoA['bangsa'];?> <br>
    <strong>Agama				:</strong> <?= $infoA['agama'];?> <br>
    <strong>Jantina				:</strong> <?= $infoA['jantina'];?> <br>
    <strong>Tarikh Mendaftar	:</strong> <?= $infoA['tarikhMendaftar'];?> <br></div>
    <br>

<?php } ?>

</body>
</div>
</div>
</html>