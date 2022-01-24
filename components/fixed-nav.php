<nav id="fixed-nav" class="-translate-y-full fixed flex z-20 w-full text-black transition-all bg-gray-100 px-10">
    <div id="nav-title" class="flex justify-center content-center h-[3rem] rounded-b-lg bg-gray-100">
      <img src="../media/logo.png" class="p-1 h-full">
      <img src="../media/name.png" class="p-2 h-full">
    </div>

    <div class="flex gap-1 items-center mr-6">
      <img src="../media/lang-icon.png" class="p-1 h-10">
      <!-- <h6>Enlglish</h6> -->
    </div>
    <ul class="hidden laptop:flex list-none-900 mr-auto">
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-home']?></button></li>
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-contact']?></button></li>
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-about']?></button></li>
      <li class="flex-grow flex self-center"><button href="#" class="w-full py-2 px-6 text-center text-l hover:px-8 hover:scale-125 transition-all"><?=$text['nav-news']?></button></li>
    </ul>
    <a class="flex laptop:hidden flex-col py-1 my-1 gap-1">
      <div class="w-4 h-1 bg-blue-400 rounded"></div>
      <div class="w-4 h-1 bg-blue-400 rounded"></div>
      <div class="w-4 h-1 bg-blue-400 rounded"></div>
    </a>
</nav>