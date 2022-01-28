<div class="w-screen h-screen fixed bg-[#000c] z-50 flex items-center justify-center opacity-100" id="reject_window">
    <div class="p-12 flex flex-col gap-10 max-w-[85%] justify-center items-center bg-gray-200 -translate-y-full opacity-50 rounded-xl">
        <img src="../media/tick.jpg" class="h-[clamp(5rem,6vw,8rem)]">
        <h1 class="text-10 text-center"><?=$text['registration-success']?></h1>
    </div>
    
</div>

<script>
    el = document.getElementById('reject_window')
    el.addEventListener('click', e=>{
        el.classList.add('done')
        el.addEventListener('transitionend', e=>{
            el.style.display = 'none'
        })
        window.history.replaceState({}, window.location.href, window.location.href.match(/^.+(?=\?)/)[0])
    })
</script>

<style>
    #reject_window{
        transition: 0.5s ease-out;
    }
    #reject_window div{
        animation: slide-down 0.5s forwards ease-out;
    }
    #reject_window.done{
        opacity: 0;
    }
    #reject_window.done div{
        animation: slide-up-out 0.5s forwards ease-out;

    }
</style>

