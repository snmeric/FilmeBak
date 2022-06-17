<?php


include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Ara</title>
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
            .searchbar-body {


                margin-top: 20px;

                display: flex;
                justify-content: center;
            }

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

        .searchbar-body {

            margin-right: auto;
            margin-left: auto;
            padding: 0;
            margin-top: 20px;
            margin-bottom: 0px;
            display: flex;
            justify-content: center;
        }

        .search-container {

            background: #242834;
            ;
            height: 40px;
            border-radius: 30px;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.8s;
            color: #fff;
        }

        .search-container:hover>.search-input {
            width: 400px;
        }

        .search-container .search-input {
            background: transparent;
            border: none;
            outline: none;
            width: 0px;
            font-weight: 500;
            font-size: 16px;
            transition: 0.8s;
            color: #fff;

        }

        .search-container .search-btn .fas {
            color: #43FC92;
        }

        @keyframes hoverShake {
            0% {
                transform: skew(0deg, 0deg);
            }

            25% {
                transform: skew(5deg, 5deg);
            }

            75% {
                transform: skew(-5deg, -5deg);
            }

            100% {
                transform: skew(0deg, 0deg);
            }
        }

        .search-container:hover {
            animation: hoverShake 0.15s linear 3;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="">
            <?php include 'homepage_header.php' ?>
        </header>


        <div class="banner-user">
            <div class="hosgeldin-user">
                <div class="searchbar-body">
                    <form class="" method="POST">
                        <div class="search-container">
                            <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                                    echo $_GET['search'];
                                                                                } ?>" class="search-input" placeholder="Ara...">
                            <a href="#" class="search-btn">
                                <button type="submit" name="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!---SEARCH PHP MYSQL   -->
        <div class="cards">
            <?php
            if (isset($_POST['search'])) {
                $filtervalues = $_POST['search'];


                $query = "SELECT * FROM filmler WHERE CONCAT(name) LIKE '%$filtervalues%' ";

                $query_run = mysqli_query($conn, $query);


                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $items) {
            ?>



                        <div class="movie-card">

                            <div class="card-head">
                                <img src="admin/uploads/<?php echo $items['imgpath'] ?>" alt="" class="card-img">

                                <div class="card-overlay">

                                    <div class="bookmark">
                                        <ion-icon name="bookmark-outline"></ion-icon>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star-outline"></ion-icon>
                                        <span><?php echo $items['puani'] ?></span>
                                    </div>
                                    <a href="movie_detail.php?id=<?php echo $items['id'] ?>">
                                        <div class="play">
                                            <ion-icon name="play-circle-outline"></ion-icon>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <h3 class="card-title"><?php echo $items['name'] ?></h3>

                                <div class="card-info">
                                    <span class="genre"><?php echo $items['tur'] ?></span>
                                    <span class="year"><?php echo $items['cikistarihi'] ?></span>
                                </div>
                            </div>

                        </div>



                    <?php
                    }
                } else {
                    ?>
        </div>
        <h1 style="text-align: center;  justify-content: center;
        align-items: center; color:#43FC92">BULUNAMADI :(</h1>
    </div>

<?php
                }
            } ?>
<script src="./assets/js/main.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>