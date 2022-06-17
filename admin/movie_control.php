<?php
session_start();



if (isset($_POST['upload'])) {
    include('../db.php');


    $name = $_POST['mname'];
    $tur = $_POST['tur'];
    $cikistarihi = $_POST['cikistarihi'];
    $dakika = $_POST['dakika'];
    $aciklama = $_POST['aciklama'];
    $puani = $_POST['puani'];
    $image = $_FILES['imagep']['name'];
 
    $ytlink = $_POST['ytlink'];

    $image_name = $_FILES['imagep']['name'];
   
    $temp_image_name = $_FILES['imagep']['tmp_name'];
    
    $image_destination = "uploads/" . $image_name;

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "uploads/" . $file_name;


    if (move_uploaded_file($temp_name, $file_destination) || move_uploaded_file($temp_image_name, $image_destination)) {

        
        $sql = "INSERT INTO filmler (name,tur,cikistarihi,dakika,aciklama,puani,imgpath,videopath,ytlink)
            VALUES('$name','$tur','$cikistarihi','$dakika','$aciklama','$puani','$image','$file_name','$ytlink')";

        if (mysqli_query($conn, $sql)) {

            $success = "Başarılı.";
            header('location:ekle.php');
        } else {

            $failed = "HATA VAR!";
        }
    } else {

        $msz = "Lütfen doldurun";
    }
}
