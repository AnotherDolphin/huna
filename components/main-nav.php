<nav id="main-nav" class="flex w-full text-white sm:justify-center">
    <div class="sm:hidden flex sm:flex-row sm:w-fit sm:gap-2 sm:px-4 sm:items-center flex-col justify-center content-center flex-grow-0 flex-shrink-0 rounded-b-3xl bg-gray-100 w-[clamp(5rem,10vw,10rem)] right-[3vw] p-2">
      <img src="../media/logo.png" class="p-1 w-full sm:h-16 sm:p-0">
      <img src="../media/name.png" class="p-2 w-full sm:h-10 sm:p-0">
    </div>
    <img class="hidden sm:block h-44 mt-4 p-2 enlarge-logo w-auto clear-logo drop-shadow-2xl" src="../media/clean-logo.png" alt="">
    <ul id="main-nav-ul" class="relative hidden laptop:flex list-none-900 min-h-20%  self-center">
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-home']?></button></li>
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-contact']?></button></li>
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-about']?></button></li>
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-news']?></button></li>
    </ul>
    <div class="hidden tablet:flex gap-1 items-center py-2 px-6 mr-auto">
      <img src="../media/lang-icon.png" class="p-1 h-10 invert-[0.9]">
      <h6>English</h6>
    </div>
    <a class="hidden laptop:hidden flex-col py-1 my-1 gap-2 self-center">
      <div class="w-8 h-1 bg-[#e1c069] rounded"></div>
      <div class="w-8 h-1 bg-[#e1c069] rounded"></div>
      <div class="w-8 h-1 bg-[#e1c069] rounded"></div>
    </a>
</nav>

<style>
  .clear-logo{
    filter: grayscale(1) invert(0.9) brightness(1.3);
  }
   #main-nav-ul::before{
    content: '';
    position: absolute;
    width: 200vw;
    height: 100%;
    top: 0px;
    right: -100vw;
    background-color: #e1c06922;
    /* background-color: #1a6f4877; */
    /* background-color: #c7283c99; */
    /* background: #0008; */
    /* background: linear-gradient(300deg, #000 65%, #222 65%, #2222 65.3%, #2221 65.5%, transparent 65%) */
    /* backdrop-filter: blur(3px); */
    z-index: -1;
  }
</style>