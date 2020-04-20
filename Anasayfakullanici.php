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
        <a href="Anasayfakullanici.php">Anasayfa</a>
      </div>
      <div class="ikici">
        <a href="Hakkımdakullanici.php">Ben Kimim</a>
      </div>
      <div class="ikici">
        <a href="Hikayemkullanici.php">Fotoğrafçılık</a>
      </div>
      <div class="ikici">
       <a href="Makalekullanici.php">Makaleler</a>

      </div>
     <img src="e.png" alt="">
    </div>
    <div class="ücekren">
      <br><br><img src="3.jpg" alt=" "weight="12px" height="188px" >
    </div>
    <div class="dördüncü">
      <h2>C# Hoşgeldin Dünya Kodları</h2>
      <b>Console.Writline("Hoşgeldin Dünya")</b>
      <br>
      <h2> C# Klavyeden girilen 5 tane sayının en büyük ve en küçüğünü bulma</h2>
      <h3>FOR DÖNGÜSÜ</h3>
      <b>Console.Write("1. sayıyı girin:");<br>
int sayi = Convert.ToInt32(Console.ReadLine());<br>
int enKucuk = sayi;<br>
int enBuyuk = sayi;<br>

for(int i=1;i<10;i++)<br>
{<br>
   Console.Write("{0}. sayıyı girin:", i + 1);<br>
   sayi = Convert.ToInt32(Console.ReadLine());<br>

   if (sayi > enBuyuk)<br>
      enBuyuk = sayi;<br>

   if (sayi < enKucuk)<br>
      enKucuk = sayi;<br>
}<br>

Console.WriteLine("Girilen en küçük sayı={0}", enKucuk);<br>
Console.WriteLine("Girilen en büyük sayı={0}", enBuyuk);<br>
Console.ReadKey();<br> </b>
  <h3>WHİLE DÖNGÜSÜ</h3>
  <b>Console.Write("1. sayıyı girin:");<br>
int sayi = Convert.ToInt32(Console.ReadLine());<br>
int enKucuk = sayi;<br>
int enBuyuk = sayi;<br>
int i = 1;<br>
while (i < 10)<br>
{<br>
    Console.Write("{0}. sayıyı girin:", i + 1);<br>
    sayi = Convert.ToInt32(Console.ReadLine());<br>

    if (sayi > enBuyuk)<br>
         enBuyuk = sayi;<br>

    if (sayi < enKucuk)<br>
         enKucuk = sayi;<br>

    i++;<br>
}<br>

Console.WriteLine("Girilen en küçük sayı={0}", enKucuk);<br>
Console.WriteLine("Girilen en büyük sayı={0}", enBuyuk);<br>
Console.ReadKey();<br></b>
    </div>

      </div>
      </div>

      </form>
  </body>
</html>
