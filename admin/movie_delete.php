<?php 

if ($_GET) 
{

include("../db.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

// id'si seçilen veriyi silme sorgumuzu yazıyoruz.
if ($conn->query("DELETE FROM filmler WHERE id =".(int)$_GET['id'])) 
{
    header("location:movie_add.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>