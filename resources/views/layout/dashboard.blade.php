<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @vite('resources/css/app.css')
    @yield('cssImport')
</head>
<body>
        <!-- nav bar -->

        <header class="relative mx-auto py-4 px-16 shadow-md">
        <!-- flex container  -->
            <div class="flex items-center justify-between ">
        <!--logo -->
            <div class="pt-2">
        <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-[120px] " alt="Alpha transit Logo">
</div>

<!--menu-items -->
<div class="hidden md:flex space-x-[20px]">
<a href="#" class="hover:text-customBlue text-[16px]">Home</a>
<a href="#" class="hover:text-customBlue text-[16px]" >Dashboard</a>
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
    <div class="flex space-x-[20px] items-center ">
        <p>Ashley</p>
        <img src="/images/profile.jpg" class="h-[40px] w-[40px] rounded-full " alt="profile-picture">
    </div>
</div>


</div>

</header>

  <!-- main -->
<Main>
      <div class="container">
        @yield("container")
      </div>
</Main>


<!-- footer -->
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-24" alt="Flowbite Logo" />
               
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">home</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">dashboard</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">service</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">History</a>
                </li>
                
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">help</a>
                </li>
                
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">ALPHA TRANSIT™</a>. All Rights Reserved.</span>
    </div>
</footer>






</body>
</html>
