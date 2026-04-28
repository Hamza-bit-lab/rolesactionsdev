<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permission') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="role-form">
                        <!-- <button  class="btn btn-primary">Add Roles</button> -->
                        <a href="{{ route('permissions.create') }}" class="btn btn-primary">Create Permission</a>

                        @if(session('success_message'))

                                <div class="alert alert-success mt-2">
                                    {{session('success_message')}}
                                </div>
                        @endif

                        <table class="table mt-2">
                            <thead>
                                <tr>
                                
                                <th scope="col">Permission</th>
                                <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                <tr>
                                
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->created_at->diffForHumans() }}</td>
                                </tr>

                                @endforeach
                            </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
