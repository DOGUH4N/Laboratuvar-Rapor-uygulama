<?php 
$baglanti=mysqli_connect('localhost','root','','laborat');
if(!$baglanti) {
echo "Veri tabanına bağlanılamadı ".mysqli_connect_error();

}

mysqli_set_charset($baglanti,"utf8mb4");
?>