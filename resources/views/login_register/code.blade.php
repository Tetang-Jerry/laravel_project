@extends('layout.layout')


@section('content')
    <a href="{{route('modalView')}}" class="absolute top-0  flex place-items-center gap-1 pt-10 ml-5 text-center">
        <ion-icon name="arrow-back" class="text-xl"></ion-icon>
        <p>Back</p>
    </a>
    <main>
     <form id="tokenForm" method="POST" action="{{route('tokenVerify')}}"  class="h-auto  w-[500px] bg-white mx-auto mt-[200px] py-7 px-6 rounded-xl shadow-xl  shadow-gray-400">
         @csrf
             <h1 class="text-center font-semibold text-4xl">Entrer Le Code</h1>
             <div class="cont mt-10 flex justify-center gap-4">
                 <input type="text" id="input1" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
                 <input type="text" id="input2" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
                 <input type="text" id="input3"  class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
                 <input type="text" id="input4" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
             </div>

         @if(Session::has('error'))
             <p class="text-red-500 py-3 text-center">{{Session::get('error')}}</p>
         @endif

             <div class="mt-10">
                 <button type="submit"  class="cursor-pointer flex justify-center  text-primary text-center  w-[60%] rounded-md mx-auto py-3 border border-primary
                           hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Confirmer</button>
             </div>

             <p id="timeout" class="flex text-xl gap-2 place-items-center  mt-5 justify-center">Renvoyer le code apres <span id="time" class="  font-bold ">10</span>s</p>

             <div id="renvoyez" class="hidden text-gray-400 mt-5 text-xl flex-col gap-5 place-items-center">
                 <a href="" class=" flex justify-center hover:text-gray-700 transition-all duration-300 ease-in-out">Renvoyez le code</a>
             </div>
     </form>
    </main>
@endsection


@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('.cont input[type="text"]');
            inputs.forEach((input, index) => {
                input.addEventListener('input', () => {
                    if (input.value.length === input.maxLength) {
                        const  nextInput = inputs[index + 1];
                        if (nextInput) {
                            nextInput.focus();
                        }
                    }
                });

                input.addEventListener('keydown', (event) => {
                    if (event.key === 'Backspace' && input.value.length === 0) {
                        const prevInput = inputs[index - 1];
                        if (prevInput) {
                            prevInput.focus();
                        }
                    }
                })
            })

        })

        let time = document.getElementById('time');
        let resend = document.getElementById('renvoyez');
        let timeout = document.getElementById('timeout');

        setTimeout(()=> {

            let  interval =  setInterval(()=> {
                let newTime = parseInt(time.textContent);

                newTime -= 1;
                time.textContent = newTime;

                if (time.textContent == '0') {
                    clearInterval(interval);
                    resend.classList.remove('hidden');
                    timeout.classList.add('hidden');
                }
            },1000)
        }, 2000)

        document.getElementById('tokenForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const input1 = document.getElementById('input1').value;
            const input2 = document.getElementById('input2').value;
            const input3 = document.getElementById('input3').value;
            const input4 = document.getElementById('input4').value;

            const token = input1 + input2 + input3 + input4;

            const form = e.target;
            const tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'token');
            tokenInput.setAttribute('value', token);
            form.appendChild(tokenInput);

            form.submit();
        });
    </script>
@endsection
