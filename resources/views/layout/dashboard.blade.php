<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/images/watermark_preview_image20240717-1-urrith-removebg-preview" type="image/X-icon">
    <link rel="stylesheet" href="{{asset('css/anime.css')}}">
    @vite('resources/css/app.css')
    @yield('cssImport')
</head>

<body class="bg-backgrounddashboard flex-col flex">

              <!-- header-------------------------------------------- -->
     <header class=" px-10 bg-white  w-full fixed top-0 left-0 z-50 shadow-xl md:px-6 lg:px-16">
        <nav class="h-28 flex justify-between items-center mx-auto" id="dropdown-menu"> 
                <div >
                    <a href="#" class="uppercase text-2xl font-bold">
                        <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-[120px]" alt="Alpha transit Logo">
                    </a>
                </div>
                <div class="absolute hidden top-28 left-0 w-full py-4 px-5 border-b border-primary ease-in-out duration-500 bg-white md:bg-transparent md:static md:flex flex-row md:py-0 md:border-none md:w-auto md:mx-auto  " id="menus">
                   
                    <div class="flex w-full justify-between items-center border-b-2 border-gray-400 md:hidden">

                        <div class=" py-3 text-sm text-gray-900">
                            <div class="text-lg font-semibold italic">Account number</div>
                            <div class="font-bold text-lg text-primary">{{$user =Auth::guard('user_auth')->user()->numCompte}}</div>
                        </div>
    
                        <div class="py-3 text-sm text-gray-900">
                            <div class="text-lg font-semibold italic">{{$user=Auth::guard('user_auth')->user()->username}}</div>
                           <div class="flex items-end">
                            <ion-icon name="person-circle-outline" class="text-6xl profile " ></ion-icon>
                            <a href=" " class="text-lg text-primary font-bold">Edit</a>
                           </div>
                        </div>

                    </div>
                   
                    <ul class=" text-left font-semibold py-4 md:flex flex-row md:text-sm md:space-x-3">
                        <li class=" py-2 md:py-0">
                            <a href="#Home" class="hover:text-secondarycolor ease-in duration-200 uppercase cursor-pointer hover:text-primary">Home</a>
                        </li> 
                        <li class=" py-2 md:py-0">
                            <a href="#Category" class="hover:text-secondarycolor ease-in duration-200 uppercase cursor-pointer hover:text-primary">Dashboard</a>
                        </li> 
                        <li class=" py-2 md:py-0">
                            <a href="#Promo" class="hover:text-secondarycolor ease-in duration-200 uppercase cursor-pointer hover:text-primary">Services</a>
                        </li> 
                        <li class=" py-2 md:py-0">
                            <a href="#About" class="hover:text-secondarycolor ease-in duration-200 uppercase cursor-pointer hover:text-primary ">Transaction</a>
                        </li>
                        <li class=" py-2 md:py-0">
                            <a href="#Menu" class="hover:text-secondarycolor ease-in duration-200 uppercase cursor-pointer hover:text-primary">Help</a>
                        </li>
                        <li class=" py-2 md:hidden">
                            <a href="{{route('logoutUser')}}" class=" block  text-primary hover:bg-gray-100 text-lg font-semibold hover:text-primary">Sign out</a>
                        </li>
                    </ul>
                    
                </div>

                <div class="flex items-cente ml-4r justify-center">
                    <i class="fa-regular fa-bell text-customBlue text-3xl mr-6"></i>
                <div  class="cursor-pointer">
                    <i class=" text-3xl  cursor-pointer fa-solid fa-bars md:hidden" id="hamburger"></i>
                    <i class="hidden text-3xl cursor-pointer fa-solid fa-xmark" id="closeicon"></i>
                </div>

                  <!-- profile -->
                  <div class=" hidden  md:relative cursor-pointer pl-4 border-l border-gray-400 md:flex space-x-[20px] items-center">
                    <p class="font-semibold text-sm">{{$user=Auth::guard('user_auth')->user()->username}}</p>
                    <ion-icon name="person-circle-outline" class="text-4xl profile " id="profil"></ion-icon>


                    <!-- Dropdown menu -->
                    <div class="absolute hidden -right-9 top-14  first-letter: z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 dropdown">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div class="text-primary text-sm italic font-bold">Account number</div>
                            <div class=" font-medium truncate text-sm">{{$user =Auth::guard('user_auth')->user()->numCompte}}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                            <li class="" id="edit">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm font-semibold">Edit profile</a>
                            </li>
                        </ul>
                        <div class="py-2 logout">
                            <a href="{{route('logoutUser')}}" class=" block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm font-semibold">Sign out</a>
                        </div>
                    </div>

                </div>

            </div>
        </nav>
     </header>

        <!-- main -->
        <main class="grid grid-cols-1 gap-2 mt-24 w-full relative px-4 lg:grid lg:grid-cols-5">

            {{-- see balance --}}

            <div class="m-4 md:hidden " id="show"><img src="/images/wallet.png" alt="wallet" class=" cursor-pointer w-[70px] mb-3">
            </div>


            {{-- container -contain 1 --}}

          <div class="z-10 absolute flex flex-col h-[100vh] -top-5 bg-black bg-opacity-80 -left-full w-full px-4 mt-3 md:h-auto md:w-auto md:relative md:top-auto md:left-0 md:bg-transparent md:bg-opacity-0 lg:col-span-1 lg:border" id="balances">
                
                  
              {{-- close bouton --}}
               <div class="place-self-end md:hidden"><i class="mb-7 text-3xl text-white  cursor-pointer fa-solid fa-xmark md:hidden" id="close"></i></div>


            <div class="flex justify-between items-center mb-1">  
                <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-white md:text-primary md:font-bold">Account</h5>
                <h5 class="font-bold text-3xl text-white md:text-primary md:font-bold">+</h5>
            </div>
            
            {{-- balance  col1--}} 
           <div class="  flex flex-col gap-4 py-4 px-7 md:grid md:grid-cols-2 lg:grid lg:grid-cols-1 lg:px-2" >
              

                 
                {{-- compte courant --}}
                <div class=" flex flex-col bg-white rounded-lg shadow-lg px-6 py-6">
                    <p class="font-bold text-xl flex justify-between">
                        <span class="text-primary font-bold" >$<span class="text-primary font-bold" id="balance">15000</span></span>
    
                        <i class="fa-regular cursor-pointer fa-eye-slash text-primary mt-2" id="toggleBalance"></i>
                    </p>
                    <p class="font-bold text-primary mb-2">
                        Compte courant
                    </p>

                    <div class="place-self-end">
                        <img src="/images/wallet.png" alt="wallet" class="wallet w-[70px] ">
                    </div>

                </div>

                {{-- compte Epargne --}}
                <div class=" flex flex-col bg-white rounded-lg shadow-lg px-6 py-6">
                    <p class="font-bold text-xl flex justify-between">
                        <span class="text-primary font-bold" >$<span class="text-primary font-bold" id="balance2">45000</span></span>
    
                        <i class="fa-regular cursor-pointer fa-eye-slash text-primary mt-2" id="toggleBalance2"></i>
                    </p>
                    <p class="font-bold text-primary mb-2">
                        Compte epargne
                    </p>

                    <div class="place-self-end">
                        <img src="/images/savings.png" alt="wallet" class="w-[80px] savings ">
                    </div>

                </div>
            
           </div>

          </div>



           {{-- recharge - depot - retrait  col2--}}

            

            {{-- container-conatain 2 --}}
                <div class="flex flex-col w-full col-span-2 gap-5">
                    
                        @yield("contain")
                </div>

           {{-- transaction col3--}}
           <div class="grid grid-cols-1 px-7 w-full gap-4 col-span-2 lg:flex lg:flex-col lg:justify-items-end">
                <p class="font-bold text-2xl py-4 text-primary place-content-end">Transactions details </p>

                <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-lg mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Today, 15 july</h5>
                        <i class="fa-solid fa-gear text-customBlue text-[20px]"></i>
                   </div>
                   <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                           Depot
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-green-600">
                                        +$320
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Bonnie Green
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            retrait
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-red-600">
                                        -$3467
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-500 truncat">
                                            transfert
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-red-600">
                                        -$67
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Lana image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Lana Byrd
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            transfert
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-red-600">
                                        -$367
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4 mb-3">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Thomas image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Thomes Lean
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            Depot
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-green-600">
                                        +$2367
                                    </div>
                                </div>
                            </li>
                        </ul>
                   </div>
                   <button class="font-bold bg-primary w-full text-white p-2 rounded-lg shadow-lg">All operations</button>
                </div>

                <div class=" rounded-lg shadow-lg grid grid-cols-5  bg-[linear-gradient(to_right,_#C174EA,_#B7A4F0)] p-4 lg:hidden">

                   <div class=" col-span-3">

                    <p class="text-white font-bold text-xl uppercase md:text-4xl">
                        protect your money
                    </p>
                    
                    <p class="text-white font-500 md:text-lg">
                    set up  two-factor authentification the <br>when withdrawing money
                    </p>

                   </div>

                   <div class="flex items-end  col-span-2 ">
                    <img src="/images/lock.png" alt="security" class="wallet md:w-xsm">
                 </div>

                    </div>

                </div>
                
           </div>
        </main>

    

    <!-- footer -->
    <footer class="bg-white rounded-lg shadow-lg -z-10">
        <div class="w-full max-w-screen-xl mx-auto md:py-8">
            <span class="block text-md text-gray-500 sm:text-center">© 2023 <a href="#" class="hover:underline">ALPHA TRANSIT™</a>. All Rights Reserved.</span>
        </div>
    </footer> 

    <script src="{{ asset('js/hidebalance.js') }}">

    </script>
    
    <script src="{{ asset('js/hambuger-menu.js') }}">
    </script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
