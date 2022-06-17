<?php
session_start();
include '../db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <title>Film Ekle</title>


</head>

<body>
  <?php include 'header.php' ?>
  <section class="home-section">
    <div class="container-fluid ">


      <div class="container">

        <div class="jumbotron">
          <h1> Film/Diziyi Girin</h1>
          <p> <b></b> </p> <br>

          <form class="" action="movie_control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Film/Dizi Adı" name="mname" value=""><br>
            <input type="text" class="form-control" placeholder="Tür" name="tur" value=""><br>
            <input type="text" class="form-control" placeholder="Çıkış Yılı" name="cikistarihi" value="">
            <br>
            <input type="number" class="form-control" placeholder="Kaç Dakika" name="dakika" value="">
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Açıklama</span>
              </div>
              <textarea class="form-control" aria-label="With textarea" name="aciklama"></textarea>
            </div>
            <br>
            <input type="text" class="form-control" placeholder="Puanı" name="puani" value="">
            <br>
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea2" placeholder="Youtube Embed linki.." rows="2" name="ytlink"></textarea>
            </div>
            <div class="row">


              <div class="col">
                <div class="form-group">
                  <label><strong>Resim Yükle:</strong></label>
                  <div class="col">
                    <input type="file" name="imagep" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label><strong>Video Yükle:</strong></label>
                  <div class="col">
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
              </div>
              <?php if (isset($success)) { ?>
                <div class="alert alert-success">



                  <?php echo $success; ?>

                </div>
              <?php } ?>
              <?php if (isset($failed)) { ?>
                <div class="alert alert-danger">



                  <?php echo $failed; ?>

                </div>
              <?php } ?>

              <?php if (isset($msz)) { ?>
                <div class="alert alert-danger">



                  <?php echo $msz; ?>

                </div>
              <?php } ?>

            </div> <br><br>
            <div class="signupbutton">
              <input type="submit" class="btn btn-success btn-lg" name="upload" value="Kaydet">
            </div>


          </form>

        </div>


      </div>



    </div>
    <!-- ############################################################## -->

    <!-- Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım. -->
    <div class="container">
      <table class="table table-striped table-dark">

        <tr>
          <th>Id</th>
          <th>Filmin/Dizinin Adı</th>
          <th>Çıkış Yılı</th>
          <th>Türü</th>
          <th>Dakikası</th>
          <th>Açıklaması</th>
          <th>Puanı</th>
          <th>Resim</th>
          <th>Video</th>
          <th>Youtube Link</th>
          <th></th>
        </tr>

        <!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

        <?php

        $sorgu = $conn->query("SELECT * FROM filmler"); // user_form tablosundaki tüm verileri çekiyoruz.

        while ($sonuc = $sorgu->fetch_assoc()) {

          $id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
          $name = $sonuc['name'];
          $cikistarihi = $sonuc['cikistarihi'];
          $tur = $sonuc['tur'];
          $dakika = $sonuc['dakika'];
          $aciklama = $sonuc['aciklama'];
          $puani = $sonuc['puani'];
          $image = $sonuc['imgpath'];
          $video = $sonuc['videopath'];
          $ytlink = $sonuc['ytlink'];

          // While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
        ?>

          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $cikistarihi; ?></td>
            <td><?php echo $tur; ?></td>
            <td><?php echo $dakika; ?></td>
            <td><?php echo $aciklama; ?></td>
            <td><?php echo $puani; ?></td>
            <td><?php echo $image; ?></td>
            <td><?php echo $video; ?></td>
            <td><?php echo $ytlink; ?></td>

            <td><a href="movie_delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
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

  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");


    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>

</body>

</html>