<html>
<title>Menu Pentadbir</title>
<head>
<link href="https://fonts.googleapis.com/css?family=Saira Extra Condensed" rel="stylesheet">
<link rel="stylesheet" href="css/animations.css" type="text/css">
</head>
<img src="bg2.jpg" id="bg" alt="">
<style>
h1{
	font-size: 55px;
	color : white;
    text-shadow: 2px 2px 4px #000000;
}
#bg {
  position: fixed; 
  top: 0; 
  left: 0; 

  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
td{
    vertical-align:top;
}
th{
	background-color: #2b2a25;
	padding: 10px;
}
iframe{
	width: 99.5%;
	height: 550px;
	border: 0px;
}

.button a{
    background-color: #a0952c;
    border: 1px solid grey;
    color: white;
    padding: 20px 10px;
    width: 140px; 
    display: block; 
	text-align: center;
    vertical-align: top;
}

.button a:hover {
    background-color: #e2d558;
}
.center {
	background: rgba(219, 218, 208,0.5);
    margin: auto;
    width: 80%;
    border: 3px solid grey;
    padding: 10px;
	box-shadow: 0px 14px 31px -2px rgba(0,0,0,0.32);
}
body {
    font-family: 'Saira Extra Condensed';font-size: 20px;
	color : white;
	text-shadow: 2px 2px 4px #000000;
	}
a{
    color: #FFFFFF;
    text-decoration: none;
}
</style>
<center>
<div class="center animated bounceInUp padded go">
<h1>MENU PENTADBIR</h1>
<table>
<tr>
<th>MENU</th>
<th></th>
</tr>
<tr>
<td width="16%">
<!--------------
NAVIGATION MENU
--------------->
<div class="button">
<a href="daftar_murid.php" target="iframeBox">DAFTAR MURID</a>
<a href="daftar_calon.php" target="iframeBox">DAFTAR CALON</a>
<a href="daftar_peperiksaan.php" target="iframeBox">DAFTAR PEPERIKSAAN</a>
<hr>
<a href="senarai.php" target="iframeBox">SENARAI MURID</a>
<a href="senarai_calon.php" target="iframeBox">SENARAI PEPERIKSAAN</a>
<hr>
<a href="logkeluar.php">LOG KELUAR</a>
</div>
</td>
<td>
<!----------
IFRAME BOX
----------->
<iframe name="iframeBox" src="menu.php"></iframe>
</td>
</tr>
</table>
</center>
</html>