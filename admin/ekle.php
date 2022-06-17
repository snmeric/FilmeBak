<?php
include('../db.php'); // veritabanı bağlantımızı sayfamıza ekliyoruz. 

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kullanıcı/Admin Ekle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <?php include '../admin/header.php' ?>
    <div class="container">
        <div class="row mx-auto  ">
            <div class="col-sm-10 mx-auto ">
                <div class="col-sm-10 mx-auto  ">
                    <form action="" method="post" >

                        <table class="table  ">


                            <tr>
                                <td>Kullanıcı Adı</td>
                                <td><input type="text" name="name" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Şifre</td>
                                <td><input type="password" name="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Kullanıcı Tipi(admin/user)</td>
                                <td><input type="text" name="user_type" class="form-control"></td>
                            </tr>


                            <tr>
                                <td></td>
                                <td><input class="btn btn-primary" type="submit" value="Ekle"></td>
                            </tr>

                        </table>

                    </form>

                    <!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->

                    <?php

                    if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

                        // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = md5($_POST['password']);
                        $user_type = $_POST['user_type'];

                        if ($name <> "" && $email <> "" && $password <> "" && $user_type <> "") {
                            // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.

                            // Veri ekleme sorgumuzu yazıyoruz.
                            if ($conn->query("INSERT INTO user_form (name, email, password, user_type) VALUES ('$name','$email','$password','$user_type')")) {
                                echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
                            } else {
                                echo "Hata oluştu";
                            }
                        }
                    }

                    ?>
                </div>
                <!-- ############################################################## -->

                <!-- Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım. -->
                <div class="col-md-7">
                    <table class="table table-striped table-dark">

                        <tr>
                            <th>Id</th>
                            <th>Kullanıcı Adı</th>
                            <th>Email</th>
                            <th>Sifre</th>
                            <th>Kullanıcı Tipi</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

                        <?php

                        $sorgu = $conn->query("SELECT * FROM user_form"); // user_form tablosundaki tüm verileri çekiyoruz.

                        while ($sonuc = $sorgu->fetch_assoc()) {

                            $id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
                            $name = $sonuc['name'];
                            $email = $sonuc['email'];
                            $password = $sonuc['password'];
                            $user_type = $sonuc['user_type'];

                            // While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
                        ?>

                            <tr>
                                <td><?php echo $id; 
                                    ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $password; ?></td>
                                <td><?php echo $user_type; ?></td>
                                <td><a href="../admin/duzenle.php?id=<?php echo $id; ?>" class="btn btn-info">Düzenle</a></td>
                                <td><a href="../admin/sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                            </tr>

                        <?php
                        }
                        // Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz. 
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>