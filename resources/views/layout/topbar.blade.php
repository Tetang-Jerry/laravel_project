<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/anime.css')}}">
    @vite('resources/css/app.css')
    @yield('cssImport')
</head>
<body class="bg-backgrounddashboard flex-col flex ">
<!-- header -->

<header class="fixed w-full mx-auto py-3 px-16 shadow-md bg-white z-20 top-0">
    <!-- flex container -->
    <div class="flex items-center justify-between">
        <!--logo -->
        <div class="pt-2">
            <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-[120px]" alt="Alpha transit Logo">
        </div>

        <!--menu-items -->
        <div class="hidden md:flex space-x-[20px]">
            <a href="#" class="hover:text-customBlue text-[16px]">Home</a>
            <a href="#" class="hover:text-customBlue text-[16px]">Dashboard</a>
            <a href="#" class="hover:text-customBlue text-[16px]">Services</a>
            <a href="#" class="hover:text-customBlue text-[16px]">History</a>
            <a href="#" class="hover:text-customBlue text-[16px]">Help</a>
        </div>

        <div class="flex items-center justify-between space-x-[40px]">
            <!--icons -->
            <div class="flex space-x-[20px] ml-[50px]">
                <i class="fa-solid fa-gear text-customBlue text-[20px]"></i>
                <i class="fa-regular fa-bell text-customBlue text-[20px]"></i>
            </div>

            <!-- profile -->
            <div class="relative cursor-pointer group pl-4 border-l border-gray-400 flex space-x-[20px] items-center">
                <p class="font-semibold">berlin</p>
                <ion-icon name="person-circle-outline" class="text-4xl"></ion-icon>


                <!-- Dropdown menu -->
                <div class="absolute hidden -right-9 top-10 group-hover:block first-letter: z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>Account number</div>
                        <div class="font-medium truncate"></div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit profile</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="{{route('logoutUser')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</header>


<!-- container du sidebar et du main  -->










    <!-- main -->

    <Main class=" flex border border-1 w-full">

        @yield("container")

    </Main>
    <!-- footer -->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 -z-10">
        <div class="w-full max-w-screen-xl mx-auto  md:py-8">

            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">ALPHA TRANSIT™</a>. All Rights Reserved.</span>
        </div>
    </footer>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>
