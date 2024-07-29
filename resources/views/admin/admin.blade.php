@extends('layout.topbar')

@section('cssImport')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

{{--@section('scriptImport')
@endsection--}}

@section('container')
    <div class="mx-5 mt-24 w-full h">

            <div class="w-full">
                <a href="#" class="float-right px-5 py-1 text-white">add new</a>

            </div>
        <div class="w-full bg-white shadow-xl">
                    <div class="titlle flex justify-between items-center">


                       @if(request()->routeIs('adminView'))
                            <h2 class="border border-primary border-solid py-2 px-3 uppercase font-bold underline  rounded-md"> Recent Users list</h2>

                           <a href="{{route('allUser')}}" class="px-5 py-2  hover:bg-primary hover:text-white duration-700 ease-in-out border-primary border border-solid rounded-md"> view all</a>
                       @endif
                        @if(request()->routeIs('allUser'))
                               <h2 class="text-2xl font-bold">All Users list</h2>

                               <form class="max-w-lg w-1/2 mx-auto" action="{{route('search')}}" method="post">
                                   @csrf
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border-none shadow-lg rounded-xl bg-gray-50 focus:ring-primary outline-none focus:border-none " placeholder="Search user" required />
                                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primary   focus:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                                </div>
                               </form>
                               <a href="{{route('adminView')}}" class="px-5 py-2  hover:bg-primary hover:text-white duration-700 ease-in-out border-primary border border-solid rounded-md"> back</a>

                           @endif
                           @if(request()->routeIs('search'))
                               <h2 class="capitalize text-gray-400">your search</h2>

                               <a href="{{route('allUser')}}" class="px-5 py-2  hover:bg-primary hover:text-white duration-700 ease-in-out border-primary border border-solid rounded-md"> back</a>
                           @endif
                    </div>
                    <hr />
                    <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="py-2 px-3 text-left border border-gray-500">Id</th>
            <th class="py-2 px-3 text-left border border-gray-500">Numéro de compte</th>
            <th class="py-2 px-3 text-left border border-gray-500">Nom</th>
            <th class="py-2 px-3 text-left border border-gray-500">Prénom</th>
            <th class="py-2 px-3 text-left border border-gray-500">Nom d'utilisateur</th>
            <th class="py-2 px-3 text-left border border-gray-500">Email</th>
            <th class="py-2 px-3 text-left border border-gray-500">Telephone</th>
            <th class="py-2 px-3 text-left border border-gray-500">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->id }}</td>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->numCompte }}</td>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->nom }}</td>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->prenom }}</td>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->username }}</td>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->email }}</td>
                <td class="py-2 px-3 text-left border border-gray-500">{{ $user->numero}}</td>
                <td class="py-2 px-3 text-left border border-gray-500">
                    <div class="flex gap-1">
                        <a href="#" onclick="showUser({{$user->id}})" class="px-5 py-1 text-white bg-green-500">More</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-5 py-1 text-white bg-red-500">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



<!-- Modal -->
<div id="userModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="bg-white p-5 rounded relative shadow-lg">
        <button onclick="closeModal()" onblur="closeModal()" class="mt-4 absolute top-2 right-2 px-4 py-2 bg-red-500 text-white rounded">Close</button>

        <h2 class="text-xl my-3">User Information</h2>
        <p><strong>Id:</strong> <span id="modalUserId"></span></p>
        <p><strong>Numéro de compte:</strong> <span id="modalUserNumcompte"></span></p>
        <p><strong>Nom:</strong> <span id="modalUserNom"></span></p>
        <p><strong>Prénom:</strong> <span id="modalUserPrenom"></span></p>
        <p><strong>Nom d'utilisateur:</strong> <span id="modalUserUsername"></span></p>
        <p><strong>Email:</strong> <span id="modalUserEmail"></span></p>
        <p><strong>Telephone:</strong> <span id="modalUserNumero"></span></p>
        <div class="flex justify-center">
            <button onclick="" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">view transaction</button>
        </div>


    </div>
</div>
</div>


        </div>
    </div>


@endsection
@section('script')


    function showUser(id) {
{{--    fetch(`/users/${id}`)--}}
{{--    .then(response => response.json())--}}
{{--    .then(user => {--}}
    document.getElementById('modalUserId').textContent = "id";
    document.getElementById('modalUserNumcompte').textContent = "numcompte";
    document.getElementById('modalUserNom').textContent = "nom";
    document.getElementById('modalUserPrenom').textContent = "prenom";
    document.getElementById('modalUserUsername').textContent = "username";
    document.getElementById('modalUserEmail').textContent = "email";
    document.getElementById('modalUserNumero').textContent = "numero";
    document.getElementById('userModal').classList.remove('hidden');
{{--    });--}}
    }

    function closeModal() {
    document.getElementById('userModal').classList.add('hidden');
    }
@endsection
