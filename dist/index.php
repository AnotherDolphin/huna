<!--old gold #e1c069 -->
<?php
  include_once dirname(__FILE__) . '/../php/dbh.php';
// ?>

<!DOCTYPE html>
<html lang=<?=$lang?> dir=<?=$lang=='ar'?'rtl':'ltr'?> >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=<?=$lang=='ar'?'output.css':'output-ltr.css'?>>
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
      // include('../components/fixed-nav.php');

      if(isset($_GET['rej'])){
        if ($_GET['rej'] == 'true') include('../components/user-exists.php');
        else include('../components/user-confirmed.php');
      } 
    ?> 

    <main class="flex flex-col items-start relative w-full tablet:h-screen sm:min-h-[95vh] sm:pb-4 overflow-hidden p-4 laptop:px-[8vw]">
    
    <!-- main-nav.php used to be here -->
    <div class="flex items-center justify-between sm:justify-center w-full h-fit flex-wrap relative sm:self-center">
      <div class="flex w-max gap-3 sm:flex-col">
        <img src="../media/clean-logo.png" class="enlarge-logo clear-logo w-[4.5vmax] sm:self-center">
        <div id="site-header" class="relative self-center">
          <h1 id="site-name" class="relative text-[#fff] whitespace-nowrap text-[clamp(2.2rem,3vw,2.5rem)] font-bold self-center text-center"><?=$text['huna']?></h1>
          <h2 id="subhead" class="text-[#e2f2ff] mt-2 text-[clamp(1.2rem,2vw,1.5rem)] text-center rounded-xl"><?=$text['egypt_expo']?></h2>
        </div>
      </div>

      <div id="lang-btn" class="flex gap-1 items-center pr-1 mr-auto rounded-xl border-[#e2f2ff] border-[1px] hover:cursor-pointer sm:absolute left-0 top-0">
        <h6 class="text-[#e2f2ff] text-[0.875rem] select-none "><?=$text['other_lang']?></h6>
        <img src="../media/lang-icon.png" class=" h-6 invert-[0.9]">
      </div>

      <div class="flex hidden gap-4 justify-center items-center">
        <img src="../media/homesmart.png" class="partners-logo contrast-[1.1] rounded h-[clamp(3rem,4vw,4rem)] cursor-pointer hover:scale-125 duration-200">
        <div class="h-[clamp(3rem,4vw,5rem)] w-[2px] self-center bg-gray-300 rounded-2xl"></div>
        <img src="../media/ws-group2.png" class="partners-logo rounded-l backdrop-shado h-[clamp(2.5rem,3vw,3rem)] cursor-pointer hover:scale-125 duration-200">
      </div>
    </div>


    <!-- content after header -->
    <div class="flex flex-wrap grow w-full gap-8 content-evenly">

      <div class="flex flex-wrap w-full gap-8 justify-center items-center">

        <div class="flex flex-col gap-4 items-center justify-center min-w-max self-center flex-1 animate-[appear_0.3s_ease-in-out]">
          <!-- <h4 class="text-white text-center self-center text-xl"><?=$text['presents']?></h4> -->
          <h2 class="text-white text-center self-center sm:text-4xl text-5xl"><?=$text['jeddah_expo']?><span class="text-[#fada5e] mt-6 block">2022</span></h2>
        </div>
        
        <div class="flex justify-around tablet:gap-[10%] relative pr-[3vw] flex-1 opacity-0 animate-[appear_0.3s_0.3s_forwards]">
          <div class=" flex flex-col gap-4 relative sm:max-w-[45%]">
            <h1 class="text-lg w-fit text-[#fada5e] whitespace-nowrap"><?=$text['expo-location']?></h1>
            <div class="h-[1px] w-10/12 bg-[#fada5e]"></div>
            <div class="flex gap-2 w-fit">
              <img class="h-8 invert px-2" src="../media/location.png" >
              <h1 class="text-white self-center text-[clamp(14px,1.5vw,1.2rem)]"><?=$text['jeddah_expo_center']?></h1>
            </div>
            <div class="flex gap-2 w-fit">
              <img class="h-8 invert" src="../media/calendar.png" >
              <h1 class="text-white self-center text-[clamp(14px,1.5vw,1.2rem)]"><?=$text['expo-date']?></h1>
            </div>
          </div>

          <div class="flex flex-col gap-4 relative sm:max-w-[45%]">
            <!-- <div class="h-full w-[2px] rounded absolute top-1 -right-0 bg-black"></div> -->
            <h1 class="text-lg w-fit text-[#fada5e] whitespace-nowrap"><?=$text['service-location']?></h1>
            <div class="h-[1px] w-10/12 bg-[#fada5e]"></div>
            <div class="flex gap-2 w-fit">
              <img class="h-8 invert px-2" src="../media/location.png" >
              <h1 class="text-white self-center text-[clamp(14px,1.5vw,1.2rem)]"><?=$text['king_abdulaziz_tower']?></h1>
            </div>
            <div class="flex gap-2 w-fit">
              <img class="h-8 invert" src="../media/calendar.png" >
              <h1 class="text-white self-center text-[clamp(14px,1.5vw,1.2rem)]"><?=$text['service-date']?></h1>
            </div>
          </div>

        </div>

      </div>

    
      <div class="flex flex-wrap w-full gap-8 justify-center items-center">
          
        <div id="countdown" class="flex gap-4 bg-red text-white justify-center items-center flex-1 opacity-0 animate-[appear_0.3s_0.6s_forwards]">
          <div class="flex flex-col items-center w-12 text-[#fada5e]">
            <h2 class="text-5xl">12</h2>
            <h4><?=$text['days']?></h4>  
          </div>
          <div class="w-[1px] h-4/6 bg-white"></div>
          <div class="flex flex-col items-center w-12">
            <h2 class="text-4xl">12</h2>
            <h4><?=$text['hours']?></h4>  
          </div>
          <div class="w-[1px] h-4/6 bg-white"></div>
          <div class="flex flex-col items-center w-12">
            <h2 class="text-4xl">12</h2>
            <h4><?=$text['minutes']?></h4>  
          </div>
          <div class="w-[1px] h-4/6 bg-white"></div>
          <div class="flex flex-col items-center w-12">
            <h2 class="text-4xl">12</h2>
            <h4><?=$text['seconds']?></h4>  
          </div>
        </div>
        <!-- <h1 class="text-2xl text-white"><?=$text['register_now']?></h1> -->
        <div class="flex justify-center gap-6 flex-1">
          <button onclick="visitorRegister()" class="w-44 mb-2 font-bold bg-[#fada5e] px-6 py-6 rounded-3xl shadow-2xl hover:scale-[0.9] transition-all"><?=$text['visitor']?></button>
          <!-- <button class="w-44 font-bold bg-[#fada5e] px-6 py-6 rounded-3xl shadow-xl hover:scale-[0.9] transition-all"><?=$text['sponsor']?></button> -->
        </div>
      </div>
    </div>

    <div class="flex hidden flex-col gap-4 items-center justify-center w-full">
          <h4 class="text-white text-center self-center"><?=$text['partnership']?></h4>
          <div class="flex gap-4 w-full justify-center items-center">
            <img src="../media/homesmart.png" class="partners-logo contrast-[1.1] rounded h-[clamp(5rem,7vw,7rem)] cursor-pointer hover:scale-125 duration-200">
            <div class="h-[clamp(3rem,4vw,5rem)] w-[2px] self-center bg-gray-300 rounded-2xl"></div>
            <img src="../media/ws-group2.png" class="partners-logo rounded-l backdrop-shado h-[clamp(4rem,5vw,5rem)] cursor-pointer hover:scale-125 duration-200">
          </div>
        </div>

    </main>

    <?php include('../components/register-form.php'); ?>


    <section class="bg-gray-200 flex flex-col items-center">
      <section class="laptop:shadow-xl bg-gray-100 rounded-tl-lg">
        <img src="../media/sponsors.png" class=" left-0 top-[100%] z-20">
      </section>
    </section>

  </body>
</html>