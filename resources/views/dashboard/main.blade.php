@extends('layout.dashboard');

@section('contain')

<div class="flex flex-row  justify-between m-3">
    <p class="font-bold text-xl">Actions</p>
   <p class="text-primary font-bold place-items-end">All actions</p>
</div>

<div class="grid grid-cols-1 px-7 w-full gap-4 md:grid-cols-2">

<a href="{{route('retraitView')}}" class=" flex flex-col bg-white rounded-lg shadow-lg px-6 py-6">
    <p class="font-bold text-xl flex justify-between">
    <p class="font-bold text-xl text-primary mb-2">
        Retrait
    </p>

    <div class="place-self-end">
        <img src="/images/withdrawal.png" alt="wallet" class="w-[70px] ">
    </div>

</a>


<a href=" {{route('rechargeView')}}"class=" flex flex-col bg-white rounded-lg shadow-lg px-6 py-6">
    <p class="font-bold text-xl flex justify-between">
    <p class="font-bold text-xl text-primary mb-2">
        Recharge
    </p>

    <div class="place-self-end">
        <img src="/images/deposit.png" alt="wallet" class="w-[70px] wallet">
    </div>

</a>


<a href="{{route('transfertView')}}" class=" flex flex-col bg-white rounded-lg shadow-lg px-6 py-6">
    <p class="font-bold text-xl flex justify-between">
    <p class="font-bold text-xl text-primary mb-2">
        Transfert
    </p>

    <div class="place-self-end">
        <img src="/images/transfer.png" alt="wallet" class="w-[70px]">
    </div>

</a>

<div class=" flex flex-col bg-white rounded-lg shadow-lg px-6 py-12">
    <div class="flex justify-between m-0">
        <p class="font-bold">Total Transfers</p>
        <p class=" text-customBlue text-[20px]">july</p>
    </div>

   <div class="flex justify-between w-full mt-4  font-bold">
    <p>$45000</p>
    <p>$100000</p>
     </div>

     <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mt-3">
        <div class="bg-primary h-2.5 rounded-full load w-[45%]"></div>
       </div>

</div>


</div>

<div class=" hidden lg:rounded-lg lg:shadow-lg lg:grid lg:grid-cols-5  lg:bg-[linear-gradient(to_right,_#C174EA,_#B7A4F0)] p-3">

<div class=" col-span-3">

 <p class="text-white font-bold text-xl uppercase md:text-3xl">
     protect your money
 </p>
 
 <p class="text-white font-500 md:text-lg ">
 set up  two-factor authentification the <br>when withdrawing money
 </p>

</div>

<div class=" col-span-2 ">
 <img src="/images/lock.png" alt="security" class="wallet md:w-xsm lg:max-w-xsm">
</div>

 </div>

</div>
@endsection

