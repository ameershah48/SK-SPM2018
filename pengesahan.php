<?php
session_start();

if(!isset($_SESSION["idNama"])){
	header("Location: logmasuk.php");
exit();}
?>