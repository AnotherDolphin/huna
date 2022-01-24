<?php
  include_once dirname(__FILE__) . '/../php/dbh.php';
// ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">
    <title><?=$text['title']?></title>
    <script src="script.js" defer></script>
  </head>



  <body class="flex flex-col font-almarai">

    <?php
      readfile('../components/fixed-bg.html');
      include('../components/fixed-nav.php');
    ?> 

    <main class="gap-12 flex flex-col items-start relative w-full h-screen overflow-hidden px-8 laptop:px-[8vw]">

      <?php include('../components/main-nav.php'); ?>

      <div class="flex justify-between w-full">
        <div id="site-header" class="relative">
          <h2 id="site-name" class="relative py-4 text-white self-center text-xl"><?=$text['huna-presents']?></h2>
          <h1 id="subhead" class="text-white mt-2 text-5xl font-bold"><?=$text['jeddah-expo']?></h1>
        </div>
        </div>
      </div>

      <div class="flex gap-[5vw] laptop:whitespace-nowrap relative w-[80%] flex-wrap">
        <div class=" flex flex-col gap-4 relative min-w-[200px]">
          <h1 class="text-l bg-black px-2 w-fit text-gray-400"><?=$text['expo-location']?></h1>
          <div class="flex gap-4">
            <img class="h-8 invert" src="../media/location.png"  alt="">
            <h1 class="text-white self-center text-xl"><?=$text['jeddah_expo_center']?></h1>
          </div>
          <div class="flex gap-4">
            <img class="invert h-8" src="../media/calendar.png"  alt="">
            <h1 class="text-white self-center text-xl"><?=$text['expo-date']?></h1>
          </div>
        </div>

        <div class=" flex flex-col gap-4 relative min-w-[200px]">
          <!-- <div class="h-full w-[2px] rounded absolute top-1 -right-0 bg-black"></div> -->
          <h1 class="text-l bg-black px-2 w-fit text-gray-400"><?=$text['service-location']?></h1>
          <div class="flex gap-4">
            <img class="h-8 invert" src="../media/location.png"  alt="">
            <h1 class="text-white self-center text-xl"><?=$text['king_abdulaziz_tower']?></h1>
          </div>
          <div class="flex gap-4">
            <img class="invert h-8" src="../media/calendar.png"  alt="">
            <h1 class="text-white self-center text-xl"><?=$text['service-date']?></h1>
          </div>
        </div>
      </div>

      <div class="flex gap-12 items-center">
          <h1 class="text-2xl text-white"><?=$text['register_now']?></h1>
          <button onclick="visitorRegister()" class="w-44 font-bold bg-[#ffee58] px-6 py-6 rounded-3xl shadow-xl hover:scale-[0.9] transition-all"><?=$text['visitor']?></button>
          <button class="w-44 font-bold bg-[#ffee58] px-6 py-6 rounded-3xl shadow-xl hover:scale-[0.9] transition-all"><?=$text['sponsor']?></button>
      </div>

      <!-- <div id="main-colab-logos" class="flex gap-10">
        <h4 class="text-white text-center m-0 self-center"><?=$text['presented-by']?></h4>
        <div class="flex gap-4 items-center">
          <img src="../media/homesmart.png" class="homesmart-logo rounded shadow-2xl h-[7vw] cursor-pointer hover:scale-125 duration-200">
          <div class="h-[75%] w-[2px] self-center bg-gray-400 rounded"></div>
          <img src="../media/ws-group2.png" class="rounded-l h-[5vw] cursor-pointer hover:scale-125 duration-200">
        </div>
      </div> -->

    </main>

    <?php include('../components/register-form.php'); ?>


    <section class="bg-gray-200 flex flex-col items-center">
      <section class="mt-8 :w-9/12 laptop:shadow-xl bg-gray-100 rounded-tl-lg">
        <img src="../media/sponsors.png" alt="" class=" left-0 top-[100%] z-20">
      </section>
    </section>

  </body>
</html>