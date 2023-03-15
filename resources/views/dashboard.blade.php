<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex items-center py-12">
        {{--  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>  --}}
        <img class="mx-auto" src="{{url('/images/person1.png')}}" alt="Image" width="300" height="250"/>
        <div id="details">
            <h3>{{ $user->age }}</h3>
            <h3>{{ $user->height }} {{ $user->height_unit }}</h3>
            <h3>{{ $user->weight }} {{ $user->weight_unit }}</h3>

        </div>
    </div>
</x-app-layout>
