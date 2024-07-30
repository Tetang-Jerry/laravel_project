<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/anime.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    @yield('cssImport')

    <style>
        /* Style de base pour le tableau */
       table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
           /* Style pour les titres du tableau */
        thead th {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
         /* Style pour les lignes du tableau */
         tbody td {
            padding: 10px;
            border: 1px solid #ddd;
        }
          /* Ajouter des bordures entre les titres */
          thead th:not(:last-child) {
            border-right: 1px solid #ddd;
        }
    </style>
</head>

<body class="flex flex-col bg-backgrounddashboard ">
    <!-- header -->

    <header class="fixed top-0 z-20 w-full px-16 py-3 mx-auto bg-white shadow-md ">
        <!-- flex container  -->
        <div class="flex items-center justify-between ">
            <!--logo -->
            <div class="pt-2">
                <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-[120px] "
                    alt="Alpha transit Logo">
            </div>

            <!--menu-items -->
            <div class="hidden md:flex space-x-[20px]">
                <a href="{{ route('adminView') }}" class="hover:text-customBlue text-[16px]">Home</a>
                <a href="{{ route('accounts.index') }}" class="hover:text-customBlue text-[16px] font-bold text-emerald-800">Accounts</a>
                <a href="#" class="hover:text-customBlue text-[16px]">Transaction</a>
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










    <!-- main -->

    <Main class="flex w-full pt-32 border border-1">

        <table >
            <thead>
                <tr>
                    <th class="tab">Numéro de Compte</th>
                    <th class="tab">Nom</th>
                    <th class="tab">Prénom</th>
                    <th class="tab">Compte Courant</th>
                    <th class="tab">Plans Epargne</th>
                    <th class="tab">Date d'Ouverture</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->numcomp }}</td>
                        <td>{{ $account->nom }}</td>
                        <td>{{ $account->prenom }}</td>
                        <td>{{ $account->compte_courant }}</td>
                        <td>{{ $account->Plans_epargne }}</td>
                        <td>{{ $account->date_ouverture }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </Main>
    <!-- footer -->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 -z-10">
        <div class="w-full max-w-screen-xl mx-auto md:py-8">

            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                    class="hover:underline">ALPHA TRANSIT™</a>. All Rights Reserved.</span>
        </div>
    </footer>




<script >
    @yield('script')

</script>
<script>
        @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Error!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</body>

</html>