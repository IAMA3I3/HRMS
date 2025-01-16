<div class=" nav-container scrollbar small-scrollbar transition-all duration-500">
    <div class=" p-4 border-b border-gray-300 sticky top-0 bg-white z-10">
        <img src="./assets/logo.png" class=" w-[120px]" alt="">
    </div>
    <!-- navs -->
    <div class=" py-4">
        <!-- dashboard -->
        <div class="<?php echo isPageActive('index.php') ? ' text-app-primary' : ' text-gray-500'; ?> nav-dropdown-toggle cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-house"></i>
            </div>
            <div class=" flex-1 truncate">Dashboard</div>
            <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i>
        </div>
        <!-- subnav -->
        <div class="nav-dropdown transition-all duration-500 overflow-hidden">
            <a href="./index.php" class="<?php echo isPageActive('index.php') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>HRM Dashboard</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Employee Dashboard</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>CRM Analysis</div>
            </a>
        </div>
        <!-- HRM -->
        <div class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> nav-dropdown-toggle cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-users-gear"></i>
            </div>
            <div class=" flex-1 truncate">HRM</div>
            <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i>
        </div>
        <!-- subnav -->
        <div class="nav-dropdown transition-all duration-500 overflow-hidden">
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Employee</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Designations</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Attendance</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Office Loan</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Personal Loan</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Leaves</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Holidays</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Overtime</div>
            </a>
            <!--  -->
            <a href="./index.php" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Warning</div>
            </a>
        </div>
        <!-- CRM -->
        <div class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> nav-dropdown-toggle cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-people-arrows"></i>
            </div>
            <div class=" flex-1 truncate">CRM</div>
            <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i>
        </div>
        <!-- subnav -->
        <div class="nav-dropdown transition-all duration-500 overflow-hidden">
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Leads</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Deals</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Clients</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>CRM Setup</div>
            </a>
        </div>
        <!-- Apps -->
        <div class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> nav-dropdown-toggle cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-shapes"></i>
            </div>
            <div class=" flex-1 truncate">Apps</div>
            <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i>
        </div>
        <!-- subnav -->
        <div class="nav-dropdown transition-all duration-500 overflow-hidden">
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Chat</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Email Compose</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Contacts</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Calendar</div>
            </a>
        </div>
        <!-- payroll -->
        <div class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> nav-dropdown-toggle cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-wallet"></i>
            </div>
            <div class=" flex-1 truncate">Payroll</div>
            <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i>
        </div>
        <!-- subnav -->
        <div class="nav-dropdown transition-all duration-500 overflow-hidden">
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Pay List</div>
            </a>
            <!--  -->
            <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-8 hover:bg-gray-100 flex items-center font-semibold">
                <div class=" w-[20px]">
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div>Pay Slip</div>
            </a>
        </div>
        <!-- expenses -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-money-bill-wave"></i>
            </div>
            <div class=" flex-1 truncate">Expenses</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- project -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-toolbox"></i>
            </div>
            <div class=" flex-1 truncate">Projects</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- training -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <div class=" flex-1 truncate">Training</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- resignation -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-person-walking-arrow-right"></i>
            </div>
            <div class=" flex-1 truncate">Resignation</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- promotion -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-arrow-up-right-dots"></i>
            </div>
            <div class=" flex-1 truncate">Promotion</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- meeting -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-handshake"></i>
            </div>
            <div class=" flex-1 truncate">Meeting</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- transfer -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-right-left"></i>
            </div>
            <div class=" flex-1 truncate">Transfer</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- documents -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-file"></i>
            </div>
            <div class=" flex-1 truncate">Documents</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
        <!-- announcement -->
        <a href="#" class="<?php echo isPageActive('') ? ' text-app-primary' : ' text-gray-500'; ?> cursor-pointer py-2 px-4 hover:bg-gray-200 flex items-center font-semibold">
            <div class=" w-[30px]">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            <div class=" flex-1 truncate">Announcement</div>
            <!-- <i class="fa-solid fa-angle-down drop-ic transition-all duration-500"></i> -->
        </a>
    </div>
</div>

<div id="toggle-nav" class=" nav-overlay md:hidden fixed top-0 left-0 w-full h-full bg-black/15 transition-all duration-500"></div>