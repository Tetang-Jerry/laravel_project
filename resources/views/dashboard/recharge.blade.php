@extends('layout.Dashboard')

@section('contain')
    {{-- container --}}
    <div class="w-[100%] h-[100%] relative overflow-hidden">
        {{-- block 1 --}}
        <div class="flex flex-col w-full justify-center items-center" id="block1">
            <div class="flex justify-between w-[90%] mb-7">
                <h2 class="text-gray-400 font-bold uppercase text-xl">recharge</h2>
                <h3 class="font-bold uppercase">moyens de recharge</h3>
            </div>

            <div class="grid grid-cols-2 md:grid md:grid-cols-3 gap-5">
                <button id="choix">
                    <img src="/images/momo.jpg" alt="momo" class="w-36 border-primary" id="image">
                </button>

                <button>
                    <img src="/images/orange money.jpg" alt="orange money" class="w-36 border-primary" id="image">
                </button>

                <button>
                    <img src="/images/airtel-money.jpg" alt="airtel-money" class="w-36 border-primary" id="image">
                </button>

                <button>
                    <img src="/images/flooz-money.jpg" alt="flooz-money" class="w-36 border-primary" id="image">
                </button>

                <button>
                    <img src="/images/afrimoney.png" alt="afrimoney" class="w-36 border-primary" id="image">
                </button>

                <button>
                    <img src="/images/Tigo-Cash-logo.jpg" alt="Tigo-Cash-logo" class="w-36 border-primary" id="image">
                </button>

                <button>
                    <img src="/images/UBA-logo.png" alt="UBA-logo" class="w-36 border-primary" id="image">
                </button>
            </div>

            <div class="mt-5 w-[85%] flex flex-row justify-between">
                <a href="{{ route('dashboardView') }}" class="py-3 px-5 text-white bg-primary border-0 rounded-md shadow-lg max-w-24 text-center">Back</a>
                <button class="py-3 px-5 text-white bg-primary border-0 rounded-md shadow-lg max-w-24 text-center" id="suivantblock2">Suivant</button>
            </div>
        </div>

        {{-- block 2 --}}
        <div class="absolute top-0 left-full bg-white w-[100%] h-[100%]" id="block2">
            <div class="mt-5 w-[85%] flex flex-row justify-between m-4">
                <button id="backblock1" class="py-3 px-5 text-white bg-primary border-0 rounded-md shadow-lg max-w-24 text-center">Back</button>
            </div>

            <div class="w-full border flex justify-center">
                <h2 class="text-lg font-bold uppercase place-items-start mb-3">Renseigner les informations</h2>
            </div>

            <div class="flex flex-col items-center justify-center w-full">
                <form action="" method="post">
                    <div class="m-3">
                        <label for="telephone" class="font-bold text-primary">Telephone</label>
                        <input type="text" name="telephone" id="telephone" class="w-[90%] px-3 bg-white border h-10 rounded-md shadow-2xl">
                    </div>

                    <div class="m-3">
                        <label for="montant" class="font-bold text-primary">Montant</label>
                        <input type="number" name="montant" id="Montant" class="w-[90%] px-3 bg-white border h-10 rounded-md shadow-2xl">
                    </div>

                    <div class="m-3">
                        <label for="montant" class="font-bold text-primary">code secret</label>
                        <input type="password" name="code" id="code" class="w-[90%] px-3 bg-white border h-10 rounded-md shadow-2xl">
                    </div>

                    <input type="submit" value="valider" class="cursor-pointer py-3 px-5 m-3 text-white bg-primary border-0 rounded-md shadow-lg max-w-24 text-center">
                </form>
            </div>
        </div>
    </div>
@endsection
