<?php

@include 'db.php';

session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
   header("Location: homepage.php");
}
if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if ($result->num_rows > 0) {
      echo "<script>alert('Kayıt Başarılı.')</script>";
      $row = mysqli_fetch_assoc($result);

      if ($row['user_type'] == 'admin') {
         echo "<script>alert('ADMIN Paneline Başarıyla Giriş Yaptınız..')</script>";
         $_SESSION['name'] = $row['name'];
         header('location:admin/ekle.php');
      } elseif ($row['user_type'] == 'user') {
         echo "<script>alert('Başarıyla giriş yaptınız..')</script>";
         $_SESSION['name'] = $row['name'];
         header('location:homepage.php');
      } else {
         echo "<script>alert('Yanlış birşeyler var.')</script>";
      }
   } else {
      echo "<script>alert('Email veya Şifre yanlış!')</script>";
      $error[] = 'Email veya Şifre yanlış!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/button.css">
</head>

<body>

   <div class="form-container">

      <form action="" method="post">
        
         <h3>Giriş</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Email">
         <input type="password" name="password" required placeholder="Şifre">
         <input type="submit" name="submit" value="Giriş Yap" class="form-btn">
         <p>Hesabınız yok mu? <a href="register_form.php">Kayıt Ol</a></p>
      </form>

   </div>

</body>

</html>