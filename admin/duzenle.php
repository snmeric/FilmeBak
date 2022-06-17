<?php 
include("../db.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>


</head>
<body>
<?php include 'header.php' ?>
<?php 

$sorgu = $conn->query("SELECT * FROM user_form WHERE id =".(int)$_GET['id']); 
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu

$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>

<div class="container">
<div class="col-sm-6 mx-auto ">

<form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>Kullanıcı Adı</td>
            <td><input type="text" name="name" class="form-control" value="<?php echo $sonuc['name']; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" class="form-control" value="<?php echo $sonuc['email']; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>

        <tr>
            <td>Şifre</td>
            <td><input type="password" name="password" class="form-control" value="<?php echo $sonuc['password']; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>
        <tr>
            <td>Kullanıcı/Admin</td>
            <td><input type="text" name="user_type" class="form-control" value="<?php echo $sonuc['user_type']; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
        </tr>

    </table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
    
    $name = $_POST['name']; // Post edilen değerleri değişkenlere aktarıyoruz
    $email = $_POST['email'];
    $password = $_POST['password']; // Post edilen değerleri değişkenlere aktarıyoruz
    $user_type = $_POST['user_type'];

    if ($name<>"" && $email<>""&& $password<>""&& $user_type<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        
        // Veri güncelleme sorgumuzu yazıyoruz.
        if ($conn->query("UPDATE user_form SET name = '$name', email = '$email',password = '$password',user_type = '$user_type' WHERE id =".$_GET['id'])) 
        {
            header("location:ekle.php"); 
            // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
        }
        else
        {
            echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
        }
    }
}
?>
</body>
</html>