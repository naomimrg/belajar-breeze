<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <x-card title="Title 1"/>
    {{-- <x-card title="Title 2"/>
    <x-card title="Title 3"/>
    <x-card title="Title 4"/> --}}

    {{-- <div class="shadown rounded-md  p-4">
        <h1 class="text-lg">title 1</h1>
    </div>
    <div class="shadown rounded-md  p-4">
        <h1 class="text-lg">title 2</h1>
    </div>
    <div class="shadown rounded-md  p-4">
        <h1 class="text-lg">title 3</h1>
    </div>
    <div class="shadown rounded-md  p-4">
        <h1 class="text-lg">title 4</h1>
    </div> --}}
</x-app-layout>
