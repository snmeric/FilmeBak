<?php
session_start();

if (!isset($_SESSION['name'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/images/icon.png" type="image/png">
  <title>FilmeBak</title>
  <!-- Box icons-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
  <title>Anasayfa</title>
</head>

<body>
  <div class="navbar">

    <!--
  - menu button for small screen
    -->

    <button class="navbar-menu-btn">
      <span class="one"></span>
      <span class="two"></span>
      <span class="three"></span>
    </button>


    <a href="homepage.php" class="navbar-brand">
      <img src="./assets/images/logo.png" alt="">
    </a>

    <!--
  - navbar navigation
-->

    <nav class="">
      <ul class="navbar-nav">

        <li>
          <a href="homepage.php" class="navbar-link">
            <i class='bx bx-home-alt'></i>
            <span>Anasayfa</span></a>
        </li>
        <li>
          <a href="homepage.php#category" class="navbar-link">
            <i class='bx bx-category'></i>
            <span>Kategoriler</span></a>
        </li>


      </ul>
    </nav>

    <!--
  - search and sign-in
-->

    <div class="navbar-actions">



      <a href="search.php">
      <button class="navbar-search-btn">
        <span>Ara </span>
        <ion-icon name="search-outline"></ion-icon>
      </button>
      </a>



      <a href="index.php" class="navbar-signin">
        <span>Çıkış Yap </span> 
        <ion-icon name="log-out-outline"></ion-icon>
      </a>



    </div>

  </div>
</body>

</html>