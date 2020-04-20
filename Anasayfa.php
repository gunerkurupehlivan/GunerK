<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>teugetse.com</title>
      <link rel="stylesheet" href="oldu.css">
  </head>
  <body>
      <form class="" action="" method="post">
    <div class="o">


    <div class="bu">
    <div class="giris">
       <p></p><h1>Güner Kurupehlivan</h1>
       <img src="IMG.jpg" alt="" weight="20px" height="150px">
      <p></p><p>Bilgisayar Programcısı öğrencisi...</p>
    </div><br><br>

    <div class="ikinciekran">
      <img src="e.png" alt="">
      <div class="ikici">
        <a href="Anasayfa.php">Anasayfa</a>
      </div>
      <div class="ikici">
        <a href="Hakkımda.php">Ben Kimim</a>
      </div>
      <div class="ikici">
        <a href="Hikayem.php">Fotoğrafçılık</a>
      </div>
      <div class="ikici">
       <a href="Makale.php">Makaleler</a>

      </div>
     <img src="e.png" alt="">
    </div>
    <div class="ücekren">
      <br><br><img src="3.jpg" alt=" "weight="12px" height="188px" >
    </div>
    <br>
    <br>
    <h1>SAYFANIN HEPSİNİ GÖREBİLMEK İÇİN KAYIT OLUNUZ.</h1>
<div class="dördüncü">
    <button type="button" onClick="location.href='girisekranı.php'">KAYIT OLDUYSANIZ GİRİŞ YAPINIZ <br>

</div><br>
<div class="dördüncü">
  <button type="button" onClick="location.href='Hakkımda.php'">KAYIT OL
</div>
<div class="dördüncü">
  <h2>C# Hoşgeldin Dünya Kodları</h2>
  <b>Console.Writline("Hoşgeldin Dünya")</b>
  <br>
  <br>

</div>

              <?php
              if (!empty($_POST)) {
                $kadi=$_POST["k_ad"];
                $sifre=$_POST["pass"];

                $hatavarmi=false;
                if ($kadi=="") {
                  echo "Kullanıcı alanı boş olamaz";
                  $hatavarmi=true;
                }
                elseif (strlen($kadi)<5) {
                  $hatavarmi=true;
                  echo "kullanıcı adı 5 ten küçük olamaz";
                }
                elseif ($sifre=="") {
                  $hatavarmi=true;
                  echo "şifre alanı boş bırakılamaz";
                }
                elseif (strlen($sifre)<5) {
                  echo "şifre 5 ten küçük olamaz";
                }
                else {
                include"kullanici.php";
                $sorgu="SELECT * FROM giris WHERE kadi='$kadi' AND sifre='$sifre'";
                $sonuc=mysqli_query($kullanici,$sorgu);
                $row=mysqli_fetch_assoc($sonuc);

                if (empty($row)) {
                echo "yanlış şifre veya kullanıcı";
                }
                else {
                  echo "Hoşgeldin".$kadi."kişisi";
                }
                }

              }



               ?>
    </div>


      </div>
      </div>



      </form>
  </body>
</html>
