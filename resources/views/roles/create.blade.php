<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-3">
                        <label for="name" class="form-label">Role Name</label>
                        <form method="post" action="{{route('roles.store')}}">
                            @csrf
                        <input 
                            name="name" 
                            id="name"
                            type="text" 
                            class="form-control" 
                            placeholder="Enter role name"
                            required
                        >

                        <button type="sumbit" class="btn btn-success mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
