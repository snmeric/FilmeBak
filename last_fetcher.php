<?php
include 'db.php';
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
    <title>Son Yüklenenler</title>

    <style>
        .cards {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-gap: 1rem;
            margin-top: 50px;
            padding: 10px;
        }

        /* Screen larger than 600px? 2 column */
        @media (min-width: 600px) {


            .cards {
                margin-top: 50px;
                padding: 10px;
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Screen larger than 900px? 3 columns */
        @media (min-width: 900px) {
            .cards {
                margin-top: 50px;
                padding: 10px;
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>


</head>

<body>
    <div class="cards">


        <?php
        $im = "SELECT * FROM filmler";
        $records = mysqli_query($conn, $im);
        $count = mysqli_num_rows($records);


        $i = $count;
        $j = $count - 2;
        $newim = "SELECT * FROM filmler WHERE id BETWEEN '$j' AND '$i'";
        $newrecords = mysqli_query($conn, $newim);
        while ($fetchr = mysqli_fetch_assoc($newrecords)) {
        ?>


            <div class="movie-card">

                <div class="card-head">
                    <img src="admin/uploads/<?php echo $fetchr['imgpath'] ?>" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span><?php echo $fetchr['puani'] ?></span>
                        </div>
                        <a href="movie_detail.php?id=<?php echo $fetchr['id'] ?>">
                            <div class="play">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title"><?php echo $fetchr['name'] ?></h3>

                    <div class="card-info">
                        <span class="genre"><?php echo $fetchr['tur'] ?></span>
                        <span class="year"><?php echo $fetchr['cikistarihi'] ?></span>
                    </div>
                </div>

            </div>


        <?php } ?>



    </div>
</body>

</html>