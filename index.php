<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style media="screen">

    *{
      margin:0;
      padding:0;
    }
    body{

      background-color: black;
      color: white;
      text-align: center;
    }

    img{

      height: 100vh;
      margin: auto;
    }

  </style>
  <body>

    <?php

      $arr = [

        "https://wallpapercave.com/wp/wp1903457.jpg",
        "https://storage.googleapis.com/ehimages/2017/6/11/img_04343576a5a6e5c144019c8cfa2040b7_1497219642031_processed_original.jpg",
        "https://storage.googleapis.com/chile-travel-static-content/2016/04/Trekking-shutterstock-ACT56.jpg",
        "http://www.kamikochi.org/images/h1_trekking_bg.jpg",
        "https://www.welcomenepal.com/uploads/activity/trekking-banner.jpeg",

      ];

      $count = count($arr) - 1 ;
      $image = $arr[rand(0,$count)];
      echo "<img src= '$image' >";

     ?>
  </body>
</html>
