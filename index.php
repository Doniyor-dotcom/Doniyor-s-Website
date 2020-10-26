<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
      Parolingiz:<input type="password" name="password"><br>
    Ismingizni yozing:<input type="text" name="name"><br>
      Yoshingizni yozing:
      <input type="number" name="number">
      <input type="submit" value="jo'natish"><br><br>
        </form><br>
  Ismingiz:  <?php
    echo $_GET["name"];
    ?> <br>
    Yoshingiz:<?php  echo $_GET["number"]; ?>
    <br>Parolingiz:<?php echo $_GET["password"] ?><br><br>
    <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get"><br><br><br>
      Bu qo'shish va ayirish dasturi <br>
    Birinchi sonni yozing:<br>
    <input type="number" name="number1"><br>Ikkinchi sonni yozing:<br>
    <input type="number" name="number2">
    <input type="submit" value="Natija">
  </form><br>Javobi:
    <?php echo $_GET["number1"] + $_GET["number2"]?>
    <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get"><br><br><br>
      Bu ko'paytirish dasturi <br>
    Birinchi sonni yozing:<br>
    <input type="number" name="number3"><br>Ikkinchi sonni yozing:<br>
    <input type="number" name="number4">
    <input type="submit" value="Natija">
  </form><br>Javobi:
    <?php echo $_GET["number3"] * $_GET["number4"]?>
    <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get"><br><br><br>
      Bu bo'lish dasturi <br>
    Birinchi sonni yozing:<br>
    <input type="number" name="number5"><br>Ikkinchi sonni yozing:<br>
    <input type="number" name="number6">
    <input type="submit" value="Natija">
  </form><br>Javobi:
    <?php echo $_GET["number5"] / $_GET["number6"]?><br><br>
    Sonning moduli:<br>
  <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
    <input type="text" name="num"><input type="submit" value="natija"><br>
  </form><br>Javobi:
  <?php
  echo abs($_GET["num"]);
   ?><br><br> Ikkita Sondan kattasini olish:
   <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
     <input type="text" name="num1"><br><input type="text" name="num2"><input type="submit" value="natija"><br>
   </form><br>Javobi:
   <?php
   echo max($_GET["num1"],$_GET["num2"]);
    ?>
    <br><br> Ikkita Sondan kichigini olish:
    <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
      <input type="text" name="num3"><br><input type="text" name="num4"><input type="submit" value="natija"><br>
    </form><br>Javobi:
    <?php
    echo min($_GET["num3"],$_GET["num4"]);
     ?><br><br> A sonining B darajasi:
     <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
       <input type="text" name="num5"><br><input type="text" name="num6"><input type="submit" value="natija"><br>
     </form><br>Javobi:
     <?php
     echo pow($_GET["num5"],$_GET["num6"]);
      ?>
      <br><br>Sonni Yaxlitlash:
      <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
      <input type="text" name="num10"><input type="submit" value="natija"><br>
      </form><br>Javobi:
      <?php
      echo round($_GET["num10"]);
       ?>
       <br><br>Sonning Kvadrat Ildizi:
       <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
      <input type="text" name="num20"><input type="submit" value="natija"><br>
       </form><br>Javobi:
       <?php
       echo sqrt($_GET["num20"]);
        ?>
        <br><br> So'zning harflar sonini sanash:
        <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
          <input type="text" name="num40"><input type="submit" value="natija"><br>
        </form><br>Javobi:
        <?php
        echo strlen($_GET["num40"]);
         ?>
         <br><br> Sonning o'zidan bitta keyingi qiymatini olish:
         <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
           <input type="text" name="num2007"><input type="submit" value="natija"><br>
         </form><br>Javobi:
         <?php
         echo ($_GET["num2007"]+1);
          ?>
          <br><br> Sonning o'zidan bitta oldingi qiymatini olish:
          <form action="https://doniyor-dotcom.github.io/Doniyor-s-Website" method="get">
            <input type="text" name="num2006"><input type="submit" value="natija"><br>
          </form><br>Javobi:
          <?php
          echo ($_GET["num2006"]-1);
           ?>
           <h1>&copy;Doniyor Corporation.All rights reserved</h1>
  </body>
</html>
