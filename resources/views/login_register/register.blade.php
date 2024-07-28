@extends('layout.layout')


@section('content')
    <main>
        <a href="{{ route('home') }}" class="absolute flex gap-1 pt-10 ml-5 text-center place-items-center">
            <ion-icon name="arrow-back" class="text-xl"></ion-icon>
            <p>Back</p>
        </a>
        <div class="flex flex-col place-items-center">
            <div class="mt-3 h-fit"><img
                    src="{{ asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png') }}" alt=""
                    class="w-[250px] h-fit"></div>
            <form action="{{ route('registerUser') }}" method="POST"
                class="w-2/6 h-auto px-12 pt-10 pb-4 mx-auto mt-6 bg-white shadow-xl shadow-gray-400 rounded-xl">
                <div class="flex flex-col place-items-center">
                    <div class="mt-3 h-fit"><img
                            src="{{ asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png') }}"
                            alt="" class="w-[250px] h-fit"></div>
                    <form action="{{ route('registerUser') }}" method="POST"
                        class="w-2/6 h-auto px-12 pt-10 pb-4 mx-auto mt-6 bg-white shadow-xl shadow-gray-400 rounded-xl">
                        @csrf
                        <h1 class="text-3xl font-semibold text-center text-primary">S'enregistrer</h1>
                        <div id="form1" class="flex-col hidden gap-8 mt-5 forms">
                            <div class="flex flex-col ">
                                <label for="name">Nom</label>
                                <input type="text" name="nom" placeholder="Entrer votre nom..."
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('nom', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="flex flex-col ">
                                <label for="surname">Prenom</label>
                                <input type="text" name="prenom" placeholder="Entrer votre prenom..."
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('prenom', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="flex flex-col ">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" name="username" placeholder="Entrer un nom d'utilisateur..."
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('userename', "<p class='text-red-500'>:message</p>") !!}
                            </div>


                            <div class="flex gap-5 cont">

                                <button type="button"
                                    class="next-button mt-5 cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Next</button>
                            </div>



                            <div class="flex flex-col gap-5 text-xs text-gray-400 place-items-center">
                                <a href="{{ route('loginView') }}"
                                    class="transition-all duration-300 ease-in-out hover:text-gray-700">Vous avez déjà un
                                    compte?
                                    connectez-vous</a>
                            </div>
                        </div>
                        <div id="form2" class="flex-col hidden gap-8 mt-5 forms">
                            <div class="flex flex-col ">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Entrer votre addresse mail..."
                                    id="email"
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('email', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="relative flex flex-col">
                                <label for="password">Mot de Passe</label>
                                <input id="password" type="password" name="password"
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                <ion-icon name="eye" onclick="visible()"
                                    class="absolute z-40 text-2xl cursor-pointer right-3 top-9"></ion-icon>
                                {!! $errors->first('password', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="flex flex-col ">
                                <label for="password">Re-entrer le mot de passe</label>
                                <input type="password" name="passwordVerify"
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('passwordVerify', "<p class='text-red-500'>:message</p>") !!}
                            </div>



                            <div class="flex gap-5 cont">
                                <button type="button"
                                    class="prev-button mt-5 cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Prev</button>

                                <button type="button"
                                    class="next-button mt-5 cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Next</button>
                            </div>



                            <div class="flex flex-col gap-5 text-xs text-gray-400 place-items-center">
                                <a href="{{ route('loginView') }}"
                                    class="transition-all duration-300 ease-in-out hover:text-gray-700">Vous avez déjà un
                                    compte?
                                    connectez-vous</a>
                            </div>
                        </div>
                        <div id="form3" class="flex flex-col hidden gap-8 mt-5 forms">
                            <div class="flex flex-col ">
                                <label for="numero">Numero de téléphone</label>
                                <input type="text" name="numero" placeholder="+237"
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('numero', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="relative flex flex-col">
                                <label for="code">Code Secret</label>
                                <input id="code" type="password" name="code"
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                <ion-icon name="eye" onclick="visible()"
                                    class="absolute z-40 text-2xl cursor-pointer right-3 top-9"></ion-icon>
                                {!! $errors->first('code', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="flex flex-col ">
                                <label for="code">Re-entrer le Code Secret</label>
                                <input type="password" name="codeVerify"
                                    class="px-3 py-3 border border-gray-400 rounded-md focus:border focus:outline-none focus:border-gray-800">
                                {!! $errors->first('codeVerify', "<p class='text-red-500'>:message</p>") !!}
                            </div>

                            <div class="flex gap-5 mt-5 cont">
                                <button type="button"
                                    class="prev-button cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Back</button>

                                <button type="button" onclick="emailCopy()"
                                    class=" next-button cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Terminer</button>
                            </div>

                            <div class="flex flex-col gap-5 text-xs text-gray-400 place-items-center">
                                <a href="{{ route('loginView') }}"
                                    class="transition-all duration-300 ease-in-out hover:text-gray-700">Vous avez déjà un
                                    compte?
                                    connectez-vous</a>
                            </div>
                        </div>
                        <div id="form4" class="flex flex-col hidden gap-8 mt-5 forms">

                            <div class="relative mx-auto w-fit">
                                <button type="button"
                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="popup-modal">

                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 text-center md:p-5">
                                    <ion-icon name="mail-open" class="text-4xl text-gray-500"></ion-icon>

                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Un code de
                                        verification
                                        sera a l'adresse suivante</h3>
                                    <p class="mb-5 text-center text-green-500 emailCont"></p> {{-- addresse mail de l'utilisateur --}}
                                    <p class="mb-5">L'adresse mail est bien correcte ou voulez vous la modifier?</p>
                                    <button type="submit"
                                        class="submit-button text-white bg-green-600 hover:bg-green-800   font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Envoyez le code
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


    </main>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const forms = document.querySelectorAll('.forms');
            let currentFormIndex = 0;

            forms[currentFormIndex].classList.remove('hidden');

            document.querySelectorAll(".next-button").forEach(button => {
                button.addEventListener("click", () => {
                    navigateForms(1, button);
                });
            });

            document.querySelectorAll(".prev-button").forEach(button => {
                button.addEventListener("click", () => {
                    navigateForms(-1, button);
                });
            });
        });

        function navigateForms(direction, button) {
            const currentForm = button.closest('.forms');
            currentForm.classList.add('hidden');

            if (direction === 1) {
                currentForm.nextElementSibling.classList.remove('hidden');
            } else if (direction === -1) {
                currentForm.previousElementSibling.classList.remove('hidden');
            }
        }

        function visible() {
            let password = document.getElementById('password')
            let code = document.getElementById('code')


            if (password.type === 'password') {
                password.type = 'text';
            } else if (password.type === 'text') {
                password.type = 'password';
            }

            if (code.type === 'password') {
                code.type = 'text';
            } else if (code.type === 'text') {
                code.type = 'password';
            }
        }

        function emailCopy() {
            let email = document.getElementById('email').value

            let emailcopy = document.querySelector('.emailCont')

            emailcopy.innerText = email;
        }
    </script>
@endsection
