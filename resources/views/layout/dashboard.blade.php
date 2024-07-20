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
<body class="bg-backgrounddashboard "> 
        <!-- header -->

        <header class=" fixed w-full  mx-auto  py-3 px-16 shadow-md bg-white z-20 top-0  ">
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


<!-- container du sidebar et du main  -->


<div class="relative flex mt-[66px] z-10">   

      <!-- side bar -->

 
<div class="sticky flex flex-col items-center bg-transparent py-[60px]  h-[calc(100vh-2rem)] w-full max-w-[24rem] px-6 ">
  <div class=" p-4 flex space-x-[200px] mb-4">
    <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-primary ">Account</h5>
    <h5 class=" font-bold text-3xl text-primary ">+</h5>
  </div>

    <!-- compte courant -->

    <div class="flex flex-col w-[290px] bg-white h-[150px] bg rounded-lg shadow-xl mb-4 py-1 px-8">

          <p class="font-bold text-2xl">
          <span class="text-primary font-bold">$</span>
          30000 
            
          </p>

          <p class="font-bold text-primary mb-2">
            Compte courant
          </p>

          <img src="images/wallet.png" alt="wallet" class="wallet w-[70px] place-self-end ">

    </div>

      <!-- compte epargne -->

      <div class="flex flex-col w-[290px] bg-white h-[150px] bg rounded-lg shadow-xl mb-4 py-t px-8">

      <p class="font-bold text-2xl">

          <span class="text-primary font-bold ">$</span>
          30000 
            
          </p>

          <p class="font-bold text-primary">
            Compte Epargne
          </p>

          <img src="images/savings.png" alt="wallet" class="w-[80px] savings place-self-end">
      </div>

      <!-- balance status -->

      <div class="flex items-center my-[20px] space-x-[20px] w-full justify-center cursor-pointer font-bold">
        <i class="fa-regular fa-eye-slash text-primary"></i>
        <p>Hide balance</p>
      </div>
</div>


  


  <!-- main -->

<Main class=" flex border border-1 w-full">
     
@yield("contain")
    
</Main>


</div>
  

<!-- footer -->
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 -z-10">
    <div class="w-full max-w-screen-xl mx-auto  md:py-8">
        
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">ALPHA TRANSIT™</a>. All Rights Reserved.</span>
    </div>
</footer>






</body>
</html>