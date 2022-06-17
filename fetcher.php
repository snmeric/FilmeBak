<?php include 'db.php' ?>

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
    <title>Tüm Filmler</title>
</head>
<body>
    <div class="container">
        <?php include 'homepage_header.php' ?>
    <div class="movies-grid">
             
             <?php include('db.php');
             $query = mysqli_query($conn, "SELECT*FROM filmler");

             while ($row = mysqli_fetch_array($query)) {
                 $id = $row['id'];
                 $title = $row['name'];
                 $image = $row['imgpath'];
                 $rating = $row['puani'];
                 $kategori = $row['tur'];
                 $yil = $row['cikistarihi'];


             ?>

                 <div class="movie-card">

                     <div class="card-head">
                         <img src="admin/uploads/<?php echo $image ?>" alt="" class="card-img">

                         <div class="card-overlay">

                             <div class="bookmark">
                                 <ion-icon name="bookmark-outline"></ion-icon>
                             </div>

                             <div class="rating">
                                 <ion-icon name="star-outline"></ion-icon>
                                 <span><?php echo $rating ?></span>
                             </div>
                             <a href="movie_detail.php?id=<?php echo $id ?>">
                                 <div class="play">
                                     <ion-icon name="play-circle-outline"></ion-icon>
                                 </div>
                             </a>
                         </div>
                     </div>

                     <div class="card-body">
                         <h3 class="card-title"><?php echo $title ?></h3>

                         <div class="card-info">
                             <span class="genre"><?php echo $kategori ?></span>
                             <span class="year"><?php echo $yil ?></span>
                         </div>
                     </div>


                 </div>

             <?php } ?>
         </div>
         <script src="./assets/js/main.js"></script>

</div>






<!--
- custom js link
-->


<!--
- ionicon link
-->


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>