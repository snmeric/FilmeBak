<!DOCTYPE html>
<html lang="tr">

<head>
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
</head>

<body>




    <!--
    - main container
  -->
    <div class="container">

        <!--
      - #HEADER SECTION
    -->

        <header class="">
            <?php include 'homepage_header.php' ?>
        </header>





        <!--
      - MAIN SECTION
    -->
        <main>

            <div class="banner-user">
                <div class="hosgeldin-user">
                    <div class="green-text">Hoşgeldin
                        <div class="white-text">
                            <?php echo ucfirst($_SESSION['name']);  ?>
                        </div>
                    </div>
                </div>

            </div>




            <!--
        - #BANNER SECTION
      -->
            <a href="banner.php">
                <section class="banner">


                    <div class="banner-card">

                        <img src="./assets/images/thebatman.jpg" class="banner-img" alt="">

                        <div class="card-content">
                            <div class="card-info">

                                <div class="genre">
                                    <ion-icon name="film"></ion-icon>
                                    <span>Aksiyon/Macera</span>
                                </div>

                                <div class="year">
                                    <ion-icon name="calendar"></ion-icon>
                                    <span>2022</span>
                                </div>

                                <div class="duration">
                                    <ion-icon name="time"></ion-icon>
                                    <span>165 dakika</span>
                                </div>



                            </div>

                            <h2 class="card-title">The Batman</h2>
                        </div>

                    </div>
                </section>
            </a>



            <!--
        - #MOVIES SECTION
      -->
            <section class="movies">

                <!--
          - filter bar
        -->
                <div class="filter-bar">

                    <div class="filter-dropdowns">


                        <form action="categories_search.php" method="POST" >
                            <select name="turler" class="genre">
                                <option value="tum">Tüm Türler</option>
                                <option value="aksiyon">Aksiyon</option>
                                <option value="macera">Macera</option>
                                <option value="animasyon">Animasyon</option>
                                <option value="biografi">Biografi</option>
                            </select>
                            
                            <input type="submit" value="ARA" style="color: #fff; font-weight: 700; margin-left:30px;" >
                        </form>

                    <form action="categories_search.php" method="POST">
                        <select name="year" class="year">
                            <option value="all years">Tüm Yıllar</option>
                            <option value="2022">2022</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2010-2019">2010-2019</option>
                            <option value="2000-2009">2000-2009</option>
                            <option value="1980-1999">1980-1999</option>
                        </select>
                        </form>
                    </div>

                    <div class="filter-radios">

                        <input type="radio" name="grade" id="featured" checked>
                        <label for="featured">Gelecek Olanlar</label>

                        <input type="radio" name="grade" id="popular">
                        <label for="popular">Popüler Film/Diziler</label>

                        <input type="radio" name="grade" id="newest">
                        <label for="newest">Yeniler</label>

                        <div class="checked-radio-bg"></div>

                    </div>

                </div>


                <!--
          - movies grid
        -->

        <?php include 'last_fetcher.php' ?>
                


               
                <!--
          - load more button
        -->
               <a href="fetcher.php"> <button class="load-more">HEPSİNİ GÖR</button></a>

            </section>





            <!--
        - #CATEGORY SECTION
      -->
            <section class="category" id="category">

                <h2 class="section-heading">Kategoriler </h2>

                <div class="category-grid">
                    <a href="">
                        <div class="category-card">
                            <img src="./assets/images/action.jpg" alt="" class="card-img">
                            <div class="name">Aksiyon</div>
                            <div class="total">100</div>
                        </div>
                    </a>

                    <div class="category-card">
                        <img src="./assets/images/comedy.jpg" alt="" class="card-img">
                        <div class="name">Komedi</div>
                        <div class="total">50</div>
                    </div>

                    <div class="category-card">
                        <img src="./assets/images/thriller.webp" alt="" class="card-img">
                        <div class="name">Gerilim</div>
                        <div class="total">20</div>
                    </div>

                    <div class="category-card">
                        <img src="./assets/images/horror.jpg" alt="" class="card-img">
                        <div class="name">Korku</div>
                        <div class="total">80</div>
                    </div>

                    <div class="category-card">
                        <img src="./assets/images/adventure.jpg" alt="" class="card-img">
                        <div class="name">Macera</div>
                        <div class="total">100</div>
                    </div>

                    <div class="category-card">
                        <img src="./assets/images/animated.jpg" alt="" class="card-img">
                        <div class="name">Animasyon</div>
                        <div class="total">50</div>
                    </div>

                    <div class="category-card">
                        <img src="./assets/images/crime.jpg" alt="" class="card-img">
                        <div class="name">Suç</div>
                        <div class="total">20</div>
                    </div>

                    <div class="category-card">
                        <img src="./assets/images/sci-fi.jpg" alt="" class="card-img">
                        <div class="name">Bilim Kurgu</div>
                        <div class="total">80</div>
                    </div>

                </div>

            </section>


            <!--
        - #LIVE SECTION
      -->
            <section class="live" id="live">

                <h2 class="section-heading">Canlı Yayınlar</h2>

                <div class="live-grid">



                    <div class="live-card">

                        <div class="card-head">
                            <img src="./assets/images/ntv.jpg" alt="" class="card-img">
                            <div class="live-badge">CANLI</div>
                            <a href="ntv.php">
                                <div class="play">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </div>
                            </a>
                        </div>


                        <div class="card-body">
                            <img src="./assets/images/ntvlogo.jpg" alt="" class="avatar">
                            <h3 class="card-title">NTV <br> Canlı Yayın</h3>
                        </div>


                    </div>

                    <div class="live-card">

                        <div class="card-head">
                            <img src="./assets/images/trthab.jpg" alt="" class="card-img">
                            <div class="live-badge">CANLI</div>
                            <a href="trthaber.php">
                                <div class="play">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <img src="./assets/images/trtlogo.png" alt="" class="avatar">
                            <h3 class="card-title">TRT HABER <br> Canlı Yayın</h3>
                        </div>

                    </div>

                    <div class="live-card">

                        <div class="card-head">
                            <img src="./assets/images/cnn.jpg" alt="" class="card-img">
                            <div class="live-badge">CANLI</div>
                            <a href="cnn.php">
                                <div class="play">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </div>
                            </a>
                        </div>


                        <div class="card-body">
                            <img src="./assets/images/cnnlogo.png" alt="" class="avatar">
                            <h3 class="card-title">CNN <br> Canlı Yayın</h3>
                        </div>


                    </div>

                </div>

            </section>






        </main>




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