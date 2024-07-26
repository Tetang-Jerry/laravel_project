@extends('layout.topbar')

@section('cssImport')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

{{--@section('scriptImport')
@endsection--}}

@section('container')
    <div class="mx-5 mt-24 w-full">

            <div class="w-full">
                <a href="#" class="float-right px-5 py-1 text-white">add new</a>

            </div>
        <div class="w-full bg-white shadow-xl">
                    <div class="titlle">
{{--                        <h2>Recent profiles</h2>--}}
{{--                        @if(request()->routeIs('adminView'))--}}
{{--                            <a href="{{route('allUser')}}" class="px-5 py-2 text-white bg-primary"> view all</a>--}}
{{--                        @endif--}}
                    </div>
                    <hr />
            <table class="w-full">
                <thead class="mb-2">
                <tr class="bg-gray-300">
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">Id</th>
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">lastname</th>
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">first name</th>
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">username</th>
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">email</th>
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">number</th>
                    <th class="py-2 px-3 text-left border border-solid border-gray-500">option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="py-2 px-3 text-left border border-solid border-gray-500">{{ $user->id }}</td>
                        <td class="py-2 px-3 text-left border border-solid border-gray-500">{{ $user->nom }}</td>
                        <td class="py-2 px-3 text-left border border-solid border-gray-500">{{ $user->prenom }}</td>
                        <td class="py-2 px-3 text-left border border-solid border-gray-500">{{ $user->username }}</td>
                        <td class="py-2 px-3 text-left border border-solid border-gray-500">{{ $user->email }}</td>
                        <td class="py-2 px-3 text-left border border-solid border-gray-500">{{ $user->numero }}</td>
                        <td class="flex gap-1 py-2 px-3 text-left border border-solid border-gray-500">
                            <a href="#" class="px-5 py-1 text-white bg-green-500">more</a>
                            <form action="#" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-5 py-1 text-white bg-red-500">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
