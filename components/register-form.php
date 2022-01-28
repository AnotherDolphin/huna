<div id="form-modal" class="hidden w-full h-full fixed top-0 bg-[#000c] z-50 items-center justify-center">
    <div id="form-box" class="bg-white bg-opacity-80 rounded-xl shadow-2xl flex flex-col h-fit p-6 items-center relative max-h-[90%] ">
    <div onclick="closeFormModal()" class="rotate-[45deg] text-4xl absolute right-4 top-2 cursor-pointer">+</div>
    <img src="../media/logo-name.png" class="pb-4 w-28">

    <form id="register-form" class="flex flex-col laptop:grid grid-cols-2 pt-8 sm:overflow-auto gap-8 laptop:gap-10" method="post" action="../php/submit.php" onsubmit="formSubmit()">

        <div class="relative">
            <input class="w-72 rounded-xl p-2 border-[1px] border-black" name="name" type="text" placeholder="<?=$text['in-full_name']?>">
            <span>&#x1F6C8; <?=$text['name-tip']?></span>
        </div>

        <div class="relative">
            <input class="w-72 rounded-xl p-2 border-[1px] border-black" name="email" type="text" placeholder="<?=$text['in-email']?>">
            <span><?=$text['email-tip']?></span>
        </div>        

        <div class="relative">
            <input autocomplete="off" class="w-72 rounded-xl p-2 border-[1px] border-black" name="nationality" type="text" placeholder="<?=$text['in-country']?>">
            <span><?=$text['country-tip']?></span>
            <ul id="country-list" class="hidden absolute z-20 top-[100%] mt-1 bg-white w-72 border-2 rounded-xl border-gray-400 rounded-b max-h-48 overflow-y-scroll">
            <?php foreach ($countries as $key => $value) {
                echo '<li class="p-2 cursor-pointer hover:bg-gray-200" data-key=$key>'.$value.'</li>'; 
                }?>
            </ul>
        </div>
        
        <div class="relative">
            <input class="w-72 rounded-xl p-2 border-[1px] border-black" name="phone" type="tel" pattern="\+{0,1}[0-9]{9,15}" placeholder="<?=$text['in-phone']?>">
            <span><?=$text['phone-tip']?></span>
        </div>

        <div class="relative">
            <input class="w-72 rounded-xl p-2 border-[1px] border-black" name="whatsapp" type="tel" pattern="\+{0,1}[0-9]{10,15}" placeholder="<?=$text['in-whatsapp']?>">
            <span><?=$text['phone-tip']?></span>
        </div>

        <input class="w-72 rounded-xl p-2 border-[1px] border-black" name="job" type="text" placeholder="<?=$text['in-sector']?>">
        
        <div class="relative">
            <h1 id="interest_area-checklist" class="bg-gray-200 font-bold px-4 py-2 border-2 border-gray-500 dropdown-button rounded-2xl relative cursor-pointer" ><?=$text['interest_area']?>
                <span class="font-normal text-green-700 text-sm invisible">  <?=$text['selected']?> ()</span></h1>
            <span><?=$text['select_one_atleast']?></span>
            <div class="w-72 z-30 max-h-0 mt-1 flex flex-col gap-1 overflow-hidden px-2 transition-all absolute bg-gray-200 rounded-2xl">
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-new_cairo" name="interest_area[]" value="<?=$text['area-new_cairo']?>">
                    <label for="check-new_cairo"><?=$text['area-new_cairo']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-october" name="interest_area[]" value="<?=$text['area-october']?>">
                    <label for="check-october"><?=$text['area-october']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-zayid" name="interest_area[]" value="<?=$text['area-zayid']?>">
                    <label for="check-zayid"><?=$text['area-zayid']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-north_coast" name="interest_area[]" value="<?=$text['area-north_coast']?>" >
                    <label for="check-north_coast"><?=$text['area-north_coast']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-new_alamain" name="interest_area[]" value="<?=$text['area-new_alamain']?>" >
                    <label for="check-new_alamain"><?=$text['area-new_alamain']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-sokhna" name="interest_area[]" value="<?=$text['area-sokhna']?>" >
                    <label for="check-sokhna"><?=$text['area-sokhna']?></label>
                </div>
            </div>
        </div>

        <div class="relative">
            <h1 id="estate_type-checklist" class="bg-gray-200 font-bold px-4 py-2 border-2 border-gray-500 dropdown-button rounded-2xl relative cursor-pointer"><?=$text['estate_type']?>
                <span class="font-normal text-green-700 text-sm invisible">  <?=$text['selected']?> ()</span></h1>
            <span><?=$text['select_one_atleast']?></span>
            <div class="w-72 z-30 max-h-0 mt-1 flex flex-col gap-1 overflow-hidden px-2 transition-all absolute bg-gray-200 rounded-2xl">
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-residental" name="estate_type[]" value="<?=$text['type-residental']?>">
                    <label for="check-residental"><?=$text['type-residental']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-commercial" name="estate_type[]" value="<?=$text['type-commercial']?>">
                    <label for="check-commercial"><?=$text['type-commercial']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-adminstrative" name="estate_type[]" value="<?=$text['type-adminstrative']?>">
                    <label for="check-adminstrative"><?=$text['type-adminstrative']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-medical" name="estate_type[]" value="<?=$text['type-medical']?>">
                    <label for="check-medical"><?=$text['type-medical']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-hotel" name="estate_type[]" value="<?=$text['type-hotel']?>">
                    <label for="check-hotel"><?=$text['type-hotel']?></label>
                </div>
                <div class="inline-flex items-center gap-1">
                    <input type="checkbox" id="check-holiday_home" name="estate_type[]" value="<?=$text['type-holiday_home']?>">
                    <label for="check-holiday_home"><?=$text['type-holiday_home']?></label>
                </div>
            </div>
        </div>
        
        <!-- <select form="register-form" id="country-select" name="country">
        <?php //foreach ($countries as $key => $value) {echo '<option value='.$key.' >'.$value.'</option>'; }?>
        </select> -->
        
        <input disabled class="mt-4 bg-green-600 text-white py-2 px-8 self-center rounded-[10%/50%] shadow col-span-2 justify-self-center hover:scale-110 cursor-pointer" type="submit" value="<?=$text['in-register']?>">
    </form>
    </div>
    <!-- <iframe id="confirm-frame" class="hidden bg-gray-100 rounded-xl shadow-2xl flex-col h-1/3 w-1/3 p-8 items-center fixed" name="frame"></iframe> -->
</div>

<style>

    #form-modal > div:first-child{
        transform: translateY(-100vh);
        opacity: 0.3;
        transition: all .5s;
    }
    #form-modal > div:first-child.slide-down {
        animation: slide-up 0.5s forwards;
    }
    form::-webkit-scrollbar {
  display: none;
}
    input:focus {
        outline: none !important;
        border: 1px solid black;
        box-shadow: 0 0 10px #719ECE;
        /* background: #aaf; */
    }
    input:not(:placeholder-shown):not(:focus) {
        border-color: red;
    }
    .red-border{
        border-color: red;
    }
    .red-border-animate{
        animation: redden;
        animation-direction: alternate;
        animation-duration: 1s;
        animation-delay: 0.5s;
        animation-iteration-count: 2;
    }
    .verified{
        border-color: green !important;
    }
    .dropdown-button::after{
        content: '';
        position: absolute;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-top: 12px solid #000;
        top: 50%;
        left: 7%;
        transform: translateY(-50%);
    }
    h1.expand-checkbox{
        background: #97fe58;
    }
    h1.expand-checkbox ~ div{
        max-height: 200px;
        padding: 0.5rem;
    }
    
    input[type="submit"]:disabled{
        background-color: #555;
        cursor: default;
    }
    input[type="submit"]:disabled:hover{
        transform: none;
    }

    input+span, #estate_type-checklist+span, #interest_area-checklist+span {
        position: absolute;
        right: 50%;
        bottom: 100%;
        transform: translate(50%, -7px);
        padding: 2px 8px;
        background-color: #a00;
        text-align: center;
        border-radius: 15px;
        width: fit-content;
        max-width: 80%;
        font-size: 12px;
        color: white;
        display: none;
    }
    input+span::after, #estate_type-checklist+span::after, #interest_area-checklist+span::after{
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #a00 transparent transparent transparent;
    }

    @keyframes redden {
        50%{
            border-color: red;
            background-color: #ffefef;
        }
        100%{
            border-color: default;
            background-color: default;
        }
    }
</style>