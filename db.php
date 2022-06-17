<?php

$conn = new mysqli('localhost', 'root', '', 'filmebak_db'); // Veritabanı bağlantımızı yapıyoruz.
$conn->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo 'HATA';
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }
  



?>