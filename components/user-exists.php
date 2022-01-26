<div class="w-screen h-screen fixed bg-[#000c] z-50 flex items-center justify-center" onclick="gotIt(this)">
    <div class="p-12 flex justify-center items-center bg-gray-200">
        <h1 class="text-10"><?=$text['already_registered']?></h1>
    </div>
</div>

<script>
    const gotIt = (this) =>{
        this.style.display = 'none'
    }
</script>