<?php
$namahos = "localhost";
$user = "root";
$pass = "";
$database = "pendaftaran";

$connection = mysqli_connect($namahos, $user, $pass) or die
("Maaf pangkalan data tidak tersambung");

mysqli_select_db($connection, $database) or die ("Tidak dapat pilih pangkalan data");
?>