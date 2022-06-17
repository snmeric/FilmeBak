<?php

use LDAP\Result;


include('db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

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
    <title>Film Detayı</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #18191D;
        }

        .main_card {
            color: #fff;
            width: 1200px;
            height: 740px;
            margin: auto;

            display: flex;
            max-width: 1200px;

            border-radius: 40px;
            background: #242834;

        }

        .card_left {
            width: 90%;
        }

        .card_datails {
            width: 90%;
            padding: 50px;
            margin-top: -15px;
        }

        .card_datails h1 {
            font-size: 40px;
            color: #1BFC9C;
        }

        .card_right img {
            height: 740px;
            border-radius: 20px;
        }

        .card_right {
            border-radius: 15px;
        }

        .card_cat {
            width: 40%;


            display: flex;

            justify-content: space-between;
        }

        .card_cat ion-icon {

            font-size: 20px;
            color: var(--white);
            margin-right: 0px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .year,
        .genre,
        .time {
            color: fff;
            padding: 5px;
            font-weight: 400;

        }

        .disc {
            font-weight: 500;
            line-height: 27px;
            padding: 0px;
            word-wrap: break-word;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php include 'homepage_header.php' ?>


        <div class="wrapper">
            <div class="main_card">
                <div class="card_left">
                    <div class="card_datails">
                        <h1>The Batman</h1>
                        <div class="card_cat">

                            <p class="year">
                                <ion-icon name="calendar"></ion-icon>2022
                            </p>
                            <p class="genre">
                                <ion-icon name="film"></ion-icon>Aksiyon
                            </p>
                            <p class="time">
                                <ion-icon name="time"></ion-icon>165 Dakika
                            </p>
                        </div>
                        <br />
                        <p class="disc">"The Batman, suçluların kalplerine korku salan Batman'in Riddler isimli
                            bir seri katille mücadelesini konu ediyor. Batman olarak iki yıl sokaklarda dolaşmak
                            ve suçlulara korku salmak Bruce Wayne'i Gotham City'nin karanlığının kalbine sürükledi.</p>
                        <br />
                        <iframe src="https://www.youtube.com/embed/w9MAnKgoyoo" width="800" height="415" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="card_right">
                    <div class="img_container">
                        <img src="admin/uploads/batman.jpg" alt="">
                    </div>

                </div>

            </div>

        </div>
    </div>







    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
</body>

</html>