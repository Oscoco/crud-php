<header class="text-gray-400 bg-indigo-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <img src="<?= PATH ?>/assets/img/Logo.min.png" class="w-7" alt="" srcset="">
            <span class="ml-3 text-xl">CURD</span>
        </a>
        <nav class="separator flex flex-wrap items-center text-base justify-center font-medium ">
            <a class="mr-5 cursor-pointer text-white hovertext" href="<?= PATH ?>/">
                <i class='bx bx-home'></i> Home</a>
            <a class="mr-5 cursor-pointer text-white hovertext separator md:ml-0" href="<?= PATH ?>/pages/roles.php">
                <i class='bx bx-link'></i> Role</a>
        </nav>

        <div class="dropdown inline-block relative">
            <button class="flex items-center text-indigo-500 font-bold bg-white border-0 py-2 px-3 focus:outline-none hover:bg-gray-100 rounded text-base mt-4 md:mt-0">
                <img class="w-8 h-8 rounded-full mr-2" src="<?=PATH?>/assets/img/example.jpg" alt="">
                <span class="mr-1">User name <i class='bx bx-down-arrow-alt'></i></span>
            </button>

            <ul class="dropdown-menu w-44 absolute hidden font-bold text-gray-700 pt-2 text-center">
                <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-16 block " href="#">One</a></li>
                <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-16 block " href="#">Two</a></li>
                <li class=""><a class="rounded-b bg-gray-200 hover:bg-red-500 hover:text-white py-2 block items-center text-center" href="#">
                <i class='bx bx-log-out mx-1'></i> Log out</a></li>
            </ul>
        </div>
    </div>
</header>