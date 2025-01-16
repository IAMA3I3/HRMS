<div class=" sticky top-0 p-4 bg-white shadow-md">
    <div class=" flex items-center gap-4 lg:gap-6">
        <!-- menu btn -->
        <div id="toggle-nav" class=" text-2xl cursor-pointer active:text-app-primary">
            <i class="fa-solid fa-bars-staggered"></i>
        </div>
        <!-- first name -->
        <div class=" flex-1 truncate text-2xl font-semibold">
            Hello James
        </div>
        <!-- searchbar -->
        <div class=" hidden md:block">
            <form action="">
                <div class=" rounded-full flex items-center gap-2 border border-gray-300 py-1 px-4">
                    <input type="search" name="search" id="search" class=" outline-none w-full max-w-[150px]" placeholder="Search Here ...">
                    <button type="submit" class=" text-gray-400"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <!-- chat notification -->
        <div class=" relative text-gray-500 cursor-pointer">
            <i class="fa-regular fa-message"></i>
            <!-- badge -->
            <!-- <div class=" absolute top-[-4px] right-[-4px] w-[16px] overflow-hidden aspect-square rounded-full bg-app-secondary text-white flex items-center justify-center text-[8px]">
                <div class="">0</div>
            </div> -->
        </div>
        <!-- alert notification -->
        <div class=" relative text-gray-500 cursor-pointer">
            <i class="fa-regular fa-bell"></i>
            <!-- badge -->
            <div class=" absolute top-[-4px] right-[-4px] w-[16px] overflow-hidden aspect-square rounded-full bg-app-secondary text-white flex items-center justify-center text-[8px]">
                <div class="">1</div>
            </div>
        </div>
        <!-- profile -->
        <div class=" top-dropdown-toggle relative cursor-pointer flex gap-2 items-center">
            <!-- avater -->
            <div class=" w-[40px] aspect-square rounded-full overflow-hidden bg-gray-500">
                <img src="./assets/man-placeholder.jpg" class=" w-full h-full object-cover" alt="">
            </div>
            <!-- username -->
            <div class=" hidden md:block">
                <div class=" font-semibold">Essien19</div>
                <div class=" flex items-center gap-2">
                    <div class=" w-[8px] aspect-square rounded-full bg-green-500"></div>
                    <div class=" text-xs font-semibold text-gray-500">Online</div>
                </div>
            </div>
            <!-- arrow -->
            <div class=" drop-ic transition-all duration-500 text-gray-500">
                <i class="fa-solid fa-angle-down"></i>
            </div>
            <!-- dropdown -->
            <div class=" top-dropdown transition-all duration-500 absolute right-0 top-[60px] bg-white border border-gray-100 shadow-lg rounded-md p-2 min-w-[180px]">
                <!-- profile -->
                <a href="#" class=" flex items-center text-sm font-semibold text-gray-500 py-2 px-4 hover:text-app-primary">
                    <div class=" w-[20px]">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="">Profile</div>
                </a>
                <div class=" w-full h-[1px] bg-gray-200"></div>
                <!-- chat -->
                <a href="#" class=" flex items-center text-sm font-semibold text-gray-500 py-2 px-4 hover:text-app-primary">
                    <div class=" w-[20px]">
                        <i class="fa-regular fa-message"></i>
                    </div>
                    <div class="">Chat</div>
                </a>
                <div class=" w-full h-[1px] bg-gray-200"></div>
                <!-- logout -->
                <a href="#" class=" flex items-center text-sm font-semibold text-gray-500 py-1 px-4 hover:text-app-primary">
                    <div class=" w-[20px]">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <div class="">Log Out</div>
                </a>
            </div>
        </div>
    </div>
</div>