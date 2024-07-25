<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Alpha transit | Home page</title>
    <link href="./input.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('images/photo_2024-07-17_10-35-45-removebg-preview.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <script src="{{asset('js/scrollHome.js')}}" defer ></script>
    <script src="{{asset('js/swipper.js')}}" defer ></script>
    <link href="{{asset('css/swipper.css')}}" rel="stylesheet" />

</head>

<body class="bg-blue-400">
<header class="bg-white absolute w-full  px-5 shadow-xl lg:px-40 z-50">
    <div class="flex justify-between py-3">
        <div class="flex gap-2">
            <p>business</p>
            <p>personal</p>
        </div>
        <div class="flex gap-2">
            <p>+1-800-356-6745</p>
            <p><a href="{{route('registerView')}}">SignUp</a>/<a href="#">Login</a></p>
        </div>
    </div>
    <hr />

    <div class="flex justify-between  items-center pb-1" id="scroll-home">
        <a href="{{Route('home')}}" ><div style="
            background-image: url('{{ asset('images/photo_2024-07-17_10-35-45-removebg-preview.png') }}');
            background-size: cover;
          " class="h-12 w-12"></div></a>
        <nav id="burger_nav" class="flex md:gap-4 ease-in duration-600 transition-all top-full max-md:absolute max-md:hidden  max-md:flex-col max-md:w-full max-md:bg-white max-lg:right-0">
            <a href="#" class="capitalize max-md:hover:bg-primary max-md:hover:text-white max-md:px-5 max-md:py-2 text-center">Home</a>
            <a href="#" class="capitalize max-md:hover:bg-primary max-md:hover:text-white max-md:px-5 max-md:py-2 text-center">about</a>
            <a href="#" class="capitalize max-md:hover:bg-primary max-md:hover:text-white max-md:px-5 max-md:py-2 text-center">services</a>
            <a href="#" class="capitalize max-md:hover:bg-primary max-md:hover:text-white max-md:px-5 max-md:py-2 text-center">pricing</a>
            <a href="#" class="capitalize max-md:hover:bg-primary max-md:hover:text-white max-md:px-5 max-md:py-2 text-center">contact</a>
            <a href="#" class=" md:hidden px-7 py-2  text-white w-full text-center bg-primary">
                Apply now</a>        </nav>
        <a href="#" class="max-md:hidden px-7 py-2 rounded-full w-fit text-white bg-primary">

            Apply now</a>
        <p class="md:hidden w-7 h-5  bg-black" id="burger"></p>
    </div>
</header>
<main>
    <section style="
            background-image: url('{{ asset('images/intro-bg.jpg') }}');
          height: 100vh;
          background-size: cover;
        " class="text-white w-full bg-center flex gap-5 px-5 lg:px-40 items-center max-md:justify-center relative after:bg-black after:opacity-20 after:w-full after:h-full after:right-0 after:z-10 after:absolute">
        <div class="relative z-20 flex flex-col gap-5 ">
            <div class="text-[#25626c] font-bold capitalize flex items-center gap-3 ">
                <div class="flex flex-col gap-1 items-end">
                    <p class="h-1 w-7 bg-[#25626c] rounded-full "></p>
                    <p class="h-1 w-5 bg-[#25626c] rounded-full "></p>
                </div>
                <p>bienvenue sur alpha transit</p>
            </div>
            <p class="text-4xl font-semibold">
                Stay in control <br class="max-md:hidden" />
                your <span class="text-[#25626c]">finances</span>
            </p>
            <p>
                <a href="{{route('registerView')}}" class="px-4 py-2 rounded-full bg-[#25626c]">create account</a>
                <a href="#" class="px-4 py-2 rounded-full bg-[#25626c]">check balance</a>
            </p>
        </div>
        <div class="absolute grid justify-between  grid-cols-4 gap-10 bottom-[-70px] w-full right-0 max-md:hidden px-40 text-black capitalize text-[12px] z-20 font-bold">
            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>money transfer</p>

            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>withdraw</p>

            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>bank deposit</p>

            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-wallet text-4xl"></i><br>online payement</p>
        </div>
    </section>
    <section class=" py-5 lg:py-24 bg-white lg:px-40 flex max-md:flex-col-reverse">
        <div class="relative lg:w-1/2 flex rounded-2xl">
            <div class="flex items-center w-1/2 flex-col gap-3">
                <p class="bg-primary  px-5 py-2 line-clamp-2 text-white text-[12px] text-center">
                    <span class="text-2xl">100</span> <br>awards
                </p>
                <div style="background-image: url('{{asset('images/img.jpg')}}')" class="bg-cover h-[50vh] w-full" >

                </div>
            </div>
            <div class="flex items-center w-1/2 flex-col gap-3 absolute right-0">

                <div style="background-image: url('{{asset('images/doctor-2.png')}}')" class="bg-cover h-[50vh] w-full" >

                </div>
                <p class="bg-primary  px-5 py-2 line-clamp-2 text-white text-[12px] text-center">
                    <span class="text-2xl">3.5m</span> <br>accounts
                </p>
            </div>
        </div>
        <div class="py-5 lg:ml-20 lg:text-start text-center flex flex-col justify-between md:items-start gap-3 lg:w-[40%]">
            <div class="text-[#25626c] font-bold capitalize flex items-center w-full max-md:justify-center py-5 text-[12px]  gap-3 ">
                <div class="flex flex-col gap-1 items-end">
                    <p class="h-1 w-7 bg-[#25626c] rounded-full "></p>
                    <p class="h-1 w-5 bg-[#25626c] rounded-full "></p>
                </div>
                <p>About Us</p>

            </div>
            <p class="text-2xl  capitalize font-bold">
                not fine decisions but <br>good <span class="text-[#25626c]">decisions</span> fast
            </p>
            <p>
                le bibliste offre à l’archéologue un cadre chronologique préétabli, l’archéologue interprète ses découvertes en fonction de ce cadre initial, .
            </p>
            <a href="#" class="max-md:hidden px-7 py-2 rounded-md text-white bg-[#25626c] capitalize">
                more about us</a>
        </div>
    </section>
    <section class="lg:pb-20 bg-blue-100 lg:px-40 text-center ">
        <div class="text-[#25626c] font-bold capitalize flex items-center text-center w-full justify-center py-5 text-[12px] gap-3">
            <div class="flex flex-col gap-1 items-end">
                <p class="h-1 w-7 bg-[#25626c] rounded-full"></p>
                <p class="h-1 w-5 bg-[#25626c] rounded-full"></p>
            </div>
            <p>best services</p>
        </div>
        <p class="text-4xl capitalize font-bold">
            Entirely provides the best <span class="text-[#25626c]">services</span>
        </p>
        <p class="text-[14px] py-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iste incidunt mollitia qui fugiat reprehenderit?
        </p>

        <!-- Slider Container -->
        <div class="relative overflow-hidden">
            <div class="slider-wrapper">
                <div class="slider-slide px-2">
                    <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                        <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>mobile banking<br>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
                    </div>
                </div>
                <div class="slider-slide px-2">
                    <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                        <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>home loan<br>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
                    </div>
                </div>
                <div class="slider-slide px-2">
                    <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                        <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>money exchange<br>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
                    </div>
                </div>
                <div class="slider-slide px-2">
                    <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                        <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>your master card<br>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
                    </div>
                </div>
                <div class="slider-slide px-2">
                    <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                        <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>online business<br>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
                    </div>
                </div>
                <div class="slider-slide px-2">
                    <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                        <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>others loan<br>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
                    </div>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button id="prevBtn" class="bg-primary text-white p-3">←</button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button id="nextBtn" class="bg-primary text-white p-3">→</button>
            </div>
        </div>
    </section>    <section class="bg-[#F7F7F7] lg:py-12 lg:px-40 text-center">
        <div class="text-[#25626c] font-bold capitalize flex items-center w-full justify-center py-5 text-[12px]  gap-3 ">
            <div class="flex flex-col gap-1 items-end">
                <p class="h-1 w-7 bg-[#25626c] rounded-full "></p>
                <p class="h-1 w-5 bg-[#25626c] rounded-full "></p>
            </div>
            <p>pricing plan</p>

        </div>
        <p class="text-4xl  capitalize font-bold">
            grab our mega deposit <span class="text-[#25626c]">deposit</span>
        </p>
        <p class="text-[14px] py-3 font-bold">
            check out our most range of plan for you
        </p>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-5 gap-3">

            <div class=" flex flex-col items-center px-10 py-10 gap-4 rounded-md bg-[#ECF3FB] duration-300 shadow-2xl capitalize text-xl font-bold lg:hover:scale-125 hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-10 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold lg:hover:scale-125 hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-10 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold lg:hover:scale-125 hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
        </div>





    </section>
    <section class="flex flex-col py-10 lg:py-24 items-center gap-5 text-white capitalize" style="background-image: url("{{asset('images/img.jpg')}}")">
        <h1 class="font-semibold text-2xl lg:text-4xl">sign up for newsletter</h1>

        <div class="flex gap-2">
            <input type="email" class="placeholder-white focus:border-none rounded-md px-5 py-2 border border-white border-solid bg-transparent" id="mail" placeholder="your email">
            <a href="" class="rounded-md px-5 py-2 bg-white text-blue-600">submit</a>
        </div>
    </section>
</main>
</body>

</html>
