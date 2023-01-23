<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
            <h2>
              {{$header}}
            </h2>
            
            <button class=" float-right rounded-md bg-green-600 p-1 hover:bg-green-700">Add Users</button>

            <table class="table-auto w-full">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                        <td>{{ $user->name}}</td> 
                        <td class='text-center'>{{ $user->email}}</td>
                        <td class='text-center'>
                        <button class="rounded-md bg-green-600 p-1 hover:bg-green-700">Update</button>
                        <button class="rounded-md bg-green-600 p-1 hover:bg-green-700">Delete</button>
                                                
                       </td>
                        
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
