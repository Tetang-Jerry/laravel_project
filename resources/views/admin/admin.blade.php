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
                                    <input type="search" id="default-search" onkeyup="searchTable()" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border-none shadow-lg rounded-xl bg-gray-50 focus:ring-primary outline-none focus:border-none " placeholder="Search user" required />
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

                        <table class="min-w-full bg-white rounded-lg shadow">
                            <thead>
                            <tr class="w-full bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-2 px-5">Id</th>
                                <th class="py-2 px-5">Status</th>
                                <th class="py-2 px-5">Numéro de compte</th>
                                <th class="py-2 px-5">Nom</th>
                                <th class="py-2 px-5">Prénom</th>
                                <th class="py-2 px-5">Nom d'utilisateur</th>
                                <th class="py-2 px-5">Email</th>
                                <th class="py-2 px-5">Telephone</th>
                                <th class="py-2 px-5">Option</th>
                            </tr>
                            </thead>
                            <tbody id="userTable" class="text-gray-600 text-sm font-light">
                            @foreach ($users as $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6">{{ $user->id }}</td>
                                    <td class="py-3 px-6">
                                        @if($user->session >0)
                                            <span class="border-2 border-solid border-green-500 text-white rounded-full w-2 px-2 bg-green-600 h-2">online</span>
                                        @else
                                            <span class="border-2 border-solid border-red-500 text-white rounded-full w-2 px-2 bg-red-600 h-2">offline</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-6">{{ $user->numCompte }}</td>
                                    <td class="py-3 px-6">{{ $user->nom }}</td>
                                    <td class="py-3 px-6">{{ $user->prenom }}</td>
                                    <td class="py-3 px-6">{{ $user->username }}</td>
                                    <td class="py-3 px-6">{{ $user->email }}</td>
                                    <td class="py-3 px-6">{{ $user->numero}}</td>
                                    <td class="py-3 px-6">
                                        <div class="flex gap-1">
                                            <button onclick="showUser({{ $user->id }})" class="px-5 py-1 text-white bg-green-500">More</button>
                                            <button onclick="confirmDelete({{ $user->id }})" class="px-5 py-1 text-white bg-red-500">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

<!-- Modals -->
                        <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-xl font-semibold mb-4">Confirmer la suppression</h2>
                                <p class="mb-4">Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.</p>
                                <div class="flex justify-end gap-2">
                                    <button onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded">Annuler</button>
                                    <form id="deleteForm" action="{{ route('users.destroy', $user->id) }}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="userModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
                            <!-- Modal for More Information -->
                            <div id="moreModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <h2 class="text-xl font-semibold mb-4">Détails de l'utilisateur</h2>
                                    <div id="userDetails" class="mb-4">
                                        <!-- User details will be inserted here -->
                                    </div>
                                    <div class="flex justify-end gap-2">
                                        <button onclick="closeModal('moreModal')" class="px-4 py-2 bg-gray-500 text-white rounded">Fermer</button>
                                    </div>
                                </div>
                            </div>
</div>
</div>


        </div>
    </div>


@endsection
@section('script')




@endsection
