<?php
  include_once dirname(__FILE__) . '/../php/dbh.php';
// ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      if(isset($_GET['rej'])){
        if ($_GET['rej'] == 'true') {
          include('../components/user-exists.php');
          echo "fddfg";
        }
        else include('../components/user-confirmed.php');
      } 
    ?> 

    <main class="flex flex-col items-start relative w-full h-screen sm:h-[95vh] sm:pb-4 overflow-hidden px-8 laptop:px-[8vw]">

    <?php include('../components/main-nav.php'); ?>
    
    <div class="flex flex-wrap grow justify-center w-full laptop:justify-between tablet:content-center">

      <div class="inline-flex flex-col gap-10 items-center justify-center h-fit sm:justify-start relative flex-1">
        <div class="flex justify-between laptop:gap-20">
          <div id="site-header" class="relative">
            <h2 id="site-name" class="relative text-[#fff] whitespace-nowrap text-[clamp(2.5rem,4vw,4rem)] font-bold self-center text-center"><?=$text['huna']?></h2>
              <h1 id="subhead" class="text-[#e2f2ff] mt-2 text-[clamp(1.2rem,2vw,2rem)] text-center bg-[#e1c06970] rounded-xl"><?=$text['egypt_expo']?></h1>
          </div>
        </div>
        <div class="flex flex-col gap-4 items-center">
          <h4 class="text-white text-center self-center"><?=$text['partnership']?></h4>
          <div class="flex gap-4 w-full justify-center items-center">
            <img src="../media/homesmart.png" class="partners-logo contrast-[1.1] rounded h-[clamp(5rem,7vw,7rem)] cursor-pointer hover:scale-125 duration-200">
            <div class="h-[clamp(3rem,4vw,5rem)] w-[2px] self-center bg-gray-300 rounded-2xl"></div>
            <img src="../media/ws-group2.png" class="partners-logo rounded-l backdrop-shado h-[clamp(4rem,5vw,5rem)] cursor-pointer hover:scale-125 duration-200">
          </div>
        </div>
      </div>

      <div class="inline-flex flex-col gap-10 justify-center flex-1">
        <div class="inline-flex desktop:whitespace-nowrap justify-evenly relative">
          <div class=" flex flex-col gap-4 relative">
            <h1 class="text-lpx-2 w-fit text-[#e1c069]"><?=$text['expo-location']?></h1>
            <div class="h-[1px] w-10/12 bg-[#e1c069]"></div>
            <div class="flex gap-2 sm:max-w-[40vw] w-fit">
              <img class="h-8 invert px-2" src="../media/location.png" >
              <h1 class="text-white self-center laptop:text-xl"><?=$text['jeddah_expo_center']?></h1>
            </div>
            <div class="flex gap-2 sm:max-w-[40vw] w-fit">
              <img class="h-8 invert" src="../media/calendar.png" >
              <h1 class="text-white self-center laptop:text-xl"><?=$text['expo-date']?></h1>
            </div>
          </div>

          <div class="flex flex-col gap-4 relative">
            <!-- <div class="h-full w-[2px] rounded absolute top-1 -right-0 bg-black"></div> -->
            <h1 class="text-lpx-2 w-fit text-[#e1c069]"><?=$text['service-location']?></h1>
            <div class="h-[1px] w-10/12 bg-[#e1c069]"></div>
            <div class="flex gap-2 sm:max-w-[40vw] w-fit">
              <img class="h-8 invert px-2" src="../media/location.png" >
              <h1 class="text-white self-center laptop:text-xl"><?=$text['king_abdulaziz_tower']?></h1>
            </div>
            <div class="flex gap-2 sm:max-w-[40vw] w-fit">
              <img class="h-8 invert" src="../media/calendar.png" >
              <h1 class="text-white self-center laptop:text-xl"><?=$text['service-date']?></h1>
            </div>
          </div>
        </div>

        <div class="inline-flex flex-col gap-12 items-center">
            <!-- <h1 class="text-2xl text-white"><?=$text['register_now']?></h1> -->
            <div class="flex justify-center gap-6 w-full">
            <button onclick="visitorRegister()" class="w-44 font-bold bg-[#e1c069] px-6 py-6 rounded-3xl shadow-2xl hover:scale-[0.9] transition-all"><?=$text['visitor']?></button>
            <!-- <button class="w-44 font-bold bg-[#e1c069] px-6 py-6 rounded-3xl shadow-xl hover:scale-[0.9] transition-all"><?=$text['sponsor']?></button> -->
            </div>
          </div>
      </div>
    </div>

    </main>

    <?php include('../components/register-form.php'); ?>


    <section class="bg-gray-200 flex flex-col items-center">
      <section class="mt-8 :w-9/12 laptop:shadow-xl bg-gray-100 rounded-tl-lg">
        <img src="../media/sponsors.png" class=" left-0 top-[100%] z-20">
      </section>
    </section>

  </body>
</html>