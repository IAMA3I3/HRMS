<div class=" nav-container scrollbar small-scrollbar transition-all duration-500">
    <div class=" p-4 border-b border-gray-300 sticky top-0 bg-white">
        <img src="./assets/logo.png" class=" w-[120px]" alt="">
    </div>
    <div class=" py-4">
        <!-- navs -->
        <a href="./index.php" class="<?php echo isPageActive('index.php') ? ' text-app-primary' : ' text-gray-600'; ?> py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[40px]">
                <i class="fa-solid fa-house"></i>
            </div>
            <div class=" flex-1 truncate">Dashboard</div>
            <i class="fa-solid fa-angle-down"></i>
        </a>
    </div>
</div>

<div id="toggle-nav" class=" nav-overlay md:hidden fixed top-0 left-0 w-full h-full bg-black/15 transition-all duration-500"></div>